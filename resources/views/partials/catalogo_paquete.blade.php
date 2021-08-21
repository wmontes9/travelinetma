<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Glory:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Annie+Use+Your+Telescope&family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans:wght@200&family=Caveat:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@500&family=IBM+Plex+Mono:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>
<body>
    <div class="contenedor">
       
        <section class="inicio-catalogo">
            <header class="header-catalogo"></header>
            <main class="logo-catalogo">
                <img src="{{asset('img/logo.png')}}" alt="" class="logo-principal">
            </main>
            <aside class="info-catalogo">
                <h2>OPERADOR DE TRANSPORTE Y TURISMO</h2>
                <small>Registro Nacional de Turismo No 20872</small>
            </aside>
            <div class="boyaca" >
                <div class="witget-1">
                    <img src="{{asset('img/boyaca_vivirla.png')}}" alt="" class="boyaca-img">
                </div>
                <div class="witget-2">
                    <img src="{{asset('img/Soy Boyaca.png')}}" alt="" class="soy-boyaca-img">
                </div>
            </div>
            <div class="witget-3"><p class="dialogo" style="font-family: 'Shadows Into Light', cursive !important;" >¡Lo llevamos a <br> donde sus sueños quieren llegar!</p></div>
            <div class="witget-4"></div>
            <footer class="footer-inicio">
                <img src="{{asset('img/footer-info.png')}}" alt="" class="footer-img">
            </footer>
        </section>
        
        @foreach($lineas as $key => $value)
        <section class="info-paquetes">
            <div class="logo-info">
                <img src="{{asset('img/logo.png')}}" alt="" style="width: 100%">
            </div>
            <div class="lineas-info"><h2 class="texto">Linea <h1 class="texto-linea"> {{$value->linea->tipos->last()->nombre}} </h1></h2>
                
            </div>
            <div class="boyaca-vivirla">
                <img src="{{asset('img/boyaca_vivirla.png')}}" alt="" class="vivirla-img">
            </div>
            <div class="lateral"></div>
            <div class="nombre1">
                <h2 class="texto2-nombre1"> {{$value->linea->nombre}} </h2>
            </div>
            <div class="nombre2"><h1 class="texto2"><br> {{$value->linea->nombre}}</h1></div>
            <div class="vivencia">
                <h1 style="color: green">Vivencia</h1>
                <p class="texto-vivencia"> {{$value->linea->vivencia}} </p>
    
            </div>
            <div class="destinos" >
                <ul>
                    <h2 style="background: #69b853">Destinos</h2>
                    @foreach($value->destinos as $destino)
                        <li> {{$destino->nombre}} </li>
                    @endforeach
                </ul>
            </div>
            <div class="img1">
                @if(!empty($value->destinos[0]->imagenes[0]))
                    <img src="{{asset('storage/imgDestino')}}/{{$value->destinos[0]->imagenes[0]->url_imagen}}" alt="" class="img-destino">
                @endif
            </div>
            <div class="img2">
                
                @if(!empty($value->destinos[1]->imagenes[0]))
                    <img src="{{asset('storage/imgDestino')}}/{{$value->destinos[1]->imagenes[0]->url_imagen}}" alt="" class="img-destino">
                @endif
            </div>
            <div class="img3">
                @if(!empty($value->destinos[2]->imagenes[0]))
                    <img src="{{asset('storage/imgDestino')}}/{{$value->destinos[2]->imagenes[0]->url_imagen}}" alt="" class="img-destino">
                @endif
            </div>
            <div class="incluye">
                <ul>
                    <h2 style="background: #69b853">Incluye</h2>
                    @foreach($value->servicios as $servicio)
                        <li> {{$servicio->nombre}} </li>
                    @endforeach
                </ul>
            </div>
            <div class="tarifas">
                <table class="table">
                    <thead  >
                      <tr class="tabla-info">
                        <th scope="col" colspan="3">Tarifas</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">Adultos</th>
                        <td>Niños Mayores de 5 Años</td>
                        <td>Niños Menores de 5 Años</td>
                      </tr>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
            <div class="info-general">
                <img src="{{asset('img/footer-general.png')}}" alt="" class="footer-general">
            </div>
            
        </section>

        @endforeach
        
    </div>
    
</body>
</html>