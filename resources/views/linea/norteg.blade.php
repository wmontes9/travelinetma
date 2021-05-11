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
            <h2 class="title text-company">Norte y Gutierrez</h2>
            <h4>Dos días, una noche</h4>
        </div>
    </div>
    <div class="row">
        <div id="bs4-multi-slide-carousel" class="carousel slide" data-ride="carousel" >
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col"><img src="img/norte/norte1.jpg" class="img-fluid" alt="1 slide"></div>
                        <div class="col"><img src="img/norte/norte2.jpg" class="img-fluid" alt="1 slide"></div>
                    </div>
                </div>
            </div>
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
                    <li>2 desayunos</li>
                    <li>2 almuerzos</li>
                    <li>1 comida</li>
                    <li>1 noche de hospedaje</li>
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
                    <td>$260.000</b></td>
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
        <div class="col-md-2">
        </div>
        <div class="col-md-4">
            <h3>Día 1</h3>
            <p>
                <b>Tunja:</b> Salida: 5:00 am<br>
                <b>Belen:</b> Desayuno<br>
                <b>La Uvita:</b> Almuerzo, visita aguas termales<br>
                <b>Soata:</b> Cena y Hospedaje<br>
            </p>
        </div>
        <div class="col-md-4">
            <h3>Día 2</h3>
            <p>
                <b>Soata:</b> Desayuno<br>
                <b>Tipacoque:</b> Recorrido hacienda Eduardo Caballero Calderon<br>
                <b>Soata:</b> Almuerzo Bulevar del Chicamocha<br>
                Compras y piscina<br>
                Regreso : 5:00 pm<br>
            </p>
        </div>
    </div>
</div>
@endsection