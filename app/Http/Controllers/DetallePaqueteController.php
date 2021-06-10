<?php

namespace App\Http\Controllers;

use App\Paquete;
use App\Destino;
use App\Linea;
use Illuminate\Http\Request;
use Session;

class DetallePaqueteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listdestinos = array();
        $listpaquetes=array();
        $lineas = Linea::get();
        
        if(!empty($_REQUEST['id_linea'])){
            Session::put('id_linea',$_REQUEST['id_linea']);
            $linea = Linea::findOrFail($_REQUEST['id_linea']);
            $listpaquetes = $linea->paquetes;
            foreach( $listpaquetes as $paquete){
                array_push($listdestinos,$paquete->destinos);
            }
        }
       //$destinos = new DestinoController();
       //$destinos = $destinos->get_destinos();
       return view('app.detallepaquete.index',compact('listdestinos','lineas','listpaquetes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $destinos = new DestinoController();
        $destinos = $destinos->get_destinos();
        $listdestinos = array();
        
        $id_linea = Session::get('id_linea');
        $linea = Linea::findOrFail($id_linea);
        $paquetes = $linea->paquetes;
        if(!empty($_REQUEST['id_paquete'])){
            $paquete = Paquete::findOrFail($_REQUEST['id_paquete']);
            $listdestinos = $paquete->destinos;
        }
        /*
            foreach( $paquetes as $paquete){
                $destinos_paquete = $paquete->destinos;
                dd($destinos_paquete);
                foreach($destinos_paquete as $destino_paquete){
                    //dd($destino_paquete->pivot->id_paquete);
                    foreach($destinos as $destino){
                    
                        if($destino['id'] != $destino_paquete->pivot->id_destino)
                        {
                            array_push($listdestinos,$destino);
                        }else{
                            array_push($listdestinosd,$destino_paquete);
                        }
                    }
                }
            }*/
        

       
        return view('app.detallepaquete.create',compact('paquetes','listdestinos','linea','destinos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_linea = Session::get('id_linea');
        foreach ($request->destinos as $index => $value) {
            $paquete = Paquete::findOrFail($request->paquete);
            $orden = $request->valores[$index];
            $paquete->destinos()->syncWithoutDetaching([$value => ['orden' => $orden]]);
            //$paquete->destinos()->save($value, ['orden' => 1]);
            //dd($paquete);
           
           /*
            if(!empty($detalle->valor)){
                if(count($sql)==0){
                    $detalle->save();
                    Session::flash('response','Servicios añadidos correctamente.');
                }else{
                    $detalleSer = new DetalleServicioController();
                    $detalleSer->update($detalle->valor, $sql[0]->id);
                }
            }else{
                Session::flash('error','Los campos no pueden quedar vacios.');
            }
               */ 
            
        }
        //dd($ordenes);
        
        
        return redirect()->back();
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
        dd($id);
    }
    public function eliminar($id_destino,$id_paquete)
    {
        $paquete = Paquete::findOrFail($id_paquete);
        $paquete->destinos()->detach($id_destino);
        return redirect()->back();
        //return redirect()->route('detalle_paquete.index');
    }
}
