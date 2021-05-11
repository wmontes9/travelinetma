<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/app.client.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/all.js') }}" defer></script>
    <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
    <script src="{{ asset('js/app.client.js') }}" defer></script>

    <script src="{{ asset('js/popper.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
    <script src="{{ asset('js/vue.js') }}" ></script>
    <script src="{{ asset('js/axios.min.js') }}"></script>
    <title>Travel</title>
    <link rel="shortcut icon" href="img/logo.jpg">  
</head>
<style>


</style>    
<body>
    <div class="top">
            <div class="content" style="padding: 0 !important;height: auto;">
                <ul>
                    <li><a href="tel:317 5929764"><i class="fa fa-mobile"></i> +57 311 518 2141</a></li>
                    <li><a href="mail:informacion@travelinetma.com.co"> <i class="fa fa-envelope"></i> informacion@travelinetma.com.co</a></li> 
                     <li><a href="javascript:void(0);"> <i class="fa fa-address-card"></i> Carrera 9 #19-86 Ap # 40</a></li>
                </ul>
            </div>
        </div>
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
                        <img src="{{asset('img/logo-small.png')}}" style="max-width: 100px; margin-top: -6px" alt="traveline" class="">
                    </div> 
                    </li>
                    <li class="nav-item item-menu px-2">
                        <a class="{{request()->routeIs('inicio') ? 'activ' : '' }} nav-link" href="{{url('/')}}">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item item-menu px-2">
                        <a class="{{request()->routeIs('somos') ? 'activ' : '' }} nav-link" href="{{url('/somos')}}">¿Quiénes somos?</a>
                    </li>
                    <li class="nav-item item-menu px-2">
                        <a class="nav-link" href="#catalogo" data-toggle="modal">Catálogo</a>
                    </li>
                   
                   <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Líneas
                        </a>
                        <ul class="dropdown-menu categorias" aria-labelledby="navbarDropdownMenuLink">
                            @include('partials.list_tipos')
                        </ul>
                      </li>


                    <li class="nav-item item-menu px-2">
                        <a class="{{request()->routeIs('establecimientos') ? 'activ' : '' }} nav-link" href="{{url('/establecimiento')}}">Establecimientos</a>
                    </li>
                    <li class="nav-item item-menu px-2">
                        <a class="nav-link" href="{{ url('/contacto') }}">Contactenos</a>
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

        <main>
            @yield('content')
        </main>

        <section id="aliados">
            @include('partials.aliados')
        </section>
    </div>

    <style>
        main.py-4 {
    margin: 38px 0 0 0;
}
    </style>



    <footer class="w-100 bg-dark">
        <div class="row">
            <div class="col-md-3 pt-2 col-sm-3 col-xs-3 text-white ml-3" id="contacto">
                <h3 class="h3">Información comercial</h3>
                Didier Califa Vargas<br>
                Gerente general<br>
                Organización travelinetma<br>
                Operador de transporte y turismo<br><br>
                Dirección: Cra. 9 #19-86 Ap # 40 <br>
                Tunja Boyacá Colombia
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4 pt-2 text-white">
                <br>
                <i class="fas fa-envelope fa-2x mx-3"></i> gerencia@travelinetma.com.co <br><br>
                <i class="fas fa-mobile-alt fa-2x mx-3"></i>311 5182141 - 316 3718835<br><br>
                <i class="fab fa-algolia fa-2x mx-3"></i> 24-7
            </div>
            <div class="col-md-2 col-sm-2 col-xs-2 pt-2">
                <img src="{{asset('img/logo.png')}}" class="img-fluid">
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
            Traveline TMA cumple con todos los protocolos de bioseguridad
            <br>
            Traveline TMA - Todos los derechos reservados.
        </p>
    </footer>
  <script>
    window.onload = ()=>{
         var url = "{{ url("/") }}";
        set_url(url);
        // get_lineas();
    }


    $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
      if (!$(this).next().hasClass('show')) {
        console.log(this);
        $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
      }
      var $subMenu = $(this).next(".dropdown-menu");
      $subMenu.toggleClass('show');


      $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
        $('.dropdown-submenu .show').removeClass("show");
      });


  return false;
});


  </script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
      <script>
        $(document).ready(function(){
          $('.customer-logos').slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3500,
            arrows: false,
            dots: false,
              pauseOnHover: false,
              responsive: [{
              breakpoint: 768,
              settings: {
                slidesToShow: 3
              }
            }, {
              breakpoint: 520,
              settings: {
                slidesToShow: 2
              }
            }]
          });
        });
      </script>

      @include('partials.catalogo')
</body>
</html>
