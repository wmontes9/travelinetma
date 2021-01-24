@extends("layouts.app")
@section("content")

<section id="banner-lineas">
	<div id="carousel-id" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carousel-id" data-slide-to="0" class="active"></li>
		</ol>
		<div class="carousel-inner">
			<div class="item">
				<img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="{{ url('/img/banner/lineas/banner1.jpg') }}">
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


<div class="container-fluid">
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-md-12 text-center">
            <p style="font-size:1.7em; color:midnightblue;">!Lo llevamos a donde sus sueños quieren llegar¡</p>
        </div>
    </div>
    <div class="row ">
        <div class="col-md-12 text-center">
            <h3 class="title text-company">Super línea</h3>
        </div>
    </div>
    <div class="row shadow px-4 pb-4">
        <div id="bs4-multi-slide-carousel" class="carousel slide" data-ride="carousel" >
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <h3>Sáchica</h3>
                    <p style="font-size:1.2em;">Procesiones en vivo, visita a una de las iglesias republicanas del sector, museo paleontólogico, piedras rupestres y fósiles.</p>
                    <p style="font-size:1.2em;"><b>Gastronomía:</b> Degusta de gallina con formula ancestral en su preparación para el deleite de su paladar.</p>
                    <div class="row">
                        <div class="col"><img src="img/sachica/sachica1.jpg" class="img-fluid" alt="1 slide"></div>
                        <div class="col"><img src="img/sachica/sachica2.JPG" class="img-fluid" alt="2 slide"></div>
                        <div class="col"><img src="img/sachica/sachica3.JPG" class="img-fluid" alt="3 slide"></div>
                    </div>
                </div>
                <div class="carousel-item">
                    <h3>Desierto de la candelaria</h3>
                    <p style="font-size:1.2em;">Visita al primer monasterio de los Agustinos Recoletos, tres museos, cueva del ermitaño, taller del barro, visita demostrativa e ilustrativa con interacción con los diferentes oficios del tratamiento del barro utilizado para la elaboración de productos como pocillos, platos candelabros, e.t.c.</p>
                    <div class="row">
                        <div class="col"><img src="img/candelaria/candelaria1.JPG" class="img-fluid" alt="1 slide"></div>
                        <div class="col"><img src="img/candelaria/candelaria2.JPG" class="img-fluid" alt="2 slide"></div>
                        <div class="col"><img src="img/candelaria/candelaria3.JPG" class="img-fluid" alt="3 slide"></div>
                    </div>
                </div>
                <div class="carousel-item">
                    <h3>Ráquira</h3>
                    <p style="font-size:1.2em;">Capital artesal del departamento de Boyacá donde se puede apreciar la diversidad de recipientes elaborados en barro, el controno de la plaza principal, la iglesia y el comercio en general</p>
                    <div class="row">
                        <div class="col"><img src="img/raquira/raquira1.jpg" class="img-fluid" alt="1 slide"></div>
                        <div class="col"><img src="img/raquira/raquira2.JPG" class="img-fluid" alt="2 slide"></div>
                        <div class="col"><img src="img/raquira/raquira3.jpg" class="img-fluid" alt="3 slide"></div>
                    </div>
                </div>
                <div class="carousel-item">
                    <h3>Tinjacá</h3>
                    <p style="font-size:1.2em;">Este municipio es conocido por tener el mejor clima del mundo por su buena ubicación astrológica según astrónomos en un avistamiento.</p>
                    <p style="font-size:1.2em;"><b>Taller de la tagua:</b> uno de los talleres representativos del departamento con reconocimientos nacionales e internacionales. Por tradición ancestral han pasado ya tres generaciones</p>
                    <p style="font-size:1.2em;">Aqui se puede observar el ajedrez más pequeño del mundo</p>
                    <div class="row">
                        <div class="col"><img src="img/tinjaca/tinjaca1.JPG" class="img-fluid" alt="1 slide"></div>
                        <div class="col"><img src="img/tinjaca/tinjaca2.jpg" class="img-fluid" alt="2 slide"></div>
                        <div class="col"><img src="img/tinjaca/tinjaca3.JPG" class="img-fluid" alt="3 slide"></div>
                    </div>
                </div>
                <div class="carousel-item">
                    <h3>Sutamarchán</h3>
                    <p style="font-size:1.2em;">Capital gastronómica del departamento se puede disfrutar de una gran variedad de sopas como: la sopa de los siete granos, el cuchuco de maíz y el tradicional mondongo todo elaborado con formulas ancestrales.</p>
                    <p style="font-size:1.2em;">Degusta de ricas picadas compuestas de: papa criolla, costillitas, arepa Boyacense, yuca, platano, rellena y longaniza.</p> 
                    <p style="font-size:1.2em;">Tierra natal de don Jediondo y capital de la longaniza.</p>
                    <div class="row">
                        <div class="col"><img src="img/sutamarchan/sutamarchan1.jpg" class="img-fluid" alt="1 slide"></div>
                        <div class="col"><img src="img/sutamarchan/sutamarchan2.jpg" class="img-fluid" alt="2 slide"></div>
                        <div class="col"><img src="img/sutamarchan/sutamarchan3.jpg" class="img-fluid" alt="3 slide"></div>
                    </div>
                </div>
                <div class="carousel-item">
                    <h3>Villa de Leyva</h3>
                    <p style="font-size:1.2em;">Recorrido por la ciudad, visita al museo del chocolate, centros comerciales, exposición de esmeraldas certificadas, fotografía en el entorno de la plaza principal.</p>
                    <div class="row">
                        <div class="col"><img src="img/villa de leyva/villa1.jpg" class="img-fluid" alt="1 slide"></div>
                        <div class="col"><img src="img/villa de leyva/villa2.jpg" class="img-fluid" alt="2 slide"></div>
                        <div class="col"><img src="img/villa de leyva/villa3.jpg" class="img-fluid" alt="3 slide"></div>
                    </div>
                </div>
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
                  </thead>
                <thead>
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
@endsection