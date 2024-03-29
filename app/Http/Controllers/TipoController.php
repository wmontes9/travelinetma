<?php

namespace App\Http\Controllers;

use App\Tipo;
use Illuminate\Http\Request;
use Session;
use App\Linea;
use App\Paquete;
use DB;
use App\Destino;
use App\Tarifa;
use App\DetallePaquete;


class TipoController extends Controller
{
    public $page = '';
    public $id_linea = '';

    public function __construct(){
        if(!empty($_REQUEST['linea']) && !empty($_REQUEST['ids'])){
            $this->page = $_REQUEST['linea'];
            $this->id_linea = $_REQUEST['ids'];
        }
        
    }

    public function index()
    {  

        $linea = $this->get_detalles($this->id_linea);

        //dd($linea);

        if($linea){
           


            $detalles_servicios = new DetalleServicioController();
            $detalles_servicios = $detalles_servicios->show($linea['servicios']->id);

            $tipo = $this->get_tipo_linea($this->id_linea);
            $id_tipo = $tipo->id_tipo;

            $lineas = $this->get_lineas_tipo($id_tipo);
            


            $paquetes = new PaqueteController();
            $paquetes = $paquetes->show($this->id_linea);

           


            //
            $id_paquete = '';
            if(!empty($_REQUEST['id_paquete'])){
                $id_paquete = $_REQUEST['id_paquete'];

              /*  $paquete = Paquete::with(['detalle_paquete'=>function($dp){
                    $dp->with(['destino']);
                }])->whereHas('detalle_paquete',function($dp) use($id_paquete){
                    $dp->where('id_paquete',$id_paquete);
                })->get()->last();

                */

                $detalles_paquete = DetallePaquete::with(['destino'=>function($destino){
                    $destino->with(['imagenes']);
                }])->where('id_paquete',$id_paquete)->orderBy('orden','ASC')->get();

               // dd($detalles_paquete);

                               
                
                $detalles_servicios = Paquete::where('id',$id_paquete)->with(['servicios'])->get();


                $tarifas = Tarifa::where('id_paquete',$id_paquete)->with('paquetes')->orderBy('edad_max','ASC')->get();



               // dd();

                 return view('lineas.detalles',compact('linea','lineas','tipo','tarifas','detalles_servicios','detalles_paquete'));
            }else{
                $link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

               // dd(count($paquetes));
                if(count($paquetes)===1){
                   $ruta = $link.'&id_paquete='.$paquetes[0]->id; 
                  return redirect($ruta);
                }
                //dd($url_actual);
                 return view('lineas.detalles',compact('linea','lineas','tipo','detalles_servicios','paquetes'));
            }
           

        }else{
           
              //  return redirect()->back();
        }
}


public function get_tipo_linea($id_linea){
    $sql = DB::table('tipo_lineas as tl')
    ->join('tipos as t','t.id','tl.id_tipo')
    ->join('lineas as l','l.id','tl.id_linea')
    ->where('id_linea',$id_linea)->select('*','t.nombre as categoria')->get()->last();

   //dd($sql);
    return $sql;
}


public function get_lineas_tipo($id_tipo){
    $sql = DB::table('lineas as l')
    ->join('tipo_lineas as tl','tl.id_linea','l.id')
    ->where('tl.id_tipo',$id_tipo)
    ->select('*')->get();

    return $sql;
}






public function get_detalles($id_linea){
    $linea = Linea::find($id_linea);

     $servicios = Paquete::with(['itinerario', 
        'servicios',
        'destinos',
        'destinos.imagenes'])
        ->where("id_linea", "=", $id_linea)
        ->first();

        if($servicios!=null){
            return array('datos_linea'=>$linea,'servicios'=>$servicios); 
        }else{  
            return array(); 
           //return redirect()->back(); 
        }             
        
}


    public function get_tipos(){
        $tipos = Tipo::orderBy('id','DESC')->get();
        return $tipos;
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $tipo = new Tipo();
        $tipo->nombre = $request->nombre;
        $tipo->save();

         Session::flash('response','Categoria añadida correctamente.');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tipo  $tipo
     * @return \Illuminate\Http\Response
     */


    public function show(tipo $tipo)
    {
       // dd($linea);
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
     * @param  \App\tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function edit(tipo $tipo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tipo $tipo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tipo  $tipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(tipo $tipo)
    {
        //
    }
}
