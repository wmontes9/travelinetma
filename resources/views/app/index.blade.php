@extends("layouts.admin")

@section('content')
	 <div class="row">
        <!-- task, page, download counter  start -->
        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-footer bg-c-yellow">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <p class="text-white m-b-0">LINEAS REGISTRADAS</p>
                        </div>
                        <div class="col-3 text-right">
                            <i class="feather icon-trending-up text-white f-16"></i>
                        </div>
                    </div>

                </div>

                <div class="card-block">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h4 class="text-c-yellow f-w-600"> 
                                @php
                                    echo count($lineas);
                                @endphp
                             </h4>
                            <h6 class="text-muted m-b-0"></h6>
                        </div>
                        <div class="col-4 text-right">
                            <i class="feather icon-bar-chart f-28"></i>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            @php
                $count_paquetes = 0;
            @endphp
            @foreach($lineas as $linea)
                @foreach($linea->paquetes as $paquete)
                    @php
                        $count_paquetes = $count_paquetes + 1;
                    @endphp
                @endforeach
            @endforeach
            <div class="card">
                 <div class="card-footer bg-c-green">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <p class="text-white m-b-0">PAQUETES REGISTRADOS</p>
                        </div>
                        <div class="col-3 text-right">
                            <i class="feather icon-trending-up text-white f-16"></i>
                        </div>
                    </div>
                </div>
                <div class="card-block">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h4 class="text-c-green f-w-600">
                                @php
                                    echo $count_paquetes;
                                @endphp
                            </h4>
                            <h6 class="text-muted m-b-0">Page Views</h6>
                        </div>
                        <div class="col-4 text-right">
                            <i class="feather icon-file-text f-28"></i>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-footer bg-c-blue">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <p class="text-white m-b-0">DESTINOS REGISTRADOS</p>
                        </div>
                        <div class="col-3 text-right">
                            <i class="feather icon-trending-up text-white f-16"></i>
                        </div>
                    </div>
                </div>

                <div class="card-block">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h4 class="text-c-blue f-w-600">
                                @php
                                    echo count($destinos);
                                @endphp
                            </h4>
                            <h6 class="text-muted m-b-0">Downloads</h6>
                        </div>
                        <div class="col-4 text-right">
                            <i class="feather icon-download f-28"></i>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

         <div class="col-xl-3 col-md-6">
            <div class="card">
                <div class="card-footer bg-c-pink">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <p class="text-white m-b-0">ESTABLECIMIENTOS </p>
                        </div>
                        <div class="col-3 text-right">
                            <i class="feather icon-trending-up text-white f-16"></i>
                        </div>
                    </div>
                </div>
                <div class="card-block">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h4 class="text-c-pink f-w-600">
                                @php
                                   echo count($establecimientos);
                               @endphp
                            </h4>
                        </div>
                        <div class="col-4 text-right">
                            <i class="feather icon-calendar f-28"></i>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>


        <!-- social end -->
    </div>
@endsection
