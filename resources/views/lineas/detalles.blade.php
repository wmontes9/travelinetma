@extends("layouts.app")
@section("content")

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
                    @foreach($linea['servicios']->destinos as $key =>  $value)
                        @php
                            $class = ($key==0) ? $class = "active" : $class = "";
                        @endphp
                        <div class="carousel-item {{ $class }}">
                            <h3>  {{ $value->nombre }} </h3>
                            <p style="font-size:1.2em;">  </p>
                            <div class="row" class="imagenes-destinos">
                                @foreach($value->imagenes as $index => $image)
                                    <div class="col img-destinos"><img src="{{ asset('storage/imgDestino') }}/{{ $image->url_imagen }}" class="img-thumbnail img-destino" alt="1 slide"></div>
                                @endforeach
                                
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
                <p class="text-justify" style="font-size:1.3em;">
                    {{ $linea['datos_linea']->vivencia }}
                </p>
            </div>
            <div class="col-md-2">
                <ul class="list-group">
                    <li class="list-group-item active">Incluye</li>
                    <ol>
                        <li>Transporte</li>
                        <li>Seguro</li>
                        <li>Guía turístico</li>
                        <li>Entradas a las actividades</li>
                        <li>Almuerzo</li>
                      </ol>
                </ul>
            </div>

            <div class="col-md-4">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                          <th colspan="3" style="background-color:darkgreen; font-size:1.3em;" class="text-white">Tarifas</th>
                        </tr>
                      <tr>
                        <th>Adulto</th>
                        <th>Niño mayor de 5 años</th>
                        <th>Niño menor de 5 años</th>
                      </tr>
                    </thead>
                    <tbody>    
                      <tr class="table-success" style="font-size:1.1em;">
                        <td>$200.000</b></td>
                        <td>$175.000</td>
                        <td>$50.000</td>
                      </tr>
                    </tbody>
                </table>
            </div>

         </div>

    </div>
</section>

@endsection