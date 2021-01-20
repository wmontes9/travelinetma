<?php

namespace App\Http\Controllers;

use App\Linea;
use App\Paquete;
use App\Tipo;
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
        $lineas = Linea::all();

       switch ($this->page) {
            case 'list':
                    return view('app.lineas.index',compact('lineas'));
                break;
            default:

                break;
        }

        $tipo =  Tipo::with("lineas")->get()->toJson();
        return $tipo;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app.lineas.create');
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
        //
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
        //
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
