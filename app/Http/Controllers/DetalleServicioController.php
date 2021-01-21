<?php

namespace App\Http\Controllers;

use App\Paquete;
use DB;
use Illuminate\Http\Request;
use App\DetalleServicio;
use Session;

class DetalleServicioController extends Controller
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
        return view('app.detalleservicio.index',compact('paquetes'));
    }

    public function buscar(Request $request )
    {
        $servicios = new ServicioController();
        $servicios = $servicios->get_servicios();

        $paquetes = new PaqueteController();
        $paquetes = $paquetes->get_paquetes();

        $id_paquete = $request->input("id_paquete"); 
        $paquete = Paquete::findOrFail($id_paquete);
        $list_servicios = $paquete->servicios->toarray();
        //dd($paquete);
    
        /*$valor_servicio = DB::table('paquetes')
        ->join('detalle_servicio', 'paquetes.id', '=', 'detalle_servicio.id_paquete')
        ->join('servicios', 'detalle_servicio.id_servicio', '=', 'servicios.id')
        ->where('paquetes.id', '=', $id_paquete)
        ->select('paquetes.*', 'detalle_servicio.valor','servicios.*')
        ->get()->toArray();*/
        //dd($valor_servicio);
        //dd($list_servicios[0]['pivot']['valor']);
        return view('app.detalleservicio.index',compact('paquetes','servicios','paquete','list_servicios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       // $paquete = Paquete::findOrFail($request->paquete);
       // $paquete->servicios()->sync($request->servicios);
       

        foreach ($request->servicios as $index => $value) {
            $detalle = new DetalleServicio();
            $detalle->id_servicio = $value;
            $detalle->id_paquete = $request->paquete;
            $detalle->valor = $request->valores[$index];

            $sql = DetalleServicio::where('id_paquete',$request->paquete)->where('id_servicio','=',$value)->select('*')->get();
            if(count($sql)==0){
                $detalle->save();
            }else{
                $detalleSer = new DetalleServicioController();
                $detalleSer->update($detalle->valor, $sql[0]->id);
            }
            
        }
        Session::flash('response','Servicios añadidos correctamente.');
        return redirect()->back();
        //return redirect()->route('detalle_servicio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd('hola desde rama lineas');
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
    public function update($valor, $id)
    {
        $detalle = DetalleServicio::find($id);
        $detalle->valor = $valor;
        $detalle->save();
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
