@extends("layouts.app")
@section("content")
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
            <h2 class="title text-company">Parque nacional natural "El Cocuy"</h2>
            <h4>Tres días, dos noches</h4>
        </div>
    </div>
    <div class="row">
        <div id="bs4-multi-slide-carousel" class="carousel slide" data-ride="carousel" >
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col"><img src="img/cocuy/cocuy1.jpg" class="img-fluid" alt="1 slide"></div>
                        <div class="col"><img src="img/cocuy/cocuy2.jpg" class="img-fluid" alt="2 slide"></div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col"><img src="img/cocuy/cocuy3.jpg" class="img-fluid" alt="1 slide"></div>
                        <div class="col"><img src="img/cocuy/cocuy4.jpg" class="img-fluid" alt="2 slide"></div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col"><img src="img/cocuy/cocuy5.jpg" class="img-fluid" alt="1 slide"></div>
                        <div class="col"><img src="img/cocuy/cocuy6.jpg" class="img-fluid" alt="2 slide"></div>
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
        <label class="text-company" style="font-size:2em;">Vivencia</label>
    </div>
    <div class="row">
        <div class="col-md-6">
            <p class="text-justify" style="font-size:1.3em;">
                Inicia este espectacular viaje apreciando la belleza y diversidad de la naturaleza del norte de Boyacá
                Maravillate con el recorrido por el majestuoso nevado del Cocuy, visitando los más emblemáticos puntos atractivo de la región. 
                Picos nevados de Ritacubas, Pan de Azúcar, El Castillo y El Pulpito del Diablo. Lagunas como Los Verdes, 
                Grande de la Sierra, La Isla, La Plaza y el Avellanal, su fauna, resguardos indigenas U'wa.  
            </p>
        </div>
        <div class="col-md-2">
            <ul class="list-group">
                <li class="list-group-item active">Incluye</li>
                <ol>
                    <li>Transporte</li>
                    <li>Seguro de viaje</li>
                    <li>Guía turístico</li>
                    <li>Entradas a las actividades</li>
                    <li>3 desayunos</li>
                    <li>3 almuerzos</li>
                    <li>3 comidas</li>
                    <li>2 noches de hospedaje</li>
                  </ol>
            </ul>
        </div>
        <div class="col-md-4">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th colspan="2" style="background-color:darkgreen; font-size:1.3em;" class="text-white">Tarifas</th>
                    </tr>
                    </thead>
                <thead>
                    <tr>
                    <th>Adulto</th>
                    <th>Niño menor de 5 años</th>
                    </tr>
                </thead>
                <tbody>    
                    <tr class="table-success" style="font-size:1.1em;">
                    <td>$460.000</b></td>
                    <td>$50.000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <hr>
    <div class="row">
        <h3>Destinos</h3>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-4">
            <h3>Día 1</h3>
            <p>
                <b>Tunja:</b> Salida: 5:00 am<br>
                <b>Soata:</b> Desayuno en el Bulevar del Chicamocha<br>
                <b>San Mateo:</b> Almuerzo, visita taller de la miel<br>
                <b>El cocuy:</b> Hospedaje y comida hotel casa Muñoz<br>
            </p>
        </div>
        <div class="col-md-4">
            <h3>Día 2</h3>
            <p>
                <b>El Cocuy:</b> desayuno<br>
                Visita taller demostrativo de la lana<br>
                Museo de la sal<br>
                Charla en eco-parques<br>
                Hospedaje y comida hotel casa Muñoz<br>
            </p>
        </div>
        <div class="col-md-4">
            <h3>Día 3</h3>
            <p>
                <b>El Cocuy:</b> 3:30 am Desayuno<br>
                <b>Nevado del Cocuy:</b> Salida: 4:00 am<br>
                <b>Lagunillas:</b> 6:00 am<br>
                <b>Ascenso al nevado:</b> 6:30 am<br>
                <b>Regreso Lagunillas:</b> 3:00pm<br>
                <b>Regreso a Tunja:</b> 6:00 am<br>
                <b>Soata:</b> Cena<br>
            </p>
        </div>
    </div>
</div>
@endsection