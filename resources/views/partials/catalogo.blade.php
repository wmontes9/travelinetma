<div class="modal fade" id="catalogo">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-body">
				<iframe src="{{url('/catalogo')}}" style="width: 100%; display: block;min-height: 800px"></iframe>
				{{-- @include('partials.catalogo_paquete') --}}
			</div>
			<div class="modal-footer">
				<a href="https://drive.google.com/file/d/125Dbf9hsHFIeXH4eYV2MWh43vyPcsmCq/preview" target="_blank"  class="btn btn-success" >Nueva ventana</a>
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
	</div>
</div>


<style>
	.modal-dialog.modal-lg {
	    max-width: 80%;
	}
	
	@media(max-width: 768px){
		.modal-dialog.modal-lg {
		    max-width: 100%;
		}
	}
</style>