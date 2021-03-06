@extends("layouts.admin")
@section("content")
   <div class="page-wrapper">
      <!-- Page-header start -->
      <div class="page-header">
         <div class="row align-items-end">
            <div class="col-lg-8">
               <div class="page-header-title">
                  <div class="d-inline">
                     <h4>Lineas</h4>
                     <span>Listado de lineas</span>
                  </div>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="page-header-breadcrumb">
                  <ul class="breadcrumb-title">
                     <li class="breadcrumb-item" style="float: left;">
                        <a href="{{ url('/admin') }}"> <i class="feather icon-home"></i> Panel </a>
                     </li>
                     <li class="breadcrumb-item" style="float: left;"><a href="#!">tarifas</a>
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
                  <a href="{{ url('admin/tarifa/create') }}" class="btn btn-outline-primary">AÑADIR</a>
                  </div>
                  <div class="card-block">
                     <div class="dt-responsive table-responsive">
                        <div id="simpletable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                           <div class="row">
                              <div class="col-xs-12 col-sm-12">

                                 <table id="simpletable" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="simpletable_info">
                                    <thead>
                                       <tr role="row">
                                          <td>N°</td>
                                          <td>Paquete</td>
                                          <td>Edad minima</td>
                                          <td>Edad maxima</td>
                                          <td>Valor</td>
                                          <td>Opciones</td>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       @foreach ($tarifas as $key => $value)
                                       		<tr>
                                       			<td> {{ $key }} </td>
                                       			<td> {{ $value->nombre }} </td>
                                       			<td>{{ $value->edad_min }}</td>
                                                <td>{{ $value->edad_max }}</td>
                                                 <td>{{ $value->valor }}</td>
                                       			<td> 
                                       				
                                       				<a href=""> Eliminar </a>
                                       			 </td>	
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