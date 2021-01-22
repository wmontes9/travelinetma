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
                     <li class="breadcrumb-item" style="float: left;"><a href="#!">Lineas</a>
                     </li>

                  </ul>
               </div>
            </div>
         </div>
      </div>

      <style>
table {

  overflow-x:auto;
}
table td {
  word-wrap: break-word;
  max-width: 400px;
}
table td {
  white-space:inherit;
}
</style>

      <!-- Page-header end -->
      <!-- Page-body start -->
      <div class="page-body">
         <div class="row">
            <div class="col-sm-12">
               <!-- Zero config.table start -->
               <div class="card">
                  <div class="card-header">
                  <a href="{{ url('admin/linea/create') }}" class="btn btn-outline-primary">AÑADIR</a>
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
                                          <td>Categoria</td>
                                          <td>linea</td>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       @foreach ($lineas as $key => $value)
                                       		<tr>
                                       			<td width="5%"> {{ $key }} </td>
                                       			<td width="10%"> {{ $value->nombre }} </td>
                                       			<td width="65%" style="white-space: inherit ;">
                                                   <ul>
                                                       @foreach($value->lineas as $index => $linea)
                                                            <li> 
                                                               <b> {{ $index }}.  {{ $linea->nombre }}</b> 
                                                                   <div class="dropdown" style="float: right; padding-right: 20px">
                                                                       <i class="fa fa-home dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                         Opciones
                                                                       </i>
                                                                       <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                                         <button class="dropdown-item" type="button">Editar</button>
                                                                         <button class="dropdown-item" type="button">Eliminar</button>
                                                                       </div>
                                                                     </div>

                                                                <br>
                                                               <div class="textos">
                                                                        <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="{{ $linea->vivencia }}" style="cursor: pointer;">
                                                                           @php
                                                                              echo '- '.substr($linea->vivencia, 0,300).'...';
                                                                           @endphp

                                                                         </span>
                                                               </div>
                                                              
                                                              
                                                            </li>
                                                       @endforeach
                                                   </ul>
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