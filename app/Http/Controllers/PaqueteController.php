<?php

namespace App\Http\Controllers;

use App\Paquete;
use App\Linea;
use Illuminate\Http\Request;

class PaqueteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paquetes = new PaqueteController();
        $paquetes = $paquetes->get_paquetes();
        return view('app.paquetes.index',compact('paquetes'));
    }


    public function get_paquetes(){
        $lis_paquetes = Paquete::all()->toArray();
        return $lis_paquetes;
    }
    public function get_lineas(){
        $lis_lineas = Linea::all()->toArray();
        return $lis_lineas;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lineas = new PaqueteController();
        $lineas = $lineas->get_lineas();
        return view('app.paquetes.create',compact('lineas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paquete = new Paquete();
        $paquete->id_linea = $request->input('id_linea');
        $paquete->nombre = $request->input('nombre');
        $paquete->duracion = $request->input('duracion');
        $paquete->valor = $request->input('valor');
        $paquete->save();
        
        return redirect()->route('paquete.index');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\paquete  $paquete
     * @return \Illuminate\Http\Response
     */
    public function show($id_linea)
    {
        $paquetes = Paquete::where('id_linea','=',$id_linea)->select('*')->get();
        return $paquetes;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\paquete  $paquete
     * @return \Illuminate\Http\Response
     */
    public function edit(paquete $paquete)
    {
        $lineas = new PaqueteController();
        $lineas = $lineas->get_lineas();
        return view('app.paquetes.edit',compact('lineas','paquete'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\paquete  $paquete
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, paquete $paquete)
    {
        $paquete->id_linea = $request->input('id_linea');
        $paquete->nombre = $request->input('nombre');
        $paquete->duracion = $request->input('duracion');
        $paquete->valor = $request->input('valor');
        
        $paquete->save();

        return redirect()->route('paquete.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\paquete  $paquete
     * @return \Illuminate\Http\Response
     */
    public function destroy(paquete $paquete)
    {
        //
    }
}
