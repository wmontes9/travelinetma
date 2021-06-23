@extends("layouts.admin")
@section("content")
   <div class="page-wrapper">
      <!-- Page-header start -->
      <div class="page-header">
         <div class="row align-items-end">
            <div class="col-lg-8">
               <div class="page-header-title">
                  <div class="d-inline">
                     <h4>Destinos</h4>
                     <span>Destinos de las líneas</span>
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
                        <a href="#!">Destino</a>
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
                  <div class="row">
                     <div class="col-md-12">
                        <form action="" method="GET">
                           <ul class="filtros">
                              <li>
                                  <a href="{{ url('admin/destino/create') }}" class="btn btn-outline-primary">AÑADIR</a>
                              </li>
                              
                                 @php
                                    $id_linea = '';
                                    if(!empty($_REQUEST['id_linea'])){
                                       $id_linea = $_REQUEST['id_linea'];
                                    }
                                 @endphp
                           </ul>
                        </form>
                           
                     </div>
                  </div>
                  <div class="card-header">
                 <style>
                    table { 
  width: 100%; 
  border-collapse: collapse; 
}
                 </style>
                  
                  </div>
                  
                  <div class="card-block">
                     <div class="dt-responsive">
                        <div id="simpletable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                           <div class="row">
                              <div class="col-xs-12 col-sm-12">
                                 <table id="simpletable" class="display table-bordered" style="width: 100%;">
                                    <thead>
                                       <tr role="row">
                                          <th>Id</th>
                                          <th  style="width: 234px;">Nombre</th>
                                          <th  style="width: 234px;">Descripción</th>
                                          <th  style="width: 52px;">Editar</th>
                                          <th  style="width: 52px;">Eliminar</th>

                                       </tr>
                                    </thead>
                                    <tbody>
                                       @php
                                             $longitud = count($destinos);
                                       @endphp
                                       @foreach ($destinos as $destino)
                                        
                                         
                                          <tr role="row" class="odd">
                                             <td class="sorting_1">{{$destino['id']}}</td>
                                            
                                             <td>{{$destino['nombre']}}</td>
                                             <td><p>{{$destino['descripcion']}}</p></td>
                                             <td>
                                                <a href="{{ route('destino.edit', $destino)}}" class="btn btn-outline-primary"><span class="icofont icofont-ui-edit">Editar</span></a>
                                             </td>
                                             <td>
                                                
                                                <form action="{{ route('destino.destroy', $destino)}}" method="post">
                                                   @csrf
                                                   @method('delete')
                                                   <button type="submit" class="btn btn-danger">Eliminar</button>
                                                </form>
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
   <script>
      $(document).on('change','form select',function(e){
         if(e.target.value!=''){
             $(`.form_${e.target.attributes.class.value}`).submit();
         }
       
      })
   </script>
@endsection