@extends('layouts.app')

@section('content')
    <section id="content-linea" style="padding-top: 7em;">
        <div></div>
        <div class="container">
            <h1 class="title text-company py-2 text-center">{{$datos_linea['nombre']}}</h1>
            <h4 class="title text-company-2">Vivencia</h4>
            <p class="px-5 pb-5 text-justify">
               {{$datos_linea['vivencia']}}               
            </p>
            @if (count($servicios["destinos"]) > 0)                            
                <h4 class="title text-company w-100 text-right border-top border-warning">Destinos</h4>
                @foreach ($servicios["destinos"] as $destino)
                    <div class="row">
                        <div class="col-md-12 mb-1">
                            <div class="mx-1 shadow pb-2">
                                <h5 class="h5 text-center py-2 w-100">{{$destino['nombre']}}</h5>
                                {{-- <ul class="list-group list-group-flush actividades">
                                    <li class="list-group-item ">
                                        Visita al municipio para ver las esculturas (monumento a la piedra del castigo y a la cebolla).
                                    </li>
                                </ul> --}}                            
                                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" style="width:90%; margin:auto;">
                                        
                                        <div class="carousel-inner" role="listbox">
                                            @foreach ($destino['imagenes'] as $key => $imagen)
                                                <div class="carousel-item {{$key == 0 ? 'active':''}}"  data-duration="500">
                                                    <div class="w-100 d-flex justify-content-center align-items-center">
                                                        <img src="{{asset('/storage/destinos/'.$imagen['url_imagen'])}}" alt="{{ $destino['nombre'] }}" class="img-fluid">
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>                                        
                                    </div>
                            </div>
                        </div>
                        {{-- <div class="col-md-6 mt-md-5">
                            <div class="mx-1 shadow pb-2">
                                <h5 class="h5 text-center py-2 w-100">Ráquira</h5>
                                <ul class="list-group list-group-flush actividades">
                                    <li class="list-group-item ">De compras por Ráquira.</li>
                                    <li class="list-group-item ">Taller de barro.</li>
                                </ul>
                            </div>
                        </div> --}}
                    </div>
                @endforeach
            @endif
            @if (count($servicios["servicios"]) > 0)                            
                <div class="pb-2 mt-3">
                    <h4 class="h4 title text-center py-2 w-100 text-company border-top border-warning">Servicios</h4>
                    <ul class="list-group">
                        @foreach ($servicios["servicios"] as $servicio)
                            <li class="list-group-item d-flex justify-content-around align-items-center">
                                <i class="fas fa-angle-double-right text-company"></i>
                                <p class="w-50 p-0 m-0">{{$servicio['nombre']}}</p>
                                <i class="fas fa-angle-double-left text-company"></i>
                            </li>
                        @endforeach                                            
                    </ul>
                </div>
            @endif
        </div>
    </section>
@endsection