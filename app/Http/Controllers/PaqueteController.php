<?php

namespace App\Http\Controllers;

use App\Paquete;
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('app.paquetes.create');
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
     * @param  \App\paquete  $paquete
     * @return \Illuminate\Http\Response
     */
    public function show(paquete $paquete)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\paquete  $paquete
     * @return \Illuminate\Http\Response
     */
    public function edit(paquete $paquete)
    {
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
