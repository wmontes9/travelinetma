@extends("layouts.admin")
@section("content")
    @php
        $id_paquete = '';
        if(!empty($_REQUEST['id_paquete'])){
            $id_paquete = $_REQUEST['id_paquete'];
        }
    @endphp
   <div class="page-wrapper">
      <!-- Page-header start -->
      <div class="page-header">
         <div class="row align-items-end">
            <div class="col-lg-8">
                @if (!$id_paquete)
                    <div class="page-header-title">
                        <div class="d-inline">
                            <h4>Destinos del paquete seleccionado</h4>
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
                        <a href="#!">Destinos paquete</a>
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
                                 
                                 <select name="id_paquete" required>
                                    <option>--Seleccionar paquete--</option>
                                    
                                    @foreach($paquetes as $paquete)
                                       @if($id_paquete == $paquete->id)
                                          <option value="{{ $paquete->id }}" selected="selected"> {{ $paquete->nombre }} </option>
                                       @else
                                           <option value="{{ $paquete->id}}" > {{ $paquete->nombre }} </option>
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
                    @foreach($paquetes as $paquete)
                        @if($id_paquete == $paquete->id)
                            <h5>Destinos del paquete {{ $paquete->nombre }} de la {{ $linea->nombre }} </h5>
                        @endif
                    @endforeach
                  </div>
                  
                  <div class="card-block">
                      <!-------------------------->
                    @foreach($paquetes as $paquete)
                    @if($id_paquete == $paquete->id)
                        <form action="{{ route('detalle_paquete.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="paquete" value="{{$paquete->id}}">
                            <table> 
                            <thead>
                                <th>Id</th>
                                <th>Orden</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                            </thead>
                            <tbody id="destinos"> 
                                @isset($destinos)
                                    @foreach($destinos as $values) 
                                       <tr>
                                       <td><input type="checkbox" data_id="{{ $values['id'] }}" data_token="{{ csrf_token() }}" onchange="setValor(this)"
                                            name="destinos[]" 
                                            value="{{$values['id']}}" 
                                            @foreach($listdestinos as $destino) 
                                                @if($destino['id'] === $values['id']) 
                                                checked = "checked" @endif
                                            @endforeach
                                            >{{$values['id']}}</td> 
                                       <td id="id_destino-{{ $values['id'] }}">
                                          @foreach($listdestinos as $destino) 
                                                @if($destino['id'] === $values['id']) 
                                                <input style="width: 50px" type="number" name="valores[]" value="{{ $destino->pivot->orden }}" > 
                                                @endif
                                            @endforeach
                                          
                                       </td>
                                       <td>{{$values['nombre']}}</td>
                                       <td>{{ $values['descripcion'] }}</td>
                                       
                                       </tr> 
                                    @endforeach
                                @endisset
                            </tbody>
                            </table>
                             <button class="btn btn-outline-primary">Guardar cambios</button>
                        </form> 
                    @endif
                    @endforeach
                      <!--------------------------->
               </div>
            </div>
         </div>
      </div>
      <!-- Page-body end -->
   </div>
   <script>
      /*$(document).on('change','form select',function(e){
         if(e.target.value!=''){
             $(`.form_${e.target.attributes.class.value}`).submit();
         }
       
      })*/
      function setValor(e){
         var id_destino = e.attributes.data_id.value;
         var id_paquete = $('input:hidden[name=paquete]').val();
         var token = e.attributes.data_token.value;
         var check = $(`input[data_id=${id_destino}]`).prop('checked');
         
         if(id_destino!='' && check==true){
            var input = `<input type="number" style="width: 50px" name="valores[]">`;
            $(`#id_destino-${id_destino}`).html(input);
         }else{
               $.ajax(
               {
                     url: "/admin/eliminardestinos/"+id_destino+"/"+id_paquete,
                     type: 'GET',
                     dataType: "JSON",
                     data: {
                        "_method": 'GET',
                        "_token": token,
                     },
                     success: function ()
                     {
                        console.log("it Work");
                     }
               });

         }
      }
   </script>
@endsection