<?php

namespace App\Http\Controllers;

use App\Tipo_Establecimiento;
use Illuminate\Http\Request;
use DB;
class TipoEstablecimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos = new TipoEstablecimientoController();
        $tipos = $tipos->get_tipos();
        return view('app.tipo_establecimiento.index',compact('tipos'));
    }


    public function get_tipos(){
        $lis_tipos = Tipo_Establecimiento::all()->toArray();
        //dd($lis_tipos);
        return $lis_tipos;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app.tipo_establecimiento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categoria = new Tipo_Establecimiento();
        $categoria->nombre = $request->input('nombre');
        $categoria->save();
        
        return redirect()->route('tipo_establecimiento.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tipo_Establecimiento  $tipo_Establecimiento
     * @return \Illuminate\Http\Response
     */
    public function show(tipo_Establecimiento $tipo_Establecimiento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tipo_Establecimiento  $tipo_Establecimiento
     * @return \Illuminate\Http\Response
     */
    public function edit(Tipo_Establecimiento  $tipo_Establecimiento)
    {
        dd($tipo_Establecimiento);
        return view('app.tipo_establecimiento.edit',compact('tipo_Establecimiento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tipo_Establecimiento  $tipo_Establecimiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tipo_Establecimiento $tipo_Establecimiento)
    {
        dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tipo_Establecimiento  $tipo_Establecimiento
     * @return \Illuminate\Http\Response
     */
    public function destroy(tipo_Establecimiento $tipo_Establecimiento)
    {
        //
    }
}
