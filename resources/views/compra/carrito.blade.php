@extends("layouts.app")
@section("content")

@if(!empty($detalles))
<section class="resultado" style="margin:50px 0">
  <div class="container">
      <!--<div class="data"></div>-->
      <div id="factura">
        <table class="table-bordered">
          <thead>
              <tr>
                  <td colspan="2" width="60%" class="logo"> <img style="max-width: 130px" src="{{ url('img/logo.png') }}" alt=""> </td>
                  <td>
                    <p><b>TRAVELINETMA</b><br>
                      <b>Dirección</b>: carrera 9# 19-86 Apartado postal #40, Tunja, Boyacá <br>
                      <b>Teléfono</b>: 311 5182141 <br>
                      <b>Estado</b> : {{ $detalles->estado }} <br>
                      <b>Referencia</b> : {{ $detalles->id_transaccion }} <br>
                     </p>
                  </td>
              </tr>
          </thead>
          <tbody class="info">
            <tr>
              <td colspan="3" class="text-center bg-default"><h6>DATOS DE CONTACTO</h6></td>
            </tr>
            <tr>
              <th> Nombres  </th>
              <th> Telefono  </th>
              <th> Correo  </th>
            </tr>
            <tr>
              <td> {{ $detalles->cliente->name }}  </td>
              <td> {{ $detalles->cliente->telefono }}  </td>
              <td> {{ $detalles->cliente->email }}  </td>
            </tr>
          </tbody>      
        </table>

        <br>

        <table class="detalles table-bordered">
          <thead>
              <tr>
                <td colspan="8" class="text-center bg-default"><h6>DETALLES</h6></td>
              </tr>
              <tr>
                <th width="25%">Nombres</th>
                <th width="25%">Apellidos</th>
                <th width="25%">Documento</th>
                <th width="25%">Edad</th>
                <th width="25%">Valor</th>
                <th width="25%">Descuento</th>

                <th  colspan="2" width="25%">Total</th>
              </tr>
          </thead>
          <tbody>
           <tbody>
              @foreach($detalles->detalles as $index => $value)
                <tr>
                  <td> {{ $value->nombres }} </td>
                  <td> {{ $value->apellidos }} </td>
                  <td> {{ $value->documento }} </td>
                  <td> {{ $value->edad }} </td>
                  <td> {{ number_format($value->valor) }} </td>
                  <td> {{ number_format($value->descuento) }} </td>
                  <td> {{ number_format($value->valor - $value->descuento) }} </td>
                </tr>
              @endforeach
              <tr>
                <td colspan="3"></td>
                <td><b>Otros descuentos</b>  </td>
                <td> {{ $detalles->otros_descuentos }} </td>
                <td><b>Total</b>  </td>
                <td> ${{ number_format($detalles->valor - $detalles->otros_descuentos) }} </td>
                <!--<td style="width: 20px"><button class="btn btn-outline-success btn-block" >Pagar</button></td>-->
                 
              </tr>
          </tbody>
          </tbody>
        </table>

      </div>

      <button onclick="print_content('factura')" class="btn btn-outline-success">Imprimir</button>
        
  </div>
</section>

@else
<section id="banner-lineas">
  <div id="carousel-id" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carousel-id" data-slide-to="0" class="active"></li>
    </ol>
    <div class="carousel-inner">
      <div class="item">
        <img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" class="img-banner" alt="First slide" src="">
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
  
  @if(Session::has('carrito'))
  <section class="detalles_compra" style="margin-top: 100px">
        <div class="container-fluid">
          <div class="row">
            <div class="table-responsive">
              <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Nombres</th>
                      <th>Apellidos</th>
                      <th>Tipo documento</th>
                      <th>Documento</th>
                      <th>Edad</th>
                      <th>Valor servicios</th>
                      <th>Descuento</th>
                      <th>Total</th>
                      
                      <th>Opciones</th>
                    </tr>
                  </thead>
                  <tbody>
                      @if(Session::has('carrito'))
                      @if(count(Session::get('carrito'))>0)
                        @foreach(Session::get('carrito') as $index => $value)
                          @php
                            $total = $value['total'];
                            $descuentos = $value['otros_descuentos'];

                          @endphp
                            <tr>
                              <td> {{ $value['nombres'] }}  </td>
                              <td> {{ $value['apellidos'] }} </td>
                              <td> {{ $value['tipo_documento'] }} </td>
                              <td> {{ $value['documento'] }} </td>
                              <td> {{ $value['edad'] }} </td>
                              <td> {{ number_format($value['total_servicios']) }} </td>
                               <td>  {{ number_format($value['descuento']) }} </td>
                              <td> 
                                  @php
                                    echo number_format($value['valor']);
                                    
                                  @endphp
                               </td>
                              
                              <td>
                                <a href="{{ url('detalle_compra',$index) }}" class="btn  btn-sm btn-outline-danger btn-block"> <i class="fa fa-trash"></i> </a>
                              </td>
                            </tr>
                        @endforeach
                        <tr>
                          <td colspan="4"></td>
                          <td><b>Otros descuentos</b></td>
                          <td> {{ number_format($descuentos) }} </td>
                          <td><b>Total</b></td>
                          <td>
                              @php
                                $total = $total - $descuentos;
                                echo '$'.number_format($total);
                              @endphp
                              <input type="hidden" value="{{ $total }}" name="total" id="total">
                          </td>
                          <!--<td style="width: 20px"><button class="btn btn-outline-success btn-block" >Pagar</button></td>-->
                           <td style="width: 20px"><button class="btn btn-outline-success btn-block" id="button-send">Pagar</button></td>
                        </tr>
                        @else
                        <script>
                          location.href = '{{ url('/') }}';
                        </script>
                        @endif
                      @endif
                  </tbody>
            </table>
            </div>
          </div>
        </div>
  </section>
  @else
    <div class="carrito-vacio">
      <div class="container">
          <div class="info">
              <h1 class="text-muted">Ups!!! Tu carrito esta vacio.</h1>
          </div>
        
      </div>
      
    </div>
  @endif

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
                <button type="button" class="btn btn-outline-success" >Aceptar</button>
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

           //$('.resultado .data').html(contenido);
           //console.log(contenido);


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
            if(r['response']){
              location.reload();
            }

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

      @media(max-width: 768px) {
          .carousel-caption h1 {
            font-size: 37px !important;
        }
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
                    publicKey: 'pub_prod_bHWszpW4wLfBQwBuPn5uI67w72jy9HVK',
                   redirectUrl:  "{{ url('/detalle_compra') }}" // Optional
                  });

              checkout.open(function ( result ) {
                var transaction = result.transaction;
                console.log(result);
                console.log('Transaction ID: ', transaction.id)
                console.log('Transaction object: ', transaction)
              });
      });  

          function print_content(selector){
             var contenido= $(`#${selector}`).html();
             var contenidoOriginal= $('html').html();
             document.body.innerHTML = contenido;
             window.print();
             document.body.innerHTML = contenidoOriginal;
        }


        banner();
        window.onresize = function(event) {
            banner();
        };
                function banner(){
                    var ancho = screen.width;
                    if(ancho<=767){
                        img = 'img/banner/carrito/pagos1.jpg';
                    }else {
                       img = 'img/banner/carrito/pagos.jpg'; 
                    }

                     $('.img-banner').attr('src',img);
                }
            
</script>

@endsection