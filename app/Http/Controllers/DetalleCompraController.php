<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Tarifa;
use App\Paquete;
use App\Compra;
use App\DetalleCompra;
use App\User;

class DetalleCompraController extends Controller
{
    
    public function __construct(){
        date_default_timezone_set('America/Bogota');
    }

    public function index()
    {

        if(!empty($_REQUEST['id'])){
            $detalles = Compra::with(['detalles','cliente'])->where('id_transaccion',$_REQUEST['id'])->get()->last();
            //dd($detalles);
            return view('compra.carrito',compact('detalles'));
        }
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

            $tarifas = Tarifa::where('id_paquete',$request->id_paquete)->with('paquetes')->get();
            $detalles_servicios = Paquete::where('id',$request->id_paquete)->with(['servicios'])->get();
            Session::put('id_paquete',$request->id_paquete);
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
                     //dd('aca');
                   // dd($tarifa->edad_min);

                    if($edad >= $tarifa->edad_min && $edad<=$tarifa->edad_max ){
                         $total_servicios = 0;
                        //dd('ac');
                        foreach($detalles_servicios as $index => $detalle){
                            foreach($detalle->servicios as $key => $servicio){
                                  $id_paquete = $servicio->id_paquete;
                                 $total_servicios = $total_servicios + $servicio->pivot->valor;
                            }
                        }
                        $salida = $request->salida[$i];
                        if($salida==2){
                            $total_servicios = $total_servicios + 70000;
                        }
                        

                        $porcentaje = $total_servicios * $tarifa->valor;
                        $descuento = $porcentaje / 100;
                        $total = $total_servicios - $descuento;
                    }
                       
                 }
                $total_pagar = $total_pagar + $total;
                $porcentaje_descuento = 0;

                //descuentos grupos
                if($count_array>=10 && $count_array<=25){
                    $porcentaje_descuento = 10;
                }else if($count_array>=26 && $count_array<=40){
                    $porcentaje_descuento = 15;
                }else if($count_array>=41){
                    $porcentaje_descuento = 20;
                }


                $porcentaje_grupos = $total_pagar * $porcentaje_descuento;
                $descuento_grupos = $porcentaje_grupos / 100;


                ///
                $obj = array(
                    'nombres' => $request->nombres[$i],
                    'apellidos' => $request->apellidos[$i],
                    'tipo_documento' => $request->tipo_documento[$i],
                    'documento' => $request->documentos[$i],
                    'edad' => $request->edad[$i],
                    'eps' => $request->eps[$i],
                    'valor' => $total,
                    'total' => $total_pagar,
                    'total_servicios' => $total_servicios,
                    'id_paquete' => $id_paquete,
                    'descuento' => $descuento,
                    'otros_descuentos' => $descuento_grupos
                );


                array_push($carrito, $obj);
            }
      // dd($carrito);
            Session::put('carrito',$carrito);

            //dd($request->all());

            if(count($carrito)>0){
                $user_sql = User::where('email',$request->correo_contacto)->get()->last();
                if(empty($user_sql->id)){
                       $user = new User();
                        $user->name = $request->nombre_contacto;
                        $user->telefono = $request->telefono_contacto;
                        $user->email = $request->correo_contacto;
                        $user->save();
                        $id_cliente = $user->id;
                }else{
                    $id_cliente = $user_sql->id;
                }
                   
                Session::put('id_user',$id_cliente);

                $compra = new Compra();
                $compra->id_cliente = $id_cliente;
                $compra->id_paquete = $request->id_paquete;
                
                $compra->fecha = date('Y-m-d');
                $compra->estado = 'SIN CONFIRMAR';
                $compra->save();


                $valor = 0;
                $descuentos = 0;
                $otros_descuentos = 0;



                foreach ($carrito as $key => $value) {
                     $detalles = new DetalleCompra();
                     $detalles->id_compra = $compra->id;
                     $detalles->nombres = $value['nombres'];
                     $detalles->apellidos = $value['apellidos'];
                      $detalles->eps = $value['eps'];
                     $detalles->tipo_documento = $value['tipo_documento'];
                     $detalles->documento = $value['documento'];
                     $detalles->edad = $value['edad'];
                     $detalles->valor = $value['total_servicios'];
                     $detalles->descuento = $value['descuento'];
                     $detalles->save();
                     $valor = $valor + $value['total_servicios'];
                     $descuentos = $descuentos + $value['descuento'];
                     $otros_descuentos = $otros_descuentos + $value['otros_descuentos'];
                }
            }

                

           // $total = $value['total'];
            $factura = Compra::find($compra->id);
            $factura->valor = $valor;
            $factura->descuento = $descuentos;
            $factura->otros_descuentos = $otros_descuentos;
            $factura->save();


            //dd($factura);

       return redirect('detalle_compra');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($index)
    {
        $carrito = Session::get('carrito');
        unset($carrito[$index]);
        if(count($carrito)==0){
            Session::flush();
        }
        Session::put('carrito',$carrito);
        return redirect()->back();
    }


    public function resultado_pago(Request $data){
        $fecha = date('Y-m-d');
       // return $fecha;
        
        //
        $carrito = Session::get('carrito');
        

       // return $total;

        $sql = Compra::where('id_transaccion', $data->data['id'])->select('*')->count();
        if($sql==0){
            $id_user = Session::get('id_user');
            $last_compra = Compra::where('id_cliente',$id_user)->get()->last();
            //dump($last_compra);


            $compra = Compra::find($last_compra->id);
            $compra->id_transaccion = $data->data['id'];
            $compra->metodo = $data->data['payment_method_type'];
            $compra->id_paquete = Session::get('id_paquete');
            $compra->valor = $data->data['amount_in_cents'] / 100;
            $compra->fecha = $fecha;
            $compra->estado = $data->data['status'];
            $compra->save();

            $id_compra = $compra->id;
            Session::flush('carrito');
            return response()->json(['response'=>'success']);

        }else{
            return response()->json(['error'=>'error']);
        }


        




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
        
        //return request()->all();
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
