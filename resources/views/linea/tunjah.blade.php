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
            <h2 class="title text-company">Tunja histórica</h2>
        </div>
    </div>
    <div class="row">
        <div id="bs4-multi-slide-carousel" class="carousel slide" data-ride="carousel" >
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <h3>Tunja pre híspanico</h3>
                    <p style="font-size:1.2em;">Visita: Pozo de Hunzahúa,
                        Zona Arqueológica Uiversidad Pedagógica y tecnológica de Colombia,
                        Las Moyas de San Ricardo,
                        Monumento a la Raza Indígena y los
                        Cojines del Zaque</p>
                    <div class="row">
                        <div class="col"><img src="img/tunja/hispanica/hispanica1.jpg" class="img-fluid" alt="1 slide"></div>
                        <div class="col"><img src="img/tunja/hispanica/hispanica2.jpg" class="img-fluid" alt="2 slide"></div>
                        <div class="col"><img src="img/tunja/hispanica/hispanica3.jpg" class="img-fluid" alt="3 slide"></div>
                    </div>
                </div>
                <div class="carousel-item">
                    <h3>Tunja republicano</h3>
                    <p style="font-size:1.2em;">Visita: Plaza de Bolívar de Tunja,
                        Casa Cultural Gustavo Rojas Pinilla,
                        Plaza Real de Tunja,
                        Pasaje de Vargas,
                        Parque Hoyo del Trigo,
                        Bosque de la República,
                        Obelisco de la Libertad</p>
                    <div class="row">
                        <div class="col"><img src="img/tunja/republicana/republicana1.jpg" class="img-fluid" alt="1 slide"></div>
                        <div class="col"><img src="img/tunja/republicana/republicana2.jpg" class="img-fluid" alt="2 slide"></div>
                        <div class="col"><img src="img/tunja/republicana/republicana3.jpg" class="img-fluid" alt="3 slide"></div>
                    </div>
                </div>
                <div class="carousel-item">
                    <h3>Tunja colonial</h3>
                    <p style="font-size:1.2em;">Visita: Museo Casa del Fundador
                        Capitán Gonzalo Suárez Rendón, 
                        Casa del Escribano Juan
                        de Vargas</p>
                    <div class="row">
                        <div class="col"><img src="img/tunja/colonial/colonial1.jpg" class="img-fluid" alt="1 slide"></div>
                        <div class="col"><img src="img/tunja/colonial/colonial2.jpg" class="img-fluid" alt="2 slide"></div>
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
                Conoce la capital del departamento de Boyacá, observa su riqueza
                arquitectónica, deslízate en los esbozos de su transcendental histo-
                ria, mientras interactúa con su cultura impregnada de memorias de
                antaño que evocan un sueño “Pre Hispánico, Colonial y Republicano”
                enmarcado en sus calles, orillas y rincones.
                Este interesante programa está compuesto por la observación de la
                riqueza arqueológica local, la visita al centro histórico y periferia,
                recorriendo sus principales museos y monumentos.
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
                    <td>$150.000</b></td>
                    <td>$100.000</td>
                    <td>$50.000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection