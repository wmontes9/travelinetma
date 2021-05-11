<?php

namespace App\Http\Controllers;

use App\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicios = new ServicioController();
        $servicios = $servicios->get_servicios();
        return view('app.servicios.index',compact('servicios'));
    }
    public function get_servicios(){
        $lis_servicios = Servicio::all()->toArray();
        return $lis_servicios;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app.servicios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paquete = new Servicio();
        $paquete->nombre = $request->input('nombre');
        $paquete->save();
        
        return redirect()->route('servicio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function show(servicio $servicio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function edit(servicio $servicio)
    {
        return view('app.servicios.edit',compact('servicio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, servicio $servicio)
    {
        $servicio->nombre = $request->input('nombre');
        $servicio->save();

        return redirect()->route('servicio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function destroy(servicio $servicio)
    {
        //
    }
}
