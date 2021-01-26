<?php

namespace App\Http\Controllers;

use App\tipo;
use Illuminate\Http\Request;
use Session;
use App\Linea;
use App\Paquete;


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
<<<<<<< HEAD


        $linea = $this->get_detalles($this->id_linea);
        if($linea){
            $tarifas = new TarifaController();
            $detalles_servicios = new DetalleServicioController();
            //dd($linea['servicios']->id);
            $tarifas = $tarifas->show($linea['servicios']->id);
            $detalles_servicios = $detalles_servicios->show($linea['servicios']->id);
            return view('lineas.detalles',compact('linea','tarifas','detalles_servicios'));
=======
      

        $linea = $this->get_detalles($this->id_linea);
        if($linea){
            return view('lineas.detalles',compact('linea'));
>>>>>>> fd061cf184ee7acfe8a09e6dd461ad9a38541ba3
        }else{
            return redirect()->back();
        }
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
