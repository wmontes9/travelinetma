<?php

namespace App\Http\Controllers;

use App\Linea;
use App\Paquete;
use App\Tipo;
use App\TipoLinea;
use Illuminate\Http\Request;
use Session;

class LineaController extends Controller
{
    public $page = '';

    public function __construct(){
        if(!empty($_REQUEST['page'])){
            $this->page = $_REQUEST['page'];
        }
        
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

        $tipo =  Tipo::with("lineas")->get()->toJson();
        return $tipo;
    }

    public function get_lineas(){
      $lineas =  Tipo::with("lineas")->get();
      foreach ($lineas as $key => $value) {
        
      }
      return $lineas;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $linea = new Linea();
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Linea  $linea
     * @return \Illuminate\Http\Response
     */
    public function show(Linea $linea)
    {
        $servicios = Paquete::with(['itinerario', 
            'servicios',
            'destinos',
            'destinos.imagenes'])
        ->where("id_linea", "=", $linea->id)
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
        //
    }

}
