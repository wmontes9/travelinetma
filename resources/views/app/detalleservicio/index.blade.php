@extends("layouts.admin")
@section("content")
   <div class="page-wrapper">
      <!-- Page-header start -->
      <div class="page-header">
         <div class="row align-items-end">
            <div class="col-lg-8">
               <div class="page-header-title">
                  <div class="d-inline">
                     <h4>Basic Table Sizes</h4>
                     <span>lorem ipsum dolor sit amet, consectetur adipisicing
                     elit</span>
                  </div>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="page-header-breadcrumb">
                  <ul class="breadcrumb-title">
                     <li class="breadcrumb-item" style="float: left;">
                        <a href="../index.html"> <i class="feather icon-home"></i> </a>
                     </li>
                     <li class="breadcrumb-item" style="float: left;"><a href="#!">Bootstrap Table</a>
                     </li>
                     <li class="breadcrumb-item" style="float: left;"><a href="#!">Basic
                        Initialization</a>
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
                 
                  <div class="card-block">
                     <div class="dt-responsive table-responsive">
                        <div id="simpletable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                           <div class="row">
                              <div class="col-xs-12 col-sm-12">
                                 <div class="card-block">
												<form action="{{ route('buscar_servicio') }}" method="GET">
													@csrf
                                          <div class="row">
                                             <p>Seleccione el paquete para ver los servicios asociados</p>
                                             <div class="form-group col-md-3">
										            		<label for="">Paquete</label>
                                                <select name="id_paquete" class="form-control form-control-primary">
                                                   <option value="opt1">--Seleccionar--</option>
                                                   @foreach ($paquetes as $values)
                                                      <option value="{{$values['id']}}" 
                                                      @isset($paquete)
                                                         @if($paquete->id=== $values['id']) 
                                                         selected='selected' @endif
                                                      @endisset>
                                                      {{$values['nombre']}}
                                                      </option>
                                                   @endforeach
                                                </select>
                                                @isset($paquete)
                                                   {{ $paquete->duracion }}
                                                   {{ $paquete->valor }}
                                                @endisset
	                                          </div>
                                             <div class="col-md-12">
                                                <div class="modal-footer">
                                                   <button class="btn btn-outline-primary">Buscar</button>
                                                </div>
                                             </div>
										            </div>
					                     </form>  
				                    	</div>
                              </div>
                           </div>
                           @isset($paquete)
                           <div class="page-header-title">
                              <div class="d-inline">
                                 <h4>Servicios asociados al paquete</h4>
                              </div>
                           </div>
                           <div class="card-header">
                              <a href="{{ url('admin/servicio/create') }}" class="btn btn-outline-primary">AÑADIR</a>
                           </div>
                           <div class="row">
                              <form action="{{ route('detalle_servicio.store') }}" method="POST">
                                 @csrf
                                 
                                 <input type="hidden" name="paquete" value="{{$paquete->id}}">
                                 
                                 <table> 
                                    <thead>
                                       <th>Id</th>
                                       <th>Nombre</th>
                                       <th>Valor</th>
                                    </thead>
                                    <tbody> 
                                       @isset($servicios)
                                       @foreach($servicios as $values) 
                                          <tr>
                                             <td><input type="checkbox" 
                                                name="servicios[]" 
                                                value="{{$values['id']}}" 
                                                @foreach($list_servicios as $servici) 
                                                   @if($servici['id'] === $values['id']) 
                                                   checked = "checked" @endif
                                                @endforeach
                                                >{{$values['id']}}</td> 
                                             <td>{{$values['nombre']}}</td>
                                             <td>
                                                @foreach($list_servicios as $servici)
                                                   @if($servici['id'] === $values['id'])
                                                   <input type="text" name="valores[]" value="{{ $servici['pivot']['valor'] }}"> 
                                                   @endif
                                                @endforeach
                                             </td>
                                          </tr> 
                                          @endforeach
                                          @endisset
                                    </tbody>
                                 </table>
                                 <button class="btn btn-outline-primary">Guardar cambios</button>
                              </form>
                           </div>
                           @endisset
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