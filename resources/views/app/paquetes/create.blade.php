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
				                    			<form>
					                            	<div class="row">
					                            		<div class="form-group col-md-3">
					                            			<label for="">Titulo</label>
										            		<input type="text" class="form-control">
										            	</div>
										            	<div class="form-group col-md-3">
					                            			<label for="">Titulo</label>
										            		<input type="text" class="form-control">
										            	</div>
										            	<div class="form-group col-md-3">
					                            			<label for="">Titulo</label>
										            		<input type="text" class="form-control">
										            	</div>
										            	<div class="form-group col-md-3">
										            		<label for="">Titulo</label>
	                                                        <select name="select" class="form-control form-control-primary">
	                                                            <option value="opt1">Select One Value Only
	                                                            </option>
	                                                            <option value="opt2">Type 2</option>
	                                                            <option value="opt3">Type 3</option>
	                                                            <option value="opt4">Type 4</option>
	                                                            <option value="opt5">Type 5</option>
	                                                            <option value="opt6">Type 6</option>
	                                                            <option value="opt7">Type 7</option>
	                                                            <option value="opt8">Type 8</option>
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