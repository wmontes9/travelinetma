@extends('layouts.admin')

@section('content')
Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa consectetur quis beatae consequuntur earum explicabo deleniti tempora blanditiis illum eveniet quasi ut doloremque dolor iure, quo, nisi, voluptates ex, dolore.


<!-- {{--> //Auth::user()->id_rol --}}
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
												<form action="{{ route('destino.store') }}" method="POST">
													@csrf
					                            	<div class="row">
														<div class="form-group col-md-3">
										            		<label for="">Paquete</label>
	                                                        <select name="id_paquete" class="form-control form-control-primary">
	                                                            <option value="opt1">--Seleccionar--
																</option>
																@foreach ($paquetes as $values)
	                                                            	<option value="{{$values['id']}}"> {{$values['nombre']}}</option>
																@endforeach
	                                                        </select>
	                                                    </div>
					                            		<div class="form-group col-md-3">
					                            			<label for="">Nombre</label>
										            		<input type="text" name="nombre" class="form-control">
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