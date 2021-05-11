<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>@yield('title') - Traveline.T.M.A </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
     <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords"
        content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" href="https://demo.dashboardpack.com/adminty-html/files/assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->

    <link rel="stylesheet" href="{{asset('css/app.admin.css')}}">
    <script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
    
    <link rel="stylesheet" type="text/css" href="{{asset('icon/themify-icons/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('icon/icofont/css/icofont.css')}}">
</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div> 
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu"></i>
                        </a>
                        <a href="javascript:void(0);">
                            <div class="title d-flex justify-content-center">
                                <p class="m-0 w-auto ttl-middle">TRAVELINE</p>
                                <p class="m-0 w-auto ttl-after">T.M.A</p>
                            </div>
                        </a>
                        <a class="mobile-options">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>

                    <div class="navbar-container">
                        <ul class="nav-left">
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i
                                                class="feather icon-x"></i></span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon search-btn"><i
                                                class="feather icon-search"></i></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="feather icon-maximize full-screen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            
                            
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                       
                                        <span> {{ Auth::user()->name }} </span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu"
                                        data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">

                                        <li>
                                            <a href="{{ url('/app/usuario') }}?page=profile">
                                                <i class="feather icon-user"></i>  Mis datos
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                <i class="feather icon-log-out"></i> Salir
                                            </a>
                                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                  @csrf
                                                </form> 
                                        </li>
                                    </ul>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Sidebar chat start -->
            <div id="sidebar" class="users p-chat-user showChat">
                <div class="had-container">
                    <div class="card card_main p-fixed users-main">
                        <div class="user-box">
                            <div class="chat-inner-header">
                                <div class="back_chatBox">
                                    <div class="right-icon-control">
                                        <input type="text" class="form-control  search-text" placeholder="Search Friend"
                                            id="search-friends">
                                        <div class="form-icon">
                                            <i class="icofont icofont-search"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sidebar inner chat start-->
           
            <!-- Sidebar inner chat end-->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="pcoded-navigatio-lavel">Menu de navegación</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="{{ url('/admin') }}">
                                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                        <span class="pcoded-mtext">Panel</span>
                                    </a>
                                </li>

                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0);">
                                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>

                                        <span class="pcoded-mtext">Administrador</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="active">
                                            <a href="{{url('admin/paquete')}}">
                                                <span class="pcoded-mtext">Paquetes</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="{{url('admin/servicio')}}">
                                                <span class="pcoded-mtext">Servicios</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="{{url('admin/detalle_servicio')}}">
                                                <span class="pcoded-mtext">Detalle servicio</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="{{url('admin/destino')}}">
                                                <span class="pcoded-mtext">Destinos</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="{{url('admin/imagen')}}">
                                                <span class="pcoded-mtext">Imagenes destino</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0);">
                                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>

                                        <span class="pcoded-mtext">Establecimientos</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li>
                                            <a href="{{ url('/admin/establecimiento') }}?page=list">
                                                <i class="fa fa-level-up" aria-hidden="true"></i> <span >Establecimientos</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="{{ url('/admin/tipo_establecimiento') }}?page=categorias">
                                                <span >Categorias</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0);">
                                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>

                                        <span class="pcoded-mtext">Lineas</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li>
                                            <a href="{{ url('/admin/linea') }}?page=list">
                                                <i class="fa fa-level-up" aria-hidden="true"></i> <span >listado lineas</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="{{ url('/admin/linea') }}?page=categorias">
                                                <span >Categorias</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                


                                 <li class="">
                                    <a href="{{ url('/admin/tarifa') }}?page=list">
                                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                        <span class="pcoded-mtext">Tarifas</span>
                                    </a>
                                </li>

                                 <li class="">
                                    <a href="{{ url('/admin/compras') }}">
                                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                        <span class="pcoded-mtext">Compras</span>
                                    </a>
                                </li>
                               


                                
                            
                            </ul>

                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                @yield('content')
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
<script src="{{asset('js/app.admin.js')}}"></script>
<script src="{{ asset('js/controller/app.js') }}"></script>
</html>