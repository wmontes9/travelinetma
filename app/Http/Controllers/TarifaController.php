<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Tarifa;

class TarifaController extends Controller
{
    public $page = '';

    public function __construct(){
        if(!empty($_REQUEST['page'])){
            $this->page = $_REQUEST['page'];
        }
        
    }


    public function index(){

        switch ($this->page) {
            case 'list':
                    $tarifasCont = new TarifaController();
                    $tarifas = $tarifasCont->get_tarifas_all();
                    return view('app.tarifa.index',compact('tarifas'));
                break;
            
            default:
                break;
        }
    }

    public function get_tarifas_all(){

        $tarifas = DB::table('tarifa as t')->join('paquetes as p','p.id','=','t.id_paquete')->select('*')->get();
        return $tarifas;
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paquetes = new PaqueteController();
        $paquetes = $paquetes->get_paquetes();

        return view('app.tarifa.create',compact('paquetes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $tarifa = new Tarifa();
           $tarifa->id_paquete = $request->id_paquete;
           $tarifa->edad_min = $request->minEdad;
           $tarifa->edad_max = $request->maxEdad;
           $tarifa->valor = $request->valor;
           $tarifa->save();
           Session::flash('response','Tarifa añadida correctamente.');
           return redirect()->back();
    }

    public function get_tarifas_paquete($id_paquete){
       // $tarifas = Tarifa::where('id_paquete','')
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tarifas = Tarifa::where('id_paquete','=',$id)->select('*')->get();
        return $tarifas;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
