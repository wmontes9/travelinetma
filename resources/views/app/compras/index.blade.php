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
                     <span>Lista de compras</span>
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
                  <a href="{{ url('admin/paquete/create') }}" class="btn btn-outline-primary">AÑADIR</a>
                  </div>
                  <div class="card-block">
                     <div class="dt-responsive">
                        <div id="simpletable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                           <div class="row">
                              <div class="col-xs-12 col-sm-12">
                                 <table id="simpletable" class="table display table-bordered" role="grid"  style="width: 100%">
                                    <thead>
                                       <tr role="row">
                                         <th>N°</th>
                                         <th>Id transacción</th>
                                         <th>Metodo de pago</th>
                                         <th>Nombres</th>
                                         <th>Telefono</th>
                                         <th> Correo </th>
                                         <th>Paquete</th>
                                         <th>Valor</th>
                                         <th>Fecha</th>
                                         <th>Estado</th>
                                         <th>Opciones</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       @foreach($compras as $key =>  $compra)
                                          <tr>
                                             <td> {{ $key }} </td>
                                             <td> {{ $compra->id_transaccion }} </td>
                                             <td> {{ $compra->metodo }} </td>
                                             <th> {{ $compra->cliente->name }} </th>
                                             <td> {{ $compra->cliente->telefono }} </td>
                                             <td> {{ $compra->cliente->email }} </td>
                                             <td> {{ $compra->paquetes->nombre }} </td>
                                             <td> {{ $compra->valor }} </td>
                                             <td> {{ $compra->fecha }} </td>
                                             <td> {{ $compra->estado }} </td>
                                             <td> <a href="{{ url('admin/compras',$compra->id) }}" class="btn btn-primary">Detalles</a> </td>
                                          </tr>
                                       @endforeach
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
      <!-- Page-body end -->
   </div>
@endsection