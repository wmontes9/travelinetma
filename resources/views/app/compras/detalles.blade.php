@extends("layouts.admin")
@section("content")
   <div class="page-wrapper">
      <!-- Page-header start -->
      <div class="page-header">
         <div class="row align-items-end">
            <div class="col-lg-8">
               <div class="page-header-title">
                  <div class="d-inline">
                     <h4>Compras</h4>
                     <span>Detalles de la compra {{ $detalles->id_transaccion }}</span>
                  </div>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="page-header-breadcrumb">
                  <ul class="breadcrumb-title">
                     <li class="breadcrumb-item" style="float: left;">
                        <a href="../index.html"> <i class="feather icon-home"></i> </a>
                     </li>
                     <li class="breadcrumb-item" style="float: left;"><a href="{{ url('/admin') }}">Panel Administrador</a>
                     </li>
                     <li class="breadcrumb-item" style="float: left;">
                        <a href="#!">Compras</a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <!-- Page-header end -->
      <!-- Page-body start -->
      <div class="page-body">
         <div class="row">
            <div class="col-sm-12">
               <!-- Zero config.table start -->
               <div class="card">
                  <div class="card-header">
                  <a href="{{ url('admin/compras') }}" class="btn btn-outline-primary">VOLVER</a>
                  <button onclick="print_content('factura')" class="btn btn-outline-success">Imprimir</button>
                  </div>
                  <div class="card-block">
                     <div class="dt-responsive table-responsive">
                        <div id="simpletable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                           <div class="row">
                              <div class="col-xs-12 col-sm-12">
                                 <div id="factura">
                                    <table class="table-bordered" style="width: 100%" >
                                      <thead>
                                          <tr>
                                              <td colspan="2" width="60%" class="logo"> <img style="max-width: 130px" src="{{ url('img/logo.png') }}" alt=""> </td>
                                              <td>
                                                <p><b>TRAVELINETMA</b><br>
                                                  <b>Dirección</b>: carrera 9# 19-86 Apartado postal #40, Tunja, Boyacá <br>
                                                  <b>Teléfono</b>: 311 5182141 <br>
                                                  <b>Estado</b> : {{ $detalles->estado }} <br>
                                                  <b>Referencia</b> : {{ $detalles->id_transaccion }} <br>
                                                 </p>
                                              </td>
                                          </tr>
                                      </thead>
                                      <tbody class="info">
                                        <tr>
                                          <td colspan="3" class="text-center bg-default"><h6>DATOS DE CONTACTO</h6></td>
                                        </tr>
                                        <tr>
                                          <th> Nombres  </th>
                                          <th> Telefono  </th>
                                          <th> Correo  </th>
                                        </tr>
                                        <tr>
                                          <td> {{ $detalles->cliente->name }}  </td>
                                          <td> {{ $detalles->cliente->telefono }}  </td>
                                          <td> {{ $detalles->cliente->email }}  </td>
                                        </tr>
                                      </tbody>      
                                    </table>

                                    <br>

                                    <table class="detalles table-bordered">
                                      <thead>
                                          <tr>
                                            <td colspan="8" class="text-center bg-default"><h6>DETALLES</h6></td>
                                          </tr>
                                          <tr>
                                            <th width="25%">Nombres</th>
                                            <th width="25%">Apellidos</th>
                                            <th width="25%">Documento</th>
                                            <th width="25%">Edad</th>
                                            <th width="25%">Valor</th>
                                            <th width="25%">Descuento</th>

                                            <th  colspan="2" width="25%">Total</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                       <tbody>
                                          @foreach($detalles->detalles as $index => $value)
                                            <tr>
                                              <td> {{ $value->nombres }} </td>
                                              <td> {{ $value->apellidos }} </td>
                                              <td> {{ $value->documento }} </td>
                                              <td> {{ $value->edad }} </td>
                                              <td> {{ number_format($value->valor) }} </td>
                                              <td> {{ number_format($value->descuento) }} </td>
                                              <td> {{ number_format($value->valor - $value->descuento) }} </td>
                                            </tr>
                                          @endforeach
                                          <tr>
                                            <td colspan="3"></td>
                                            <td><b>Otros descuentos</b>  </td>
                                            <td> {{ $detalles->otros_descuentos }} </td>
                                            <td><b>Total</b>  </td>
                                            <td> ${{ number_format($detalles->valor - $detalles->otros_descuentos) }} </td>
                                            <!--<td style="width: 20px"><button class="btn btn-outline-success btn-block" >Pagar</button></td>-->
                                             
                                          </tr>
                                      </tbody>
                                      </tbody>
                                    </table>

                                  </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Page-body end -->
   </div>
@endsection