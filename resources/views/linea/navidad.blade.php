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
            <h2 class="title text-company">Línea navideña</h2>
        </div>
    </div>
    <div class="row">
        <div id="bs4-multi-slide-carousel" class="carousel slide" data-ride="carousel" >
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col"><img src="img/navidad/slide1.jpg" class="img-fluid" alt="1 slide"></div>
                        <div class="col"><img src="img/navidad/slider2.jpg" class="img-fluid" alt="2 slide"></div>
                        <div class="col"><img src="img/navidad/slider3.jpg" class="img-fluid" alt="3 slide"></div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col"><img src="img/navidad/slider4.jpg" class="img-fluid" alt="1 slide"></div>
                        <div class="col"><img src="img/navidad/slider5.jpg" class="img-fluid" alt="2 slide"></div>
                        <div class="col"><img src="img/navidad/slider6.jpg" class="img-fluid" alt="3 slide"></div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col"><img src="img/navidad/slider7.jpg" class="img-fluid" alt="1 slide"></div>
                        <div class="col"><img src="img/navidad/slider8.jpg" class="img-fluid" alt="2 slide"></div>
                        <div class="col"><img src="img/navidad/slider9.jpg" class="img-fluid" alt="3 slide"></div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col"><img src="img/navidad/slider10.jpg" class="img-fluid" alt="1 slide"></div>
                        <div class="col"><img src="img/navidad/slider11.jpg" class="img-fluid" alt="2 slide"></div>
                        <div class="col"><img src="img/navidad/slider12.jpg" class="img-fluid" alt="3 slide"></div>
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
                Aprecia el ingenio boyacense y su creatividad, observando los 
                pesebres navideños de cada Municipio en nuestro Tour Navideño. 
                Deslúmbrate con su iluminación, hoy reconocida como el plan navideño por
                excelencia. Distingue la hermosa arquitectura de nuestros municipios
                y degusta la diversidad gastronómica que nos caracteriza.
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
                        <td>$200.000</b></td>
                        <td>$175.000</td>
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
    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-4">
            <p>
                <b>Paipa:</b> plaza principal<br>
                <b>Pantano de Vargas:</b> Monumento<br>
                <b>Tibasosa:</b> plaza principal<br>
                <b>Sogamoso:</b> parque el laguito<br>
                <b>Corrales:</b> visita al pueblo<br>
            </p>
        </div>
        <div class="col-md-2">
        </div>
        <div class="col-md-4">
            <p>
                <b>Nazareth:</b> pesebre<br>
                <b>Chameza:</b> parque principal<br>
                <b>Nobsa:</b> parque principal, pesebre,
                iglesia<br>
                <b>Punta Larga:</b> figuras artesanales
                representativas
            </p>
        </div>
    </div>

</div>
@endsection