@extends("layouts.app")
@section("content")
<link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">

<section id="banner-lineas">
	<div id="carousel-id" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carousel-id" data-slide-to="0" class="active"></li>
		</ol>
		<div class="carousel-inner">
			<div class="item">
        <style>
            .carousel-inner .img{
              background-image: url("{{ asset('storage/banner/lineas')}}/{{ $linea['datos_linea']->image }}");
              background-size: cover;
              padding: 165px;
              background-position: center;
            }
            #paquetes{
              background-image: url("{{ url('img/fondos/mapa.png')}}");
              background-size: contain;
              background-position: center;
            }
            #paquetes .card-body {
    padding: 5px;
    background: #efefef;
}
        </style>
        <div class="img"></div>
				<img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" class="banner-lineas" alt="First slide" src="{{ asset('storage/banner/lineas')}}/{{ $linea['datos_linea']->image }}">
				<div class="container">
					<div class="carousel-caption">
						<h1>{{ $linea['datos_linea']->nombre }}</h1>
						<p></p>
						<p> <!--action--> </p>
					</div>
				</div>
			</div>

		</div>
		<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
		<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
	</div>
</section>

@php
  $id_paquete = null;
  if(!empty($_REQUEST['id_paquete'])){
      $id_paquete = $_REQUEST['id_paquete'];
  }
@endphp

@if($id_paquete==null)
<section id="paquetes">
  <div class="container">
    <div class="row">

      <div class="col-md-12">
        <div class="row">
          <div class="col-md-12">
              <h4 class="section-title text-center">
                <b>PAQUETES</b>
              </h4>
              <div class="divider"></div>
          </div>
          <div class="col-xs-12 col-sm-3 col-md-6">
            @foreach($paquetes as $key => $value)
                  <div class="card text-center" >
                        <div class="figure" style="background-image: url('{{ asset('storage/banner/lineas')}}/{{ $linea['datos_linea']->image }}')">
                            
                        </div>
                        
                        <div class="card-body">
                          <h3><a href=""> {{ $value->nombre }} </a></h3>
                           <p>
                            <b>Duración</b>: {{ $value->duracion }} <br>
                            <b>Valor</b>: ${{ number_format($value->valor) }} 

                           </p>
                           <p class="text-center btn-details-paquete">
                             <a href="{{ url('/categoria',$tipo->categoria) }}?ids={{ $tipo->id_linea }}&linea={{ $tipo->nombre }}&id_paquete={{ $value->id }}" class="btn btn-success"> <i class="fa fa-info"></i> Detalles</a>
                           </p>
                        </div>
                           
                 </div>
              @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


@else

      <!-------------------------------------->
<section id="destinos">
  <div class="row">
      <div class="col-md-12 text-center">
          <p style="font-size:1.7em; color:midnightblue;">!Lo llevamos a donde sus sueños quieren llegar¡</p>
      </div>
  </div>
   <div class="row ">
      <div class="col-md-12 text-center">
          <h3 class="title text-company">{{ $linea['datos_linea']->nombre }}</h3>
          <span class="divider"></span>
      </div>
  </div>

  <div class="row">
       <div class="container-fluid">

           <div id="bs4-multi-slide-carousel" class="carousel slide" data-ride="carousel" >
              <div class="carousel-inner">
                    @foreach($detalles_paquete as $key =>  $detalle)
                          @php
                            $class = ($key==0) ? $class = "active" : $class = "";
                        @endphp
                        <div class="carousel-item {{ $class }}">
                            <h3>  {{ $detalle->destino->nombre }} </h3>
                            <p style="font-size:1.2em;">  </p>
                            <div class="row" class="imagenes-destinos">
                              <div class="container-fluid gallery-container">
                                <div class="tz-gallery">
                                    <div class="row">
                                      @foreach($detalle->destino->imagenes as $index => $image)
                                        @if($image->tipo!='navidad')
                                          <div class="col-sm-6 col-md-3">
                                              <a class="lightbox" href="{{ asset('storage/imgDestino') }}/{{ $image->url_imagen }}">
                                                  <img src="{{ asset('storage/imgDestino') }}/{{ $image->url_imagen }}" alt="Park" style="width: 100%">

                                              </a>
                                          </div>
                                        @else
                                          @if($_REQUEST['id']==12)
                                          <div class="col-sm-6 col-md-3">
                                              <a class="lightbox" href="{{ asset('storage/imgDestino') }}/{{ $image->url_imagen }}">
                                                  <img src="{{ asset('storage/imgDestino') }}/{{ $image->url_imagen }}" alt="Park" style="width: 100%">

                                              </a>
                                          </div>
                                          @endif
                                        @endif
                                      @endforeach
                                    </div>
                              
                                </div>
                              
                              </div>
                               
                                
                            </div>
                        </div>
                    @endforeach

       
              </div>
                  <a class="carousel-control-prev" href="#bs4-multi-slide-carousel" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next text-faded" href="#bs4-multi-slide-carousel" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                  </a>
           </div>
      </div>
  </div>
     
</section>

<section id="informacion">
  <div class="container-fluid">

      <div class="row">

           <label class="text-company " style="font-size:2em;" >Vivencia</label>
       </div>

       <div class="row">
           <div class="col-md-6">
              <p class="text-justify" style="font-size:1.1em;">
                  {!! $linea['datos_linea']->vivencia !!}
              </p>
          </div>
          <div class="col-md-2" style="padding: 0">
            <div class="caracteristicas_paquete">
              <ul class="list-group" style="list-style: none;">
                  <li class="list-group-item active">Paquete</li>
                    @foreach($detalles_servicios as $key => $value)
                      <li>&nbsp; &nbsp; <b>Paquete: </b>{{ $value->nombre }} </li>
                      <li>&nbsp; &nbsp; <b>Duración</b>: {{ $value->duracion }} </li>
                        
                    @endforeach
              </ul>
               <ul class="list-group">
                  <li class="list-group-item active">Incluye</li>
                  <ol>
                      @foreach($detalles_servicios as $key => $value)
                        @foreach($value->servicios as $key => $servicio)
                              <li>{{ $servicio->nombre }}</li>
                        @endforeach
                          
                      @endforeach
                  </ol>
              </ul>
              <ul class="list-group">
                  <li class="list-group-item active">Opcional</li>
                  <ol>
                      Transporte Bogota - Tunja $70.000
                  </ol>
              </ul>
            </div>
              
          </div>

          <div class="col-md-4">
              @php
                  $long = count($tarifas);
              @endphp
              <table class="table table-bordered">
                  <thead>
                      <tr>
                        <td colspan="{{ $long }}" style="background-color:darkgreen; font-size:1.3em;" class="text-white">Tarifas por persona saliendo desde Tunja</td>
                      </tr>
                     
                  </thead>
                  <tbody>
                   <tr>
                      @foreach($tarifas as $inde => $tarifa)
                          <td style="background-color:#b7c95d;">
                            @if($tarifa->edad_min>=18)
                              Adultos
                            @elseif($tarifa->edad_min>=5 && $tarifa->edad_max<18)
                              Niños mayores de 5 años
                            @elseif($tarifa->edad_min>=0 && $tarifa->edad_max<=5)
                              Niños menores de 5 años
                            @endif
                            

                         </td>
                      @endforeach 
                  </tr>
                   <tr>
                      @php
                          $id_paquete = '';
                      @endphp
                      @foreach($tarifas as $key => $tarifa)
                          <td style="background-color:#b7c95d;">
                             @php
                                  $total_servicios = 0;
                             @endphp
                              @foreach($detalles_servicios as $index => $value)
                                  @foreach($value->servicios as $key => $servicio)
                                        @php
                                            $id_paquete = $servicio->id_paquete;
                                            
                                            $total_servicios = $total_servicios + $servicio->pivot->valor;
                                        @endphp
                                  @endforeach                                  
                              @endforeach

                              @php
                                  $porcentaje = $total_servicios * $tarifa->valor;
                                  $descuento = $porcentaje / 100;
                                  $total = $total_servicios - $descuento;
                                   echo '$'.number_format($total);
                               @endphp
                          </td>
                      @endforeach 
                  </tr>
                  <tr>
                      <td colspan="{{ $long }}">
                          <p class="text-right">
                              <a href="#modal-carrito-list" class="btn btn-outline-success" data-toggle="modal" ><i class="fa fa-cart-plus"></i> Contratar</a>
                          </p>
                      </td>
                  </tr>
                  </tbody>
              </table>
          </div>

       </div>

  </div>
</section>


<section class="carrito-list">
  <form action="{{ route('detalle_compra.store') }}" id="form-compra" method="post">
      @csrf
      <input type="hidden" name="id_paquete" value="{{ $_REQUEST['id_paquete'] }}">
       <div class="modal fade" id="modal-carrito-list">
             <div class="modal-dialog modal-lg modal-dialog-centered">
                 <div class="modal-content">
                     <div class="modal-body">

                        <div class="row">

                          <div class="col-md-12">
                            <h4 class="text-muted">Datos de contacto</h4>
                             <p>Por favor digite su información de contacto.</p>
                          </div>
                          <div class="col-md-4 form-group">
                            <b>Nombres</b>
                            <input type="text" name="nombre_contacto" class="form-control" required>
                          </div>
                           <div class="col-md-4 form-group">
                            <b>Correo</b>
                            <input type="text" name="correo_contacto" class="form-control" required>
                          </div>
                          <div class="col-md-4 form-group">
                            <b>Telefono</b>
                            <input type="text" name="telefono_contacto" class="form-control" required>
                          </div>

                          <div class="col-md-12">
                            <h2 class="text-muted">Datos de las personas</h2>
                            <p>Por favor digite la información de las personas que asistiran.</p>
                           <div class="table-responsive">
                             <table class="table table-bordered" id="personas">
                               <thead  >
                                   <tr>
                                       <th>Nombres</th>
                                       <th>Apellidos</th>
                                       <th>Tipo documento</th>
                                       <th>Documento</th>
                                       <th>Edad</th>
                                       <th>Eps</th>
                                       <th>Salidad desde:</th>
                                   </tr>
                               </thead>
                               <tbody>
                                  @php
                                    $count_carrito = 0;
                                  @endphp
                                  @if(Session::has('carrito'))
                                    @php
                                        $count_carrito = Session::get('carrito');
                                    @endphp

                                    @foreach(Session::get('carrito') as $index => $value)
                                        <tr>
                                           <td> <input type="text" value="{{ $value['nombres'] }}" name="nombres[]" class="form-control" required> </td>
                                           <td> <input type="text" value="{{ $value['apellidos'] }}" name="apellidos[]" class="form-control" required> </td>
                                            <td>
                                                <select name="tipo_documento[]" class="form-control" required>
                                                    <option value="RC">RC - Registro Civil</option>
                                                    <option value="TI">TI - Tarjeta de identidad</option>
                                                    <option value="CC">CC - Cédula de ciudadanía</option>
                                                    <option value="CE">CE - Cédula de extranjería</option>
                                                    <option value="PA">PA - Pasaporte</option>
                                                    <option value="MS">MS - Menor sin identificación</option>
                                                    <option value="AS">AS - Adulto sin identidad.</option>
                                                </select>
                                            </td>
                                           <td> <input type="text" name="documentos[]" class="form-control" required> </td>
                                           <td> <input type="number" name="edad[]" class="form-control" required> </td>
                                           <td> <input type="text" name="eps[]" class="form-control" required> </td>
                                           <td>
                                              <select name="salida[]" class="form-control" required>
                                                    <option value="1">Tunja</option>
                                                    <option value="2">Bogota</option>
                                              </select>
                                           </td>
                                          
                                       </tr>
                                     @endforeach
                                  @endif
                                   
                                   @if($count_carrito==0)
                                       <tr>
                                           <td> <input type="text" name="nombres[]" class="form-control" required> </td>
                                           <td> <input type="text" name="apellidos[]" class="form-control" required> </td>
                                            <td>
                                                <select name="tipo_documento[]" class="form-control" required>
                                                     <option value="RC">RC - Registro Civil</option>
                                                    <option value="TI">TI - Tarjeta de identidad</option>
                                                    <option value="CC">CC - Cédula de ciudadanía</option>
                                                    <option value="CE">CE - Cédula de extranjería</option>
                                                    <option value="PA">PA - Pasaporte</option>
                                                    <option value="MS">MS - Menor sin identificación</option>
                                                    <option value="AS">AS - Adulto sin identidad.</option>
                                                </select>
                                            </td>
                                           <td> <input type="text" name="documentos[]" class="form-control" required> </td>
                                           <td> <input type="number" name="edad[]" class="form-control" required> </td>
                                           <td> <input type="text" name="eps[]" class="form-control" required> </td>
                                           <td>
                                              <select name="salida[]" class="form-control" required>
                                                    <option value="1">Tunja</option>
                                                    <option value="2">Bogota</option>
                                              </select>
                                           </td>
                                          
                                       </tr>
                                     @endif
                               </tbody>
                              <!-- <tfoot>
                                 <tr>
                                   <td>
                                      <b>Dia de asistencia</b>
                                      <input type="date" name="dia" id="dia" class="form-control" onchange="verficiar_dia_asistencia()">
                                   </td>
                                 </tr>
                               </tfoot>-->
                           </table>
                           </div>
                           <p class="modal-footer">
                               <a href="javascript:void(0);" onclick="nueva_fila()" class="btn btn-outline-primary"> <i class="fa fa-plus"></i> </a>
                           </p>
                          </div>

                        </div>
                        
                            
                     </div>
                     <div class="modal-footer">
                         <button type="button" class="btn btn-outline-warning" data-dismiss="modal">Close</button>
                         <button type="submit" class="btn btn-outline-success">Finalizar y pagar</button>
                     </div>
                 </div>
             </div>
         </div>
  </form>
         
</section>

@endif


<script src="{{ asset('js/jquery.js') }}"></script>
<script>

    function verficiar_dia_asistencia(){
      var elDate = document.getElementById('dia');
      var day = new Date(elDate.value ).getUTCDay();
      console.log(day);
      elDate.setCustomValidity(''); // limpiarlo para evitar pisar el fecha inválida
      if( day == 0 ){
         elDate.setCustomValidity('Domingos no disponibles, por favor seleccione otro día');
      } else {
         elDate.setCustomValidity('');
      }
    }


    function nueva_fila(){
        var fila = ` 
            <tr>
               <td> <input type="text" name="nombres[]" class="form-control" required> </td>
               <td> <input type="text" name="apellidos[]" class="form-control" required> </td>
                <td>
                    <select name="tipo_documento[]" class="form-control" required>
                         <option value="RC">RC - Registro Civil</option>
                          <option value="TI">TI - Tarjeta de identidad</option>
                          <option value="CC">CC - Cédula de ciudadanía</option>
                          <option value="CE">CE - Cédula de extranjería</option>
                          <option value="PA">PA - Pasaporte</option>
                          <option value="MS">MS - Menor sin identificación</option>
                          <option value="AS">AS - Adulto sin identidad.</option>
                    </select>
                </td>
               <td> <input type="text" name="documentos[]" class="form-control" required> </td>
               <td> <input type="number" name="edad[]" class="form-control" required> </td>
               <td> <input type="text" name="eps[]" class="form-control" required> </td>
             <td>
                 <select name="salida[]" class="form-control" required>
                        <option value="1">Tunja</option>
                        <option value="2">Bogota</option>
                  </select>
             </td>  
           </tr>
         `;

         $('#personas tbody').append(fila);
    }
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
@endsection