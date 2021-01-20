@extends('layouts.admin')

@section('content')
<div class="page-wrapper">
                                    <!-- Page-header start -->
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <div class="d-inline">
                            <h4>Basic Form Inputs</h4>
                            <span>Lorem ipsum dolor sit <code>amet</code>, consectetur
                                adipisicing elit</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item" style="float: left;">
                                <a href="https://demo.dashboardpack.com/adminty-html/index.html"> <i class="feather icon-home"></i> </a>
                            </li>
                            <li class="breadcrumb-item" style="float: left;"><a href="#!">Form Components</a>
                            </li>
                            <li class="breadcrumb-item" style="float: left;"><a href="#!">Form Components</a>
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
					                            <h5>Basic Form Inputs</h5>
					                            <span>Add class of <code>.form-control</code> with
					                                <code>&lt;input&gt;</code> tag</span>


					                            <div class="card-header-right">
					                                <i class="icofont icofont-spinner-alt-5"></i>
					                            </div>

					                        </div>
				                    	</div>
				                    </div>

				                    <div class="row">
				                    	<div class="col-md-12">
				                    		<div class="card-block">
												<form action="{{ route('paquete.update',$paquete) }}" method="POST">
													@csrf
													@method('PUT')
					                            	<div class="row">
														<div class="form-group col-md-3">
										            		<label for="">Línea</label>
	                                                        <select name="id_linea" class="form-control form-control-primary">
	                                                            <option value="opt1">--Seleccionar--
																</option>
																@foreach ($lineas as $values)
	                                                            	<option value="{{$values['id']}}" @if($paquete->id=== $values['id']) selected='selected' @endif> {{$values['nombre']}}</option>
																@endforeach
	                                                        </select>
	                                                    </div>
					                            		<div class="form-group col-md-3">
					                            			<label for="">Nombre</label>
										            		<input type="text" name="nombre" value="{{ $paquete->nombre }}" class="form-control">
										            	</div>
										            	<div class="form-group col-md-3">
					                            			<label for="">Duración</label>
										            		<input type="text" name="duracion" value="{{ $paquete->duracion }}" class="form-control">
										            	</div>
										            	<div class="form-group col-md-3">
					                            			<label for="">Valor</label>
										            		<input type="text" name="valor" value="{{ $paquete->valor }}" class="form-control">
										            	</div>
										            	
										            	<div class="col-md-12">
										            		<div class="modal-footer">
										            			<button class="btn btn-outline-primary">Guardar cambios</button>
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