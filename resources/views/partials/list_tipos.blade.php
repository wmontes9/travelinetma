<?php  
	use App\Tipo;
	$tipos = Tipo::with("lineas")->get();

?>

<style>
	.dropdown-submenu:hover .dropdown-menu{
		display: block;
	}
</style>
@foreach($tipos as $key => $value)
	
	 @if(count($value->lineas)>0)
	 	<li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#"> {{ $value->nombre }} </a>
		    <ul class="dropdown-menu">
		    	@foreach($value->lineas as $index => $linea)
		    		<li><a class="dropdown-item" href="{{ url('/categoria',$value->nombre) }}?ids={{ $linea->id }}&linea={{ $linea->nombre }}"> {{ $linea->nombre }} </a></li>
		    	@endforeach
		    </ul>
		 </li>
	@else
		<li><a class="dropdown-item" href="#"> {{ $value->nombre }} </a></li>
	@endif
@endforeach


<!--
<li><a class="dropdown-item" href="#">Another action</a></li>
-->