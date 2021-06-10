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
                            <h4>Lineas turisticas</h4>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item" style="float: left;">
                                <a href="{{ url('/admin') }}"> <i class="feather icon-home"></i> </a>
                            </li>
                            <li class="breadcrumb-item" style="float: left;"><a href="{{ url('/admin/linea?page=list') }}">Lineas</a>
                            </li>
                            <li class="breadcrumb-item" style="float: left;"><a href="#!">create</a>
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
					                            <h5>Formulario</h5>
					                            <span>Añada nuevas lineas turisticas.</span>


					                            <div class="card-header-right">
					                                <i class="icofont icofont-spinner-alt-5"></i>
					                            </div>

					                        </div>
				                    	</div>
				                    </div>

				                    <div class="row">
				                    	<div class="col-md-12">
				                    		<div class="card-block">
				                    			@if (Session::has('response'))
				                    				<div class="alert alert-success alert-dismissible fade show" role="alert">
														  <strong>Mensaje!</strong> {{ Session::get('response') }}
														  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
														    <span aria-hidden="true">&times;</span>
														  </button>
													</div>
				                    			@endif
					                    			
												<form action="{{ route('linea.store') }}" method="POST" enctype="multipart/form-data">
													@csrf
					                            	<div class="row">
														<div class="form-group col-md-4">
															<label for="">Seleccione el tipo</label>
														    <select name="id_tipo" class="form-control form-control-primary" required>
														    	<option></option>
														       @foreach ($categorias as $values)
														          <option value="{{ $values->id }}" > {{ $values->nombre }} </option>
														       @endforeach
														    </select>
														</div>

														<div class="form-group col-md-4">
															<span>Banner <small>1800x730px</small></span>
															<input type="file" name="image" class="form-control" style="margin-top: 7px" required>
														</div>

														<div class="form-group col-md-4">
															<span>Banner <small>720x480px</small></span>
															<input type="file" name="image_small" class="form-control" style="margin-top: 7px" required>
														</div>
														
					                            		<div class="form-group col-md-4">
					                            			<label for="">Nombre</label>
										            		<input type="text" name="nombre" class="form-control" required>
										            	</div>
										            	<div class="form-group col-md-12">
					                            			<label for="">Descripción</label>
										            		<textarea name="vivencia" class="form-control" rows="5" required></textarea>
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