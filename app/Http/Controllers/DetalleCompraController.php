<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class DetalleCompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('compra.carrito');
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
        $tarifas = new TarifaController();
        $detalles_servicios = new DetalleServicioController();
        $tarifas = $tarifas->show($request->id_paquete);
        $detalles_servicios = $detalles_servicios->show($request->id_paquete);
        //dd($request->all());


        $count_array = count($request->nombres);
        $carrito = array();

        $total_pagar = 0;
        for ($i=0; $i < $count_array; $i++) {
            ///
            $edad = $request->edad[$i];
            //dd($edad);
            $valor = 0;
            $total = 0;

             foreach($tarifas as $key => $tarifa){
                //dd($tarifa->edad_max);

                if($edad >= $tarifa->edad_min && $edad<=$tarifa->edad_max ){
                     $total_servicios = 0;
                    //dd('ac');
                    foreach($detalles_servicios as $index => $servicio){

                        $id_paquete = $servicio->id_paquete;
                        $total_servicios = $total_servicios + $servicio->valor;

                    }


                    $porcentaje = $total_servicios * $tarifa->valor;
                    $descuento = $porcentaje / 100;
                    $total = $total_servicios - $descuento;
                }
                   
             }
            $total_pagar = $total_pagar + $total;
            ///
            $obj = array(
                'nombres' => $request->nombres[$i],
                'apellidos' => $request->apellidos[$i],
                'tipo_documento' => $request->tipo_documento[$i],
                'documento' => $request->documentos[$i],
                'edad' => $request->edad[$i],
                'valor' => $total,
                'total' => $total_pagar
            );

            array_push($carrito, $obj);
        }
       //dd($carrito);
        Session::put('carrito',$carrito);
        return redirect('detalle_compra');
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
