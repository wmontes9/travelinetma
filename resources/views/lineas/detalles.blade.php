@extends("layouts.app")
@section("content")
<link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
<style>
  body {
    background-image: linear-gradient(to top, #ecedee 0%, #eceeef 75%, #e7e8e9 100%);
    min-height: 100vh;
    padding: 60px 0;
}

.container.gallery-container {
    background-color: #fff;
    color: #35373a;
    min-height: 100vh;
    border-radius: 20px;
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.06);
}

.gallery-container h1 {
    text-align: center;
    margin-top: 70px;
    font-family: 'Droid Sans', sans-serif;
    font-weight: bold;
}

.gallery-container p.page-description {
    text-align: center;
    max-width: 800px;
    margin: 25px auto;
    color: #888;
    font-size: 18px;
}

.tz-gallery {
    padding: 40px;
}

.tz-gallery .lightbox img {
    width: 100%;
    margin-bottom: 30px;
    transition: 0.2s ease-in-out;
    box-shadow: 0 2px 3px rgba(0,0,0,0.2);
}


.tz-gallery .lightbox img:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 15px rgba(0,0,0,0.3);
}

.tz-gallery img {
    border-radius: 4px;
}

.baguetteBox-button {
    background-color: transparent !important;
}


@media(max-width: 768px) {
    body {
        padding: 0;
    }

    .container.gallery-container {
        border-radius: 0;
    }
}
</style>
<section id="banner-lineas">
	<div id="carousel-id" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carousel-id" data-slide-to="0" class="active"></li>
		</ol>
		<div class="carousel-inner">
			<div class="item">
				<img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="{{ asset('storage/banner/lineas')}}/{{ $linea['datos_linea']->image }}">
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

      <div class="col-md-3">

        <div class="card selector-lineas" style="margin: 10px 0">
            <p class="title">
              Filtrar por linea
            </p>
            <select name="id_linea" class="form-control">
              @foreach($lineas as $linea)
                <option value="{{ $linea->id_linea }}"> {{ $linea->nombre }} </option>
              @endforeach
            </select>
        </div>
      </div>

      <div class="col-md-9">
        @foreach($paquetes as $key => $value)
            <div class="card">
            <div class="row">
              <div class="col-md-3">
                <img src="https://www.tomplanmytrip.com/wp-content/uploads/2020/04/Villa-de-Leyva-Mainsquare-2-700x664.jpg"  class="img-responsive img-fluid" alt="">
              </div>
              <div class="col-md-9">
                 <h3><a href=""> {{ $value->nombre }} </a></h3>
                 <p><b>Duración</b> {{ $value->duracion }} </p>
                 <p><b>Duración</b> ${{ $value->valor }} </p>
                 <p class="text-right">
                   <a href="{{ url('/categoria',$tipo->categoria) }}?ids={{ $tipo->id_linea }}&linea={{ $tipo->nombre }}&id_paquete={{ $value->id }}" class="btn btn-outline-success">Detalless</a>
                 </p>
                 
              </div>
            </div>
          </div>
        @endforeach
          
      </div>
    </div>
  </div>
</section>


<style>


</style>
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
                  @foreach($destinos as $key =>  $value)
                        @php
                          $class = ($key==0) ? $class = "active" : $class = "";
                      @endphp
                      <div class="carousel-item {{ $class }}">
                          <h3>  {{ $value->nombre }} </h3>
                          <p style="font-size:1.2em;">  </p>
                          <div class="row" class="imagenes-destinos">
                            <div class="container-fluid gallery-container">
                              <div class="tz-gallery">
                                  <div class="row">
                                    @foreach($value->imagenes as $index => $image)
                                      <div class="col-sm-6 col-md-4">
                                          <a class="lightbox" href="{{ asset('storage/imgDestino') }}/{{ $image->url_imagen }}">
                                              <img src="{{ asset('storage/imgDestino') }}/{{ $image->url_imagen }}" alt="Park">
                                          </a>
                                      </div>
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
            </div>
              
          </div>

          <div class="col-md-4">
              @php
                  $long = count($tarifas);
              @endphp
              <table class="table table-bordered">
                  <thead>
                      <tr>
                        <td colspan="{{ $long }}" style="background-color:darkgreen; font-size:1.3em;" class="text-white">Tarifas por persona</td>
                      </tr>
                     
                  </thead>
                  <tbody>
                   <tr>
                      @foreach($tarifas as $inde => $tarifa)
                          <td style="background-color:#b7c95d;"> {{ $tarifa->edad_min }} - {{ $tarifa->edad_max }} Años / {{ $tarifa->valor }}% </td>
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
                          <h2 class="text-muted">Datos de las personas</h2>
                          <p>Por favor digite la información de las personas que asistiran.</p>
                         <table class="table table-bordered" id="personas">
                             <thead  >
                                 <tr>
                                     <th>Nombres</th>
                                     <th>Apellidos</th>
                                     <th>Tipo documento</th>
                                     <th>Documento</th>
                                     <th>Edad</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <tr>
                                     <td> <input type="text" name="nombres[]" class="form-control"> </td>
                                     <td> <input type="text" name="apellidos[]" class="form-control"> </td>
                                      <td>
                                          <select name="tipo_documento[]" class="form-control">
                                              <option value="1">RC - Registro Civil</option>
                                              <option value="2">TI - Tarjeta de identidad</option>
                                              <option value="3">CC - Cédula de ciudadanía</option>
                                              <option value="4">CE - Cédula de extranjería</option>
                                              <option value="5">PA - Pasaporte</option>
                                              <option value="6">MS - Menor sin identificación</option>
                                              <option value="7">AS - Adulto sin identidad.</option>
                                          </select>
                                      </td>
                                     <td> <input type="text" name="documentos[]" class="form-control"> </td>
                                     <td> <input type="number" name="edad[]" class="form-control"> </td>
                                 </tr>
                             </tbody>
                         </table>
                         <p class="modal-footer">
                             <a href="javascript:void(0);" onclick="nueva_fila()" class="btn btn-outline-primary"> <i class="fa fa-plus"></i> </a>
                         </p>
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



<style>



</style>

<script src="{{ asset('js/jquery.js') }}"></script>
<script>
    function nueva_fila(){
        var fila = ` 
            <tr>
               <td> <input type="text" name="nombres[]" class="form-control"> </td>
               <td> <input type="text" name="apellidos[]" class="form-control"> </td>
                <td>
                    <select name="tipo_documento[]" class="form-control">
                        <option value="1">RC - Registro Civil</option>
                        <option value="2">TI - Tarjeta de identidad</option>
                        <option value="3">CC - Cédula de ciudadanía</option>
                        <option value="4">CE - Cédula de extranjería</option>
                        <option value="5">PA - Pasaporte</option>
                        <option value="6">MS - Menor sin identificación</option>
                        <option value="7">AS - Adulto sin identidad.</option>
                    </select>
                </td>
               <td> <input type="text" name="documentos[]" class="form-control"> </td>
               <td> <input type="number" name="edad[]" class="form-control"> </td>
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