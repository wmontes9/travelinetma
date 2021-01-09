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
            <h2 class="title text-company">Paseo termal</h2>
        </div>
    </div>
    <div class="row">
        <div id="bs4-multi-slide-carousel" class="carousel slide" data-ride="carousel" >
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col"><img src="img/paipa/paipa2.jpg" class="img-fluid" alt="2 slide"><p style="font-size:1.3em;">Aguas termales</p></div>
                        <div class="col"><img src="img/paipa/paipa4.jpg" class="img-fluid" alt="2 slide"><p style="font-size:1.3em;">Jarillones lago Sochagota</p></div>
                        <div class="col"><img src="img/pantano/pantano1.jpg" class="img-fluid" alt="1 slide"><p style="font-size:1.3em;">Pantano de Vargas<p></div>
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
                Disfruta de los privilegios que la naturaleza nos ofrece en medio de la riqueza histórica y la belleza ambiental, en los Jarillones del Lago Sochagota observa un hermoso paisaje con un único pensamiento: evocar las memorias de independencia que entregaron la libertad a nuestro hermoso país. Este atractivo recorrido, integra un entorno de paz y tranquilidad, permitiendo disfrutar de medicinales aguas termales luego de visitar lugares emblemáticos.
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
                    <td>$175.000</b></td>
                    <td>$125.000</td>
                    <td>$50.000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection