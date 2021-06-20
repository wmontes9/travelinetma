@extends("layouts.admin")
@section("content")
    @php
        $id_linea = '';
        if(!empty($_REQUEST['id_linea'])){
            $id_linea = $_REQUEST['id_linea'];
        }
    @endphp
   <div class="page-wrapper">
      <!-- Page-header start -->
      <div class="page-header">
         <div class="row align-items-end">
            <div class="col-lg-8">
                @if (!$id_linea)
                    <div class="page-header-title">
                        <div class="d-inline">
                            <h4>Destinos de la línea seleccionada</h4>
                        </div>
                    </div>
                @endif
               
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
                        <a href="#!">Destinos línea</a>
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
                            
                             @if($id_linea)
                              <li>
                                  <a href="{{ url('admin/detalle_paquete/create') }}" class="btn btn-outline-primary">Añadir destinos</a>
                              </li>
                             @endif
                              <li>
                                 
                                 <select name="id_linea" required>
                                    <option>--Seleccionar línea--</option>
                                    
                                    @foreach($lineas as $linea)
                                       @if($id_linea == $linea->id)
                                          <option value="{{ $linea->id }}" selected="selected"> {{ $linea->nombre }} </option>
                                       @else
                                           <option value="{{ $linea->id}}" > {{ $linea->nombre }} </option>
                                       @endif
                                    @endforeach
                                 </select>
                              </li>
                              <li>
                                 <button type="submit" class="btn btn-outline-primary">Filtrar</button>
                              </li>
                           </ul>
                        </form>
                           
                     </div>
                  </div>
                  <div class="card-header">
                    @foreach($lineas as $linea)
                        @if($id_linea == $linea->id)
                            <h5>Paquetes y destinos de {{ $linea->nombre }} </h5>
                        @endif
                    @endforeach
                  </div>
                  
                  <div class="card-block">
                     <div class="dt-responsiv">
                        <div id="simpletable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                           <div class="row">
                              <div class="col-xs-12 col-sm-12">
                                 <table id="simpletable" class="table display" style="width: 100%;" >
                                    <thead>
                                       <tr role="row">
                                          <th>Id</th>
                                          <th style="width: 234px;">Paquete</th>
                                          <th style="width: 468px;">Destinos</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $listpaquetes as $paquetes)
                                            @foreach ($listdestinos as $destinos)
                                                <tr>
                                                    <td>{{$paquetes->id}}</td>
                                                    <td>{{$paquetes->nombre}}</td>
                                                    <td>
                                                        <ul>
                                                            @foreach ($destinos as $destino)
                                                                @if($destino->id) 
                                                                    <li> 
                                                                        <h6>{{$destino->nombre}}</h6>
                                                                        {{$destino->descripcion}}
                                                                        <form action="{{ url('admin/eliminardestinos',['id_destino' => $destino->id, 'id_paquete' => $destino->pivot->id_paquete])}}" method="get">
                                                                            @csrf
                                                                            <button type="submit" class="btn btn-danger">Eliminar</button> 
                                                                        </form>
                                                                        <hr>
                                                                    </li>  
                                                                @endif  
                                                            @endforeach 
                                                        </ul>
                                                    </td>
                                                </tr>            
                                            @endforeach
                                           
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