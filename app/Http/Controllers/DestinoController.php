<?php

namespace App\Http\Controllers;

use App\Paquete;
use App\Destino;
use Illuminate\Http\Request;

class DestinoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destinos = new DestinoController();
        $destinos = $destinos->get_destinos();
        return view('app.destinos.index',compact('destinos'));
    }


    public function get_destinos(){
        $lis_destinos = Destino::all()->toArray();
        return $lis_destinos;
    }
    public function get_paquetes(){
        $lis_paquetes = Paquete::all()->toArray();
        return $lis_paquetes;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paquetes = new DestinoController();
        $paquetes = $paquetes->get_paquetes();
        return view('app.destinos.create',compact('paquetes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $destino = new Destino();
        $destino->nombre = $request->input('nombre');
        $destino->id_paquete = $request->input('id_paquete');
        $destino->save();
        
        return redirect()->route('destino.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\destino  $destino
     * @return \Illuminate\Http\Response
     */
    public function show(destino $destino)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\destino  $destino
     * @return \Illuminate\Http\Response
     */
    public function edit(destino $destino)
    {
        $paquetes = new PaqueteController();
        $paquetes = $paquetes->get_paquetes();
        //dd($destino);
        return view('app.destinos.edit',compact('paquetes','destino'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\destino  $destino
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, destino $destino)
    {
        $destino->id_paquete = $request->input('id_paquete');
        $destino->nombre = $request->input('nombre');
    
        $destino->save();

        return redirect()->route('destino.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\destino  $destino
     * @return \Illuminate\Http\Response
     */
    public function destroy(destino $destino)
    {
        //
    }
}
