<?php

namespace App\Http\Controllers;

use App\Paquete;
use App\Destino;
use App\Linea;
use Illuminate\Http\Request;
use App\Imagen;

class DestinoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$destinos = [];
        $lineas = Linea::get();

        if(!empty($_REQUEST['id_linea'])){
            $destinos = Destino::with(['paquete'=>function($paquete){
                $paquete->with('linea');
            }])->whereHas('paquete',function($p){
                $p->where('id_linea',$_REQUEST['id_linea']);
            })->orderBy('orden','asc')->get();
        }
        */
        

       //¿ dd($destinos);
       $lineas = Linea::get();
        $destinos = new DestinoController();
        $destinos = $destinos->get_destinos();
        return view('app.destinos.index',compact('destinos','lineas'));
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
        $paquetes = Paquete::with(['linea'])->get();
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
        //$cantidad = Destino::all()->count();
        $destino = new Destino();
        $destino->nombre = $request->input('nombre');
        $destino->descripcion = $request->input('descripcion');
        //$destino->orden = $cantidad+1;
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
        $paquetes = Paquete::with(['linea'])->get();
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
       // dd($request->all());
        if($request->tipo_actualizacion=='orden'){
            $destino_db = Destino::where('id_paquete',$destino->id_paquete)->where('orden',$request->orden)->get()->last();
            //dd($destino_db);
            if(!empty($destino_db->id)){
                $destino_ordenes = Destino::find($destino_db->id);
              //  $destino_ordenes->orden = 0;
                $destino_ordenes->save();
            }
            $destino->orden = $request->orden;
        }else{
            $destino->nombre = $request->input('nombre');
            $destino->descripcion = $request->input('descripcion');
        }
        
        //dd($destino);
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
        $imagenes = Imagen::where('id_destino',$destino->id)->delete();
        $destino->delete();
        return redirect()->back();
    }
}
