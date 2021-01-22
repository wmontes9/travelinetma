@extends('layouts.admin')
@section('title','Tarifas')
@section('content')
<div class="page-wrapper">
                                    <!-- Page-header start -->
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <div class="d-inline">
                            <h4>Tarifas</h4>
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
                            <li class="breadcrumb-item" style="float: left;"><a href="{{ url('/admin/tarifa?page=list') }}">Lineas</a>
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
		            	
		                <div class="col-xs-12 col-md-9">
		                    <!-- Basic Form Inputs card start -->


		                    
		                    <div class="card">
			                    	<div class="row">
				                    	<div class="col-md-12">
				                    		<div class="card-header">
					                            <h5>Formulario</h5>
					                            <span>Añada las tarifas base segun corresponda a cada paquete.</span>


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
					                    			
												<form action="{{ route('tarifa.store') }}" method="POST">
													@csrf
					                            	<div class="row">
					                            		<div class="form-group col-md-3">
														    <label for="">Seleccione el paquete</label>
				                                                <select name="id_paquete" class="form-control form-control-primary">
				                                                   <option value="opt1">--Seleccionar--</option>
				                                                   @foreach ($paquetes as $values)
				                                                      <option value="{{$values['id']}}" > {{$values['nombre']}} </option>
				                                                   @endforeach
				                                                </select>
					                                        </div>
											            	
											            	<div class="form-group col-md-3">
						                            			<label for="">Edad min</label>
											            		<input type="range" id="minEdad" name="minEdad" min="0" class="form-control" max="100" value="0" oninput="minamount.value=minEdad.value">
																<output id="minamount" name="amount" for="minEdad">0</output> años
											            	</div>

											            	<div class="form-group col-md-3">
						                            			<label for="">Edad max</label>
											            		<input type="range" id="maxEdad" name="maxEdad" min="0" class="form-control" max="100" value="0" oninput="maxamount.value=maxEdad.value">
																<output id="maxamount" name="maxamount" for="maxEdad">0</output> años
											            	</div>

											            	<div class="form-group col-md-3">
						                            			<label for="">Valor</label>
											            		<input type="number" id="valor" name="valor" class="form-control" >
											            	</div>
										            	
										            	<div class="col-md-12">
										            		<div class="modal-footer">
										            			<button class="btn btn-outline-primary">Añadir</button>
										            		</div>
										            	</div>

										            </div>
					                            </form>  
				                    		</div>
					                    		 
				                    	</div>
				                    </div>
		                       </div>
		                    </div>



		                    <div class="col-xs-12 col-md-3">
		                    <!-- Basic Form Inputs card start -->
		                    
		                    <div class="card">
			                    	<div class="row">
				                    	<div class="col-md-12">
				                    		<div class="card-header">
					                            <h5>Detalles</h5>
					                            <span>Tarifas y rango seleccionados.</span>


					                            <div class="card-header-right">
					                                <i class="icofont icofont-spinner-alt-5"></i>
					                            </div>
					                            <table class="table table-bordered">
					                            	<thead>
					                            		<tr>
					                            			<td>Edad min</td>
					                            			<td>Edad max</td>
					                            			<td>Valor</td>
					                            		</tr>
					                            	</thead>
					                            	<tbody class="tarifas">
					                            		
					                            	</tbody>
					                            </table>

					                        </div>
				                    	</div>
				                    </div>

				                    <div class="row">
				                    	<div class="col-md-12">
				                    		<div class="card-block">

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


    <script>
    	$(document).on('change','select[name=id_paquete]',function(e){
    		var id_paquete = e.target.value;

    		get_tarifas(id_paquete);
    	});

    	function get_tarifas(id){
    		$.ajax({
    			method:'get',
    			url:"{{ url('/admin/tarifa') }}/"+id,
    			success:function(e){
    				var html = '';
    				$.each(e,function(el){
    					html += `
    						<tr>
    							<td> ${this.edad_min} </td>
    							<td> ${this.edad_max} </td>
    							<td> ${this.valor} </td>
    						</tr>
    					 `;
    				});


    				$('.tarifas').html(html);
    			}
    		})
    	}
    </script>
@endsection