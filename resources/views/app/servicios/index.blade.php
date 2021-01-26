@extends("layouts.admin")
@section("content")
   <div class="page-wrapper">
      <!-- Page-header start -->
      <div class="page-header">
         <div class="row align-items-end">
            <div class="col-lg-8">
               <div class="page-header-title">
                  <div class="d-inline">
                     <h4>Servicios</h4>
                     <span>Lista de servicios</span>
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
                        <a href="#!">Servicios</a>
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
                  <a href="{{ url('admin/servicio/create') }}" class="btn btn-outline-primary">AÑADIR</a>
                  </div>
                  <div class="card-block">
                     <div class="dt-responsive table-responsive">
                        <div id="simpletable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                           <div class="row">
                              <div class="col-xs-12 col-sm-12">
                                 <table id="simpletable" class="table table-striped table-bordered nowrap dataTable" role="grid" aria-describedby="simpletable_info">
                                    <thead>
                                       <tr role="row">
                                          <th class="sorting_asc" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 155px;">Id</th>
                                          <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 234px;">Nombre</th>
                                          <th class="sorting" tabindex="0" aria-controls="simpletable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 52px;">Acción</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       @foreach ($servicios as $values)
                                          <tr role="row" class="odd">
                                             <td class="sorting_1">{{$values['id']}}</td>
                                             <td>{{$values['nombre']}}</td>
                                             <td>
                                                <a href="{{ route('servicio.edit', $values)}}"><span class="icofont icofont-ui-edit">Editar</span></a>
                                                <a href="a"><span class="icofont icofont-ui-delete">Eliminar</span></a>
                                             </td>
                                          </tr>
                                       @endforeach 
                                    </tbody>
                                    <tfoot>
                                       <tr>
                                          <th rowspan="1" colspan="1">Id</th>
                                          <th rowspan="1" colspan="1">Nombre</th>
                                          <th rowspan="1" colspan="1">Acción</th>
                                       </tr>
                                    </tfoot>
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