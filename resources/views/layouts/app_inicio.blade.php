<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'travelinetma') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    {{-- <script src="{{asset('js/controller/AppController.js')}}"></script>--}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    {{-- <script src="{{asset('js/sweet/jquery.sweet-modal.min.js')}}"></script> 
    <link rel="stylesheet" href="{{asset('js/sweet/jquery.sweet-modal.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">--}}
	
	<link href="logoazul.png" rel="icon" type="image/png" />
    <title>travelinetma</title>
  </head>
  <style>
    @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
    * {
        margin:  0;
        padding: 0!important;
    }

    .dropdown-men{
        min-width: auto!important;
    }
    body{font-family: 'Poppins', sans-serif;
        background: #fafafa;
        font-size: 0.9em;
        }
    p {font-family: 'Poppins', sans-serif;
    	font-size: 0.9em;
        font-weight: 300;
        line-height: 1.7em;
        
    }
	.nav-link{
		color: rgba(51,51,50,1);	
	}
    a,
    a:hover,
    a:focus{
        color: inherit;
        text-decoration: none;
        transition: all 0.3s;
    }
    .navbar{
        position: fixed;
        padding: 0px 10px;
        background: rgba(255,255, 255,1);
        border: none;
        border-radius: 0;
        margin-bottom: 40px;
        box-shadow: 1px 1px 3px rgba(0,0,0,0.1);
		top: 0;
		z-index: 99;

    }

    .navbar-btn{
        box-shadow: none;
        outline: none!important;
        border: none;
    }
    .log{
        width:8em;
    }
    .quien{
        background: rgba(65,173, 136, 1);
        color: rgba(255,255,255,1);
        text-align: justify;
        font-size: 1em;
        padding-bottom: 10px;
    }
    #carouselExampleCaptions { width: 100%; max-width: 1300px; max-height: 450px; !important } 
    .line{
        width: 100%;
        height: 1px;
        border-bottom: 1px dashed #ddd;
    }

    .wrapper {
        display: flex;
        width: 100%;
        align-items: stretch;
    }
    #sidebar {
        min-width: 250px;
        max-width: 250px;
        background: rgba(35,130, 118, 0.8);
        color: #fff;
        transition: all 0.3s;
    }
    #sidebar.active{
        margin-left: -250px;
    }

    #sidebar .sidebar-header{
        padding: 20px;
        background: rgba(89, 181, 72, 0.9);
    }
    #sidebar ul.components{
        padding: 20px 0px;
        border-bottom: 1px solid #47748b;
    }

    #sidebar ul p{
        padding: 10px;
        font-size: 1.1em;
        display: block;
    }

    #sidebar ul li a{
        padding: 10px;
        font-size: 1.1em;
        display: block;
    }
    #sidebar ul li a:hover {
        color: #7386D5;
        background: #fff;
    }
    .active{
        color: rgba(89, 181, 72, 0.7)!important;
        background: #fff!important;
    }
    #sidebar ul li.active>a,
    a[aria-expanded="true"] {
        color: #fff;
        background: rgba(89, 181, 72, 0.7);
    }
    a[data-toggle="collapse"] {
        position: relative;
    }
    .dropdown-toggle::after {
        display: block;
        position: absolute;
        top: 50%;
        right: 20px;
        transform: translateY(-50%);
    }

    ul ul a {
        font-size: 0.9em !important;
        padding-left: 30px !important;
        background:rgba(252,115, 35, 0.8);
    }

    ul.CTAs {
        padding: 20px;
    }

    ul.CTAs a {
        text-align: center;
        font-size: 0.9em !important;
        display: block;
        border-radius: 5px;
        margin-bottom: 5px;
    }
    a.download{
        background: #fff;
        color: #7386D5;
    }
    a.article,
    a.article:hover {
        background: #6d7fcc !important;
        color: #fff !important;
    }

    #content {
        width: 100%;
        padding: 20px;
        min-height: 100vh;
        transition: all 0.3s;
    }
    .footer {
        padding: 0px 10px;
        font-family: 'Poppins', sans-serif;
        background-color: rgba(252,115,35,1);
        font-size: 0.9em;
        font-weight: 300;
        line-height: 1.7em;
        color: rgb(255, 255, 255);
    }   
	.container-fluid{
		padding: 0px!important;
	}
    .carousel-control-prev-icon, .carousel-control-next-icon {
        outline: black;
        color: rgba(25, 0, 255, 0.8);
        background-color: rgba(0, 0, 0, 0.8);
        background-size: 100%, 100%;
        border-radius: 50%;
        border: 1px solid black;
    }
    @media(max-width:768px){
        #sidebar{margin-left: -250px;}
        #sidebar.active{
            margin-left: 0px;
        }
        #sidebarCollapse span{
            display: none;
        }
		.footer{
            padding: 0px 10px;
			font-size: 0.6em;
		}
		.navbar{
			width: 100%;
		}
    }
</style>
    <body>
        <div id="app">
            <div class="wrapper">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
                        <div class="log">
                        <img src="{{ url('img/logo-small.jpg') }}" class="img-fluid">
                        </div>	
                        <!--<a class="navbar-brand" href="#">Navbar</a> -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/')}}">Inicio <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('retos')}}">Nosotros</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Servicios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contacto">Contactenos</a>
                            </li> 
                            @guest
                            <li>
                                <a href="{{ url('/register') }}" class="nav-link"> Registrarse</a>
                            </li>
                            <li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</li>
                            <li>
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
                            </li>
                        @else
                            <li class="dropdown pull-right">
                                <a href="#" class="nav-link" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}" class="nav-link"
                                            onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                            Salir
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                            </ul>
                        </div>
                        
                    </nav>
                    <main class="py-4">
                    @yield('content')
                        {{-- <div id="app-login">
                            @include("/auth.login")
                        </div> --}}        
                    <div class="row" id="contacto">
                        <div class="col-md-12">
                            <h2 class="text-center title text-company">Contactenos</h2>
                        </div>
                    </div>
                    <div class="row" >
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-8">
                            <form enctype="multipart/form-data" action="contact" method="POST">
                                {{csrf_field()}}			
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
                    </div>
                    </main>
            
                </div>
            </div>
            
            <footer class="w-100 container-fluid bg-dark">
                <div class="row">
                    <div class="col-md-4 pt-2 text-white">
                        <h3 class="h3 text-center">Contacto</h3>
                        <ul>
                            <li>Direccion: Carrera 10 N° 24-45 Tunja</li>
                            <li>Teléfonos: 311 5182141 - 317 5929764</li>
                            <li>Horario: 24-7</li>
                        </ul>
                    </div>
                    <div class="col-md-4 pt-2">
                        <div class="w-100 h-100 d-flex flex-row justify-content-around align-items-center text-white">
                            <i class="fab fa-facebook fa-2x mx-3 "></i>
                            <i class="fab fa-instagram fa-2x mx-3 "></i>
                            <i class="fab fa-pinterest  fa-2x mx-3 "></i>
                            <i class="fab fa-whatsapp  fa-2x mx-3 "></i>
                        </div>
                    </div>
                    <div class="col-md-4 pt-2">
                        <div class="w-100 h-100 d-flex justify-content-center align-items-center">
                            <img src="img/logo-small.jpg" alt="">
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script>
            $(document).ready(function(){
                $('#sidebarCollapse').on('click',function(){
                    $('#sidebar').toggleClass('active');
                });
            });  
            window.onscroll = function() {scrollFunction()};

            function scrollFunction() {
                if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
                    document.getElementById("navbar").style.position="fixed";
                    var width = window.innerWidth;
                    document.getElementById("navbar").style.width="100%";
                    document.getElementById("navbar").style.margin="0";
                } else {
                    document.getElementById("navbar").style.position="static";
                    document.getElementById("navbar").style.width="100%";
                }
            }
        </script>
    </body>
</html>