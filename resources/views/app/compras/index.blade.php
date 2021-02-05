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
                     <div class="dt-responsive table-responsive">
                        <div id="simpletable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                           <div class="row">
                              <div class="col-xs-12 col-sm-12">
                                 <table id="simpletable" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="simpletable_info">
                                    <thead>
                                       <tr role="row">
                                         <th>N°</th>
                                         <th>Id transacción</th>
                                         <th>Metodo de pago</th>
                                         <th>Telefono</th>
                                         <th> Correo </th>
                                         <th>Paquete</th>
                                         <th>Valor</th>
                                         <th>Fecha</th>
                                         <th>Estado</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       @foreach($compras as $key =>  $compra)
                                          <tr>
                                             <td> {{ $key }} </td>
                                             <td> {{ $compra->id_transaccion }} </td>
                                             <td> {{ $compra->metodo }} </td>
                                             <td> {{ $compra->telefono }} </td>
                                             <td> {{ $compra->correo }} </td>
                                             <td> {{ $compra->paquetes->nombre }} </td>
                                              <td> {{ $compra->valor }} </td>
                                               <td> {{ $compra->fecha }} </td>
                                                <td> {{ $compra->estado }} </td>
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