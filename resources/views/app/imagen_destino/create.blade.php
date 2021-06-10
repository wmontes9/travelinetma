
    @extends('layouts.admin')

    @section('content')
    
    
    {{ Auth::user()->id_rol }}
    <div class="page-wrapper">
                                        <!-- Page-header start -->
            <div class="page-header">
                <div class="row align-items-end">
                    <div class="col-lg-8">
                        <div class="page-header-title">
                            <div class="d-inline">
                                <h4>Imagenes</h4>
                                <span>Imagenes destino</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="page-header-breadcrumb">
                            <ul class="breadcrumb-title">
                                <li class="breadcrumb-item" style="float: left;">
                                    <a href="https://demo.dashboardpack.com/adminty-html/index.html"> <i class="feather icon-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item" style="float: left;"><a href="{{ url('/admin/imagen') }}">Imagenes</a>
                                </li>
                                <li class="breadcrumb-item" style="float: left;"><a href="#!">Añadir</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page-header end -->
    
                    <!-- Page body start -->
                    <div class="page-body">
                        <div class="row">
                            
                            <div class="col-xs-12 col-md-12">
                                <!-- Basic Form Inputs card start -->
                                
                                <div class="card">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card-header">
                                                    <h5>Formulario para asociar una imagen a un destino</h5>
					                                <span>Favor completar la información</span>
    
    
                                                    <div class="card-header-right">
                                                        <i class="icofont icofont-spinner-alt-5"></i>
                                                    </div>
    
                                                </div>
                                            </div>
                                        </div>
    
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card-block">
                                                    <form enctype="multipart/form-data" action="{{route('imagen.store')}}" method="POST">
                                                        {{csrf_field()}}
                                                        <div class="row">
                                                            <div class="form-group col-md-3">
                                                                <label for="">Destino</label>
                                                                <select name="id_destino" class="form-control form-control-primary">
                                                                    <option value="opt1">--Seleccionar--
                                                                    </option>
                                                                    @foreach ($destinos as $values)
                                                                        <option value="{{$values['id']}}"> {{$values['nombre']}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-5">
                                                                <label for="">Imagen destino</label>
                                                                <input type="file" id="url_imagen" name="url_imagen" class="form-control" required>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="">Tipo imagen</label>
                                                                <select name="tipo" class="form-control form-control-primary" required>
                                                                    <option>--Seleccionar--</option>
                                                                    <option value="normal" selected='selected'>Normal</option>
                                                                    <option value="navidad">Navidad</option>
                                                                </select>
                                                            </div>										            	
                                                            <div class="col-md-12">
                                                                <div class="modal-footer">
                                                                    <button class="btn btn-outline-primary">Crear</button>
                                                                </div>
                                                            </div>
    
                                                        </div>
                                                    </form>  
                                                </div>
                                                     
                                            </div>
                                        </div>
                                   </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page body end -->
        </div>
    @endsection