<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

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
        return view('app.tarifa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
