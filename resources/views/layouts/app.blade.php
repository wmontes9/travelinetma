<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/all.js') }}" defer></script>
    <script src="{{ asset('js/jquery.js') }}" defer></script>
    <script src="{{ asset('js/popper.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
    <script src="{{ asset('js/vue.js') }}" ></script>
    <script src="{{ asset('js/axios.min.js') }}"></script>

    <title>Travel</title>
    <link rel="shortcut icon" href="img/logo.jpg">
</head>
<style>
        .whatsapp {
            position:fixed;
            width:50px;
            height:50px;
            bottom:30px;
            right:30px;
            background-color:#25d366;
            color:#FFF;
            border-radius:50px;
            text-align:center;
            font-size:30px;
            z-index:100;            
        }
        .whatsapp:hover{
            color:rgba(255, 255, 255, 0.4);
        }

        .whatsapp-icon {
            margin-top:13px;
        }
        .carousel-control-prev-icon,
.carousel-control-next-icon {
  outline: white;
  background-color: #FF2FE3; 
  background-size: 100%, 100%;
  border-radius: 50%;
  border: 1px solid white;
}

.solid-service-box {
	text-align: center;
	background: #fff;
	padding: 20px 10px;
	-webkit-transition: all 0.4s ease-out 0s;
	-o-transition: all 0.4s ease-out 0s;
	transition: all 0.4s ease-out 0s;
}

.solid-service-box h2 {
	font-size: 48px;
	color: #727272;
	margin-bottom: 20px;
	-webkit-transition: all 0.4s;
	-o-transition: all 0.4s;
	transition: all 0.4s;
}

.solid-service-box h3 {
	margin-bottom: 20px;
}

.solid-service-box p {
	font-size: 14px;
	margin-bottom: 20px;
}
.solid-service-box .readmore {
	font-size: 12px;
	font-weight: 700;
	text-transform: uppercase;
	color: #222;
	opacity: 0;
	visibility: hidden;
	position: relative;
	bottom: -20px;
	-webkit-transition: all 0.4s;
	-o-transition: all 0.4s;
	transition: all 0.4s;
}

.solid-service-box:hover {
	background:lightgreen;
}

.solid-service-box:hover h2 {
	color: #222;
}

.solid-service-box:hover .readmore {
	visibility: visible;
	opacity: 1;
	bottom: 0;
}
.link { color:#222; }
.activ{
    color:darkgreen !important;
}
.facebook{
    position:fixed;
    width:50px;
    height:50px;
    bottom:90px;
    right:30px;
    background-color:#0b59c0;
    color:#FFF;
    border-radius:50px;
    text-align:center;
    font-size:30px;
    z-index:100;
}
.facebook:hover{
    color:rgba(255, 255, 255, 0.4);
}
.twitter{
    position:fixed;
    width:50px;
    height:50px;
    bottom:150px;
    right:30px;
    background-color:#0b59c0;
    color:#FFF;
    border-radius:50px;
    text-align:center;
    font-size:30px;
    z-index:100; 
}
.twitter:hover{
    color:rgba(255, 255, 255, 0.4);
}
.instagram{
    position:fixed;
    width:50px;
    height:50px;
    bottom:210px;
    right:30px;
    background-color:#0b59c0;
    color:#FFF;
    border-radius:50px;
    text-align:center;
    font-size:30px;
    z-index:100;
}
.instagram:hover{
    color:rgba(255, 255, 255, 0.4);
}
</style>    
<body>
  <div class="container-fluid"> 
    <a href="https://api.whatsapp.com/send?phone=573115182141&text=Hola%2C%20deseo%20adquirir%20mas%20informacion." class="whatsapp d-flex justify-content-center align-items-center" target="_blank"> 
        <i class="fab fa-whatsapp"></i>
    </a>
    <div class="header-social pull-right">
        <a href="https://www.facebook.com/pg/TravelineTmaLineaViajera/posts/?ref=page_internal" class="facebook d-flex justify-content-center align-items-center" target="blank"><i class="fab fa-facebook"></i>
        <a href="https://twitter.com/search?q=%40ttraveline&s=08" class="twitter d-flex justify-content-center align-items-center" target="blank"><i class="fab fa-twitter"></i></a>
        <a href="https://www.instagram.com/travelinetma/" class="instagram d-flex justify-content-center align-items-center" target="blank"><i class="fab fa-instagram"></i></a>
    </div>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-white justify-content-end position-relative  position-fixed fixed-top" id="nav">
           
            <button class="navbar-toggler mt-1 mr-1 float-left" type="button" data-toggle="collapse" data-target="#menu" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-start" id="menu">
                <ul class="navbar-nav mt-2 mt-lg-0 text-center">
                    <li class="nav-item item-menu px-2">
                    <div>
                        <img src="{{asset('img/logo-small.jpg')}}" alt="traveline" class="">
                    </div> 
                    </li>
                    <li class="nav-item item-menu px-2">
                        <a class="{{request()->routeIs('inicio') ? 'activ' : '' }} nav-link" href="{{url('/')}}">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item item-menu px-2">
                        <a class="{{request()->routeIs('somos') ? 'activ' : '' }} nav-link" href="{{url('/somos')}}">¿Quiénes somos?</a>
                    </li>
                    <li class="nav-item item-menu px-2">
                        <a class="nav-link" href="https://drive.google.com/file/d/1qD8N2zQ_bXXlxCXN-EFKoCxxZkUDokza/view?usp=sharing" target="_blank">Catálogo de servicios</a>
                    </li>
                   
                    <li class="nav-item dropdown">
                        <a class="{{request()->routeIs('superlinea', 'playandina', 'termal', 'tunjahistorica', 'navidad', 'cocuy', 'norteg') ? 'activ' : '' }} nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Líneas de servicio
                        </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="{{request()->routeIs('superlinea') ? 'activ' : '' }} dropdown-item" href="{{url('/superlinea')}}">Super línea</a>
                        <a class="{{request()->routeIs('playandina') ? 'activ' : '' }} dropdown-item" href="{{url('/playandina')}}">Playa andina</a>
                        <a class="{{request()->routeIs('termal') ? 'activ' : '' }} dropdown-item" href="{{url('/termal')}}">Paseo termal</a> 
                        <a class="{{request()->routeIs('tunjahistorica') ? 'activ' : '' }} dropdown-item" href="{{url('/tunjahistorica')}}">Tunja histórica</a>
                        <a class="{{request()->routeIs('navidad') ? 'activ' : '' }} dropdown-item" href="{{url('/navidad')}}">Línea navideña</a>
                        <a class="{{request()->routeIs('cocuy') ? 'activ' : '' }} dropdown-item" href="{{url('/cocuy')}}">El Cocuy</a>
                        <a class="{{request()->routeIs('norteg') ? 'activ' : '' }} dropdown-item" href="{{url('/norteg')}}">Norte y Gutierrez</a>
                    </div>
                    </li>
                    <li class="nav-item item-menu px-2">
                        <a class="{{request()->routeIs('establecimientos') ? 'activ' : '' }} nav-link" href="{{url('/establecimientos')}}">Hoteles</a>
                    </li>
                    <li class="nav-item item-menu px-2">
                        <a class="nav-link" href="#contacto">Contactenos</a>
                    </li>
                   {{--  <li class="nav-item item-menu px-2">
                        <a class="nav-link" href="LineaServicio.html">Lineas de Servicios</a>
                    </li> --}}
                </ul>  
                <div class="justify-content-lg-end w-lg-100 ml-auto" id="content-title">
                <div class="title d-flex justify-content-center">
                    <p class="m-0 w-auto ttl-middle">TRAVELINE</p>
                    <p class="m-0 w-auto ttl-after">T.M.A</p>
                </div>
                RNT: 20872
            </div>
            </div>
          
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <div class="container">
        {{-- <div class="row" id="contacto">
            <div class="col-md-12">
                <h2 class="text-center title text-company">Contactenos</h2>
            </div>
        </div>
        <div class="row d-flex justify-content-center">                
            <div class="col-md-8">
                <form enctype="multipart/form-data" action="contact" method="POST">
                    @csrf		
                    <div>
                        <label for="name">Nombre y apellido  <span class="required">*</span></label>
                        <div class="inputs form-group">
                            <input class="aweform form-control" type="text" id="name" name="name" placeholder="Ingrese su nombre" value="{{ old('name')}}"/>
                            {!! $errors -> first('name','<small>:message</small>')!!}
                        </div>  
                    </div>
                    
                    <div>
                        <label for="email">Correo electrónico<span class="required">*</span></label>
                        <div class="inputs form-group">
                            <input class="aweform form-control" type="text" id="email" name="email" placeholder="E-mail..." value="{{ old('email')}}"/>
                            {!! $errors -> first('email','<small>:message</small>')!!}
                        </div>  
                    </div>
                    
                    <div>
                        <label for="phone">Teléfono <span class="required">*</span></label>
                        <div class="inputs form-group">
                            <input class="aweform small form-control" type="text" id="phone" name="phone" placeholder="Teléfono" value="{{ old('phone')}}"/>
                            {!! $errors -> first('phone','<small>:message</small>')!!}
                        </div>  
                    </div>
                    <div>
                        <label for="message">Mensaje <span class="required">*</span></label>
                        <div class="inputs form-group">
                            <textarea class="aweform form-control" id="message" name="message" rows="6" cols="5" placeholder="Ingrese su mensaje, solicitud o consulta" value="{{ old('message')}}"></textarea>
                            {!! $errors -> first('message','<small>:message</small>')!!}
                        </div>  
                    </div>		
                    <div class="form-group text-center">
                        <button class="btn btn-success"><i class="fa fa-chevron-circle-right"></i> Enviar</button>   
                    </div>
                </form>
            </div>
        </div>     --}}
    </div>
{{-- <div class="row">
<iframe class="col-md-12" src="https://drive.google.com/file/d/1qD8N2zQ_bXXlxCXN-EFKoCxxZkUDokza/preview" style="height:600px;"></iframe>
</div> --}}
<div class="container">
    <div class="row shadow px-4 pb-4">
        <div class="col-md-12"><h3>Somos poseedores de las marcas: </h3></div>
        <div class="col-md-6 col-sm-6 text-center">
            <img src="img/boyacav.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-md-6 col-sm-6 text-center">
            <img src="img/Soy Boyaca.png" alt="" class="img-fluid">
        </div>
    </div>
</div>
<hr/>
    <footer class="w-100 bg-dark">
        <div class="row">
            <div class="col-md-3 pt-2 col-sm-3 col-xs-3 text-white ml-3" id="contacto">
                <h3 class="h3">Información comercial</h3>
                Didier Califa Vargas<br>
                Gerente general<br>
                Organización travelinetma<br>
                Operador de transporte y turismo<br><br>
                Dirección: Cra. 10 #29-90 Tunja, Boyacá
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 pt-2 text-white">
                <br>
                <i class="fas fa-envelope fa-2x mx-3"></i> travelinetma67@gmail.com <br><br>
                <i class="fas fa-mobile-alt fa-2x mx-3"></i>311 5182141 - 317 5929764<br><br>
                <i class="fab fa-algolia fa-2x mx-3"></i> 24-7
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2 pt-2">
                <img src="img/logo.png" class="img-fluid">
            </div>
        </div>
        <p class="text-center w-100 text-white">
            <br>
            Traveline TMA (Línea Viajera) está en contra de la explotación y el abuso sexual de menores de edad en el país.
            <br>
            Ley 679-01 Art. 17.
            <br>
            En Traveline TMA. Protegemos el medio ambiente
            <br>
            TravelLinetma - Todos los derechos reservados.
            <hr>
        </p>
    </footer>
  </div>
</body>
</html>
