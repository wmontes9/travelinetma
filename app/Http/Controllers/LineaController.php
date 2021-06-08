<?php

namespace App\Http\Controllers;

use App\Linea;
use App\Paquete;
use App\Tipo;
use App\Servicio;
use App\DetalleServicio;
use App\Tarifa;
use App\TipoLinea;
use Illuminate\Http\Request;
use Session;
use DB;

class LineaController extends Controller
{
    public $page = '';

    public function __construct(){
        if(!empty($_REQUEST['page'])){
            $this->page = $_REQUEST['page'];
        }
        
    }


    public function get_linea($id_categoria){ 
       $linea = DB::table('lineas as l')
       ->join('tipo_lineas as tl','tl.id_linea','=','l.id')
       ->join('tipos as t','t.id','=','tl.id_tipo')
       ->where('t.id',$id_categoria)
       ->select('*')->get()->last();
       return $linea;
    }

    public function index()
    {  
       switch ($this->page) {
            case 'list':
                    $lineas = new LineaController();
                    $lineas = $lineas->get_lineas();
                    return view('app.lineas.index',compact('lineas'));
                break;
             case 'categorias':
                    $categorias = new TipoController();
                    $categorias = $categorias->get_tipos();
                    return view('app.lineas.categoria',compact('categorias'));
                break;
            default:
                break;
        }

        $tipo =  Tipo::with("lineas")->get();
        return $tipo;
    }



    public function get_lineas(){
      $lineas =  Tipo::with("lineas")->get();
      return $lineas;
    }


    
    public function create()
    {
        $categorias = new TipoController();
        $categorias = $categorias->get_tipos();
        return view('app.lineas.create',compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //file     
        $file = $request->image->store('public/banner/lineas');     
        $nombre = explode('/',$file);

        $linea = new Linea();
        $linea->image = $nombre[3];
        $linea->nombre = $request->nombre;
        $linea->vivencia = $request->vivencia;
        $linea->save();

        $id_linea = $linea->id;

        $tipos_linea = new TipoLinea();
        $tipos_linea->id_linea = $id_linea;
        $tipos_linea->id_tipo = $request->id_tipo;
        $tipos_linea->save();

        Session::flash('response','Registro creado correctamente');
        return redirect()->back();
    }



    public function show(Linea $linea)
    {
       
        $servicios = Paquete::with(['itinerario', 
            'servicios',
            'destinos',
            'destinos.imagenes'])
        ->where("id_linea", "=", $id_linea)
        ->first()
        ->toArray();          
        return view('lineas.index',[
            "datos_linea" => $linea,
            "servicios" => $servicios
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Linea  $linea
     * @return \Illuminate\Http\Response
     */
    public function edit(Linea $linea)
    {
       return view('app/lineas.edit',compact('linea'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Linea  $linea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Linea $linea)
    {
        if(!empty($request->file('banner'))){
            $file = $request->banner->store('public/banner/lineas');
            $nombre = explode('/',$file);
            $linea->image = $nombre[3];
           
        }
        dd($request->file('banner'));
        if(!empty($request->file('banner_small'))){
            dd();
            $banner_small = $request->banner_small->store('public/banner/lineas');
            $banner_small = explode('/',$banner_small);
            $linea->banner_small = $banner_small[3];   
        }

        $linea->nombre = $request->nombre; 
        $linea->vivencia = $request->vivencia;
        $linea->save();
        Session::flash('response','Registro actualizado correctamente');
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Linea  $linea
     * @return \Illuminate\Http\Response
     */
    public function destroy(Linea $linea)
    {
        //verificar paquetes
        $paquetes = Paquete::where('id_linea','=',$linea->id)->select('*')->get();
        foreach ($paquetes as $key => $value) {
            $servicios = Servicio::where('id_paquete','=',$value->id)->delete();
            $detalle_servicios = DetalleServicio::where('id_paquete','=',$value->id)->delete();
            $detalle_servicios = DetalleServicio::where('id_paquete','=',$value->id)->delete();

        }
        dd($paquetes);
    }

}
