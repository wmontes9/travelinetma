@extends("layouts.app")
@section("content")

<section id="banner-lineas">
	<div id="carousel-id" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carousel-id" data-slide-to="0" class="active"></li>
		</ol>
		<div class="carousel-inner">
			<div class="item">
				<img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="{{ url('img/banner/carrito/pagos.jpg') }}">
				<div class="container">
					<div class="carousel-caption">
						<h1 >Detalles de la compra</h1>
						<p></p>
						<p> <!--action--> </p>
					</div>
				</div>
			</div>

		</div>
		<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
		<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
	</div>
</section>

@if(!empty($_REQUEST['id']))
<section class="resultado" style="margin:50px 0">
  <div class="container">
      <div class="data"></div>
  </div>
</section>

@else
<section class="detalles_compra" style="margin-top: 100px">
      <div class="container-fluid">
        <div class="row">
          <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Tipo documento</th>
                    <th>Documento</th>
                    <th>Fecha de nacimiento</th>
                    <th>Valor</th>
                    <th>Opciones</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach(Session::get('carrito') as $index => $value)
                      @php
                        $total = $value['total'];

                      @endphp
                        <tr>
                          <td> {{ $value['nombres'] }}  </td>
                          <td> {{ $value['apellidos'] }} </td>
                          <td> {{ $value['tipo_documento'] }} </td>
                          <td> {{ $value['documento'] }} </td>
                          <td> {{ $value['edad'] }} </td>
                          <td> 
                              @php
                                echo number_format($value['valor']);
                                
                              @endphp
                           </td>
                          <td>
                            <a href="{{ url('detalle_compra',$index) }}" class="btn btn-outline-danger btn-block"> <i class="fa fa-trash"></i> </a>
                          </td>
                        </tr>
                    @endforeach
                    <tr>
                      <td colspan="5"></td>
                      <td>
                          @php
                            echo '$'.number_format($total);
                          @endphp
                          <input type="hidden" value="{{ $total }}" name="total" id="total">
                      </td>
                      <!--<td style="width: 20px"><button class="btn btn-outline-success btn-block" >Pagar</button></td>-->
                       <td style="width: 20px"><button class="btn btn-outline-success btn-block" data-toggle="modal" data-target="#contacto">Pagar</button></td>
                    </tr>
                </tbody>
          </table>
        </div>
      </div>
    </section>

@endif

    




<div class="modal fade" id="contacto">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
            <h3 class="text-success">Datos de contacto</h3>
            <div class="row">
              <div class="form-group col-md-6">
                <span>Nombres</span>
                <input type="text" name="nombres" class="form-control" placeholder="Ingresar nombres">
              </div>
              <div class="form-group col-md-6">
                <span>Telefono</span>
                <input type="number" name="telefono" class="form-control" placeholder="Ingresar telefono">
              </div>
              <div class="form-group col-md-12">
                <span>Correo</span>
                <input type="email" name="email" class="form-control" placeholder="Ingresar correo">
              </div>

              <div class="form-group col-md-6">
                <button type="button" class="btn btn-outline-success" id="button-send">Aceptar</button>
              </div>

            </div>
      </div>
    </div>
  </div>
</div>




<script src="{{ asset('js/jquery.js') }}"></script>

@if(!empty($_REQUEST['id']))
  @php
    $id_transaccion = $_REQUEST['id'];
  @endphp
  <script>
      $.ajax({
        'url':'https://sandbox.wompi.co/v1/transactions/{{ $id_transaccion }}',
        'method':'get',
        success:function(r){
          update_db(r);
          var estado = r['data']['status'];
          var type_alert = '';
          var mensaje = '';
          var titulo = '';
          if(estado=='APPROVED'){
            type_alert = 'alert-success';
            titulo = 'Respuesta!!! ';
            mensaje = 'Su transacción a sido aprobada. por favor guarde el id de la transacción {{ $id_transaccion }}.  <a href="{{ url('/') }}"> Ir al inicio </a>';
          }else if(estado=='DECLINED'){
             type_alert = 'alert-danger';
            titulo = 'Advertencia!!! ';
            mensaje = 'Su transacción a sido rechazada. por favor guarde el id de la transacción  {{ $id_transaccion }}. e <a href="{{ url('detalle_compra') }}"> intentelo nuevamente </a>';
          }

          var contenido = ` 
              <div class="alert ${type_alert} alert-dismissible fade show" role="alert">
                <strong>${titulo}!</strong> ${mensaje}
              </div>
           `;

           $('.resultado .data').html(contenido);
           console.log(contenido);


        }
      });

      function update_db(data){
        var user = JSON.parse(sessionStorage.getItem('user'));
        data['user'] = user;
        $.ajax({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          'url':"{{ url('resultado_pago') }}",
          'method':'post',
          data:data,
          
          success:function(r){

          }
        });
      }


     
  </script>
@endif







 <style>
        #btn-pagos {
            position: fixed;
            height: 70px;
            width: 70px;
            right: 0;
            top: 0;
            bottom: 0;
            margin: auto;
            cursor:pointer;
            border:1px #777 solid;
            border-radius:50px;
            overflow:hidden;
           z-index:99
        }
        #btn-pagos img{
            width:100%;
        }
        div#form-pago {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background: #00000061;
            display:none;
            z-index: 999
        }
        #form-pago form {
    background: #fff;
    max-width: 300px;
    width: 90%;
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    top: 0;
    margin: auto;
    height: 290px;
    padding: 48px 15px 6px 15px;
}
#form-pago form input {
    display: block;
    width: 100%;
    height: 43px;
    border: 1px #777 solid;
    /* padding: 10px 0; */
    border-radius: 0px;
}
#form-pago button {
    display: block;
    width: 100%;
    padding: 16px 0;
    border: none;
    margin: 0;
    background: #ff6682;
    color: #fff;
}
#cerrar {
    cursor: pointer;
    position: absolute;
    top: 10px;
    right: 20px;
}
   p.info-form {
    color: #ff6682;
    font-size: 22px;
}
    </style>

    
      <script type="text/javascript" src="https://checkout.wompi.co/widget.js"></script>

      <script>
         function contacto(){
            var nombres = $('#contacto input[name=nombres]').val();
            var telefono = $('#contacto input[name=telefono]').val();
            var email = $('#contacto input[name=email]').val();
            var data = {nombres:nombres, telefono:telefono, email:email};
            sessionStorage.setItem('user', JSON.stringify(data));
          }

      var send = document.getElementById('button-send');
          send.addEventListener('click',function(){
              var fecha = new Date();
              var dia = fecha.getDay();
              var mes = fecha.getMonth();
              var anno = fecha.getFullYear();
              var hora = fecha.getHours();
              var min = fecha.getMinutes();
              var seg = fecha.getSeconds();
              var ref = anno+''+mes+''+dia+''+hora+''+''+min+''+seg;
              contacto();


              var monto = document.getElementById('total').value;
              monto = monto+'00';

                  var checkout = new WidgetCheckout({
                    currency: 'COP',
                    amountInCents: monto,
                    reference: ref,
                    //publicKey: 'pub_prod_Zzkf0UPT3rHF546TH4XDSo1W0RmfkfQT'
                    publicKey: 'pub_test_q63oZEkSRLI51w4L2zyVd2e9AoEXj8Fo',
                   redirectUrl:  "{{ url('/detalle_compra') }}" // Optional
                  });

              checkout.open(function ( result ) {
                var transaction = result.transaction;
                console.log(result);
                console.log('Transaction ID: ', transaction.id)
                console.log('Transaction object: ', transaction)
              });
      });


  
      
</script>

@endsection