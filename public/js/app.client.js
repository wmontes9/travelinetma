var url = '';

function set_url(url=null){
	this.url = url;
}

function get_lineas(){
	$.ajax({
		"url":this.url+"/lineas",
		method:'get',
		success:function(el){
			//<a class="dropdown-item" href="{{url('/superlinea')}}">Super línea</a>
			var lineas = ``;
			//var lista = parse.JSON(el);
			$.each(el,function(e){
				if(this.lineas.length==0){
					//lineas+=`<li><a class="dropdown-item" href="${url}/categoria/${this.nombre}">${this.nombre}</a></li>`;
				}else{
					

                          
						
					 
				}
			
			});
			$('nav .categorias').html(lineas);
		}
	})
}