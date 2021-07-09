@extends("layouts.app")
@section("content")
<style>
    .filterDiv {
      float: left;
      color: #050505;
      text-align: center;
      display: none;
    }
    
    .show {
      display: block;
    }
    
    .container {
      margin-top: 20px;
      overflow: hidden;
    }
    
    /* Style the buttons */
    .btn {
      border: none;
      outline: none;
      padding: 12px 16px;
      background-color: #f1f1f1;
      cursor: pointer;
    }
    
    .btn:hover {
      background-color: #ddd;
    }
    
    .btn.active {
      background-color: #666;
      color: white;
    }
/*       .card {
height: 552px;
margin: 29px 0;
background: #f3f3f3;
}*/
    </style>
    <div class="container">
        <div id="myBtnContainer" class="text-center categorias_establecimientos">
            <button class="btn active" onclick="filterSelection('all')" element="0"> Todas</button>
            @foreach ($lis_tipos as $tipo)
                <button class="btn" onclick="filterSelection('{{ $tipo['id'] }}')" element="{{ $tipo['id'] }}"> {{ $tipo['nombre'] }}</button>
            @endforeach <hr>
          </div>
          <div class="">
                  @foreach($tipos as  $value)
                      @foreach($value['establecimientos'] as $index => $establecimiento)        
                          <div class="col-md-6 col-lg-4 filterDiv  {{ $establecimiento['id_tipo'] }} show active establecimiento">
                              <div class="col">
                                  <div class="card" style="min-height: 350px"> 
                                      <img
                                      src='{{ asset("storage/imgEstablecimiento")}}/{{$establecimiento['url_imagen']}}'
                                      class="card-img-top"
                                      alt="..."
                                      />
                                      <div class="card-body text-justify" style="padding: 0 15px;">
                                      <h5 class="card-title text-center"><a href="{{ $establecimiento['url'] }}">{{ $establecimiento['nombre'] }}</a></h5>
                                      <p class="card-text">
                                          <?php 
                                          $string = "Dirección:".$establecimiento['direccion'].'</br>'."Teléfono:". $establecimiento['telefono'].'</br>'."Descripción".$establecimiento['descripcion'];
                                          ?>
                                        <p>
                                         {!! str_limit($string, $limit = 200, $end = '...')!!}.</p>
                                        <a href="{{ $establecimiento['url'] }}"><p>Ver +</p></a>
                                      </p>
                                      </div>
                                  </div>
  
                              </div>
                          </div>
                      @endforeach
                  @endforeach
          </div>
          
        <!--<div class="row mb-4">
            <div class="col-md-4 col-lg-4">
                <a class="link" href="https://www.google.com/travel/hotels/entity/CgsIw6CLwdix3cKlARAB/prices?g2lb=2502548%2C4254308%2C4258168%2C4260007%2C4270442%2C4271059%2C4274032%2C4291318%2C4305595%2C4306835%2C4308216%2C4314846%2C4317915%2C4328159%2C4329288%2C4330113%2C4338438%2C4341278%2C4270859%2C4284970%2C4291517%2C4292955%2C4307997&hl=es&gl=co&un=1&rp=EMOgi8HYsd3CpQE4AkAASAE&ictx=1&ved=2ahUKEwjhzOGsr8_nAhVDvlkKHZBZDDsQjLsCKAAwEXoECB0QAQ&hrf=IgNDT1AqFgoHCOQPEAIYFhIHCOQPEAIYFxgBKACCASUweDhlNmE3ZGQzMWUwMzIxMGQ6MHhhNTg1NzU4ZDg4MjJkMDQzmgEnGiUweDhlNmE3ZGQzMWUwMzIxMGQ6MHhhNTg1NzU4ZDg4MjJkMDQz" target="blank" class="readmore">
                    <div class="card mt-4" >
                            <img src="{{url('img/hoteles/hotel1.jpg')}}" class="card-img-top img-fluid" alt="...">
                            <div class="solid-service-box shadow-lg shadow-lg">
                                <h2>01.</h2>
                                <h3>Hotel San Francisco</h3>
                                <p>Dirección: Cra 9, #18-90 Tunja. <br> Teléfono: (8)7426645.<br><br>Servicios: Alojamiento-Restaurante.</p>
                                <p>Ver +</p>
                            </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-lg-4">
                <a class="link" href="https://www.tripadvisor.co/Hotel_Review-g776258-d10631572-Reviews-Hotel_Oceta-Tunja_Boyaca_Department.html" target="blank" class="readmore">
                    <div class="card mt-4" >
                            <img src="{{url('img/hoteles/hoteloce.jpg')}}" class="card-img-top img-fluid" alt="...">
                            <div class="solid-service-box shadow-lg">
                                <h2>02.</h2>
                                <h3>Hotel Oceta</h3>
                                <p>Dirección: Cl. 19 #7-64 Tunja <br> Teléfono: (8) 7422886.<br><br>Servicios: Alojamiento-Restaurante.</p>
                                <p>Ver +</p>
                            </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-lg-4">
                <a class="link" href="https://www.google.com/travel/hotels/entity/CgsI-LS4hvii9tjiARAB/prices?g2lb=2502548%2C4254308%2C4258168%2C4260007%2C4270442%2C4271059%2C4274032%2C4291318%2C4305595%2C4306835%2C4308216%2C4314846%2C4317915%2C4328159%2C4329288%2C4330113%2C4338438%2C4341278%2C4270859%2C4284970%2C4291517%2C4292955%2C4307997&hl=es&gl=co&un=1&rp=EPi0uIb4ovbY4gE4AkAASAE&ictx=1&ved=2ahUKEwjM3ayhsM_nAhVnrlkKHddsDkYQjLsCKAAwDXoECBQQAQ&hrf=IgNDT1AqFgoHCOQPEAIYDhIHCOQPEAIYDxgBKACCASUweDhlNmE3ZGQzNmNhY2ZiNDk6MHhlMmIxZDkxNzgwY2UxYTc4mgEnGiUweDhlNmE3ZGQzNmNhY2ZiNDk6MHhlMmIxZDkxNzgwY2UxYTc4" target="blank" class="readmore">
                    <div class="card mt-4" >
                            <img src="{{url('img/hoteles/hotelign.jpg')}}" class="card-img-top img-fluid" alt="...">
                            <div class="solid-service-box shadow-lg">
                                <h2>03.</h2>
                                <h3>Hotel San Ignacio Plaza</h3>
                                <p>Dirección: Cl. 18 #10-51.Tunja <br> Teléfono: 320 8375306. <br><br>Servicios: Alojamiento-Restaurante.</p>
                                <p>Ver +</p>
                            </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-lg-4">
                <a class="link" href="https://www.google.com/travel/hotels/entity/CgoI-Kyyw7Hvs_oZEAE/prices?g2lb=2502548%2C4254308%2C4258168%2C4260007%2C4270442%2C4271059%2C4274032%2C4291318%2C4305595%2C4306835%2C4308216%2C4314846%2C4317915%2C4328159%2C4329288%2C4330113%2C4338438%2C4341278%2C4270859%2C4284970%2C4291517%2C4292955%2C4307997&hl=es&gl=co&un=1&rp=EPisssOx77P6GTgCQABIAQ&ictx=1&ved=2ahUKEwi-rZDCsM_nAhVip1kKHSUNCDUQjLsCKAAwFHoECBIQAQ&hrf=IgNDT1AqFgoHCOQPEAIYDhIHCOQPEAIYDxgBKACCASUweDhlNmE3ZDVhZDQzYzc4MDc6MHgxOWY0Y2Y3YjE4NmM5Njc4mgEnGiUweDhlNmE3ZDVhZDQzYzc4MDc6MHgxOWY0Y2Y3YjE4NmM5Njc4" target="blank" class="readmore">
                    <div class="card mt-4" >
                        <img src="{{url('img/hoteles/hotelboyp.jpg')}}" class="card-img-top img-fluid" alt="...">
                        <div class="solid-service-box shadow-lg">
                            <h2>19.</h2>
                            <h3>Hotel Boyacá Plaza</h3>
                            <p>Dirección: Cl. 18 ##11-22. Tunja<br> Teléfono: (8) 7401116<br><br>Servicios: Hospedaje.</p>
                            <p>Ver +</p>
                        </div>
                    </div>
                </a>
            </div>A>
        </div>-->
        <!--<div class="row mt-4">
            <div class="col-md-4 col-lg-4">
                <a class="link" href="https://www.google.com/travel/hotels/entity/CgoI-Kyyw7Hvs_oZEAE/prices?g2lb=2502548%2C4254308%2C4258168%2C4260007%2C4270442%2C4271059%2C4274032%2C4291318%2C4305595%2C4306835%2C4308216%2C4314846%2C4317915%2C4328159%2C4329288%2C4330113%2C4338438%2C4341278%2C4270859%2C4284970%2C4291517%2C4292955%2C4307997&hl=es&gl=co&un=1&rp=EPisssOx77P6GTgCQABIAQ&ictx=1&ved=2ahUKEwi-rZDCsM_nAhVip1kKHSUNCDUQjLsCKAAwFHoECBIQAQ&hrf=IgNDT1AqFgoHCOQPEAIYDhIHCOQPEAIYDxgBKACCASUweDhlNmE3ZDVhZDQzYzc4MDc6MHgxOWY0Y2Y3YjE4NmM5Njc4mgEnGiUweDhlNmE3ZDVhZDQzYzc4MDc6MHgxOWY0Y2Y3YjE4NmM5Njc4" target="blank" class="readmore">
                    <div class="card mt-4" >
                        <img src="{{url('img/hoteles/hotelboyp.jpg')}}" class="card-img-top img-fluid" alt="...">
                        <div class="solid-service-box shadow-lg">
                            <h2>19.</h2>
                            <h3>Hotel Boyacá Plaza</h3>
                            <p>Dirección: Cl. 18 ##11-22. Tunja<br> Teléfono: (8) 7401116<br><br>Servicios: Hospedaje.</p>
                            <p>Ver +</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-lg-4">
                <a class="link" href="https://www.google.com/travel/hotels/entity/CgoI0orsyIDUkrY1EAE/prices?g2lb=2502548%2C4254308%2C4258168%2C4260007%2C4270442%2C4271059%2C4274032%2C4291318%2C4305595%2C4306835%2C4308216%2C4314846%2C4317915%2C4328159%2C4329288%2C4330113%2C4338438%2C4341278%2C4270859%2C4284970%2C4291517%2C4292955%2C4307997&hl=es&gl=co&un=1&rp=ENKK7MiA1JK2NTgCQABIAQ&ictx=1&ved=2ahUKEwi-i5vXsM_nAhXH1FkKHYc6Dz0QjLsCKAAwE3oECBkQAQ&hrf=IgNDT1AqFgoHCOQPEAIYDhIHCOQPEAIYDxgBKACCASUweDhlNmE3YzJkMWM5YjA3MTc6MHgzNTZjNGFhMDA5MWIwNTUymgEnGiUweDhlNmE3YzJkMWM5YjA3MTc6MHgzNTZjNGFhMDA5MWIwNTUy" target="blank" class="readmore">
                    <div class="card mt-4" >
                        <img src="{{url('img/hoteles/hotelcid.jpg')}}" class="card-img-top img-fluid" alt="...">
                        <div class="solid-service-box shadow-lg">
                            <h2>19.</h2>
                            <h3>Hotel el Cid</h3>
                            <p>Dirección: Cra 10, #20-82<br> Teléfono: (8) 7423458<br><br>Servicios: Hospedaje.</p>
                            <p>Ver +</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-lg-4">
                <a class="link" href="https://www.google.com/travel/hotels/entity/CgsIufOY1N_cms3mARAB/prices?g2lb=2502548%2C4254308%2C4258168%2C4260007%2C4270442%2C4271059%2C4274032%2C4291318%2C4305595%2C4306835%2C4308216%2C4314846%2C4317915%2C4328159%2C4329288%2C4330113%2C4338438%2C4341278%2C4270859%2C4284970%2C4291517%2C4292955%2C4307997&hl=es&gl=co&un=1&rp=ELnzmNTf3JrN5gE4AkAASAE&ictx=1&ved=2ahUKEwiX7KrrsM_nAhUu1lkKHcjSBToQjLsCKAAwF3oECBIQAQ&hrf=IgNDT1AqFgoHCOQPEAIYDxIHCOQPEAIYEBgBKACCASUweDhlNmE3YzJkYWQ1NmVhNDc6MHhlNjlhNmFlNWZhODYzOWI5mgEnGiUweDhlNmE3YzJkYWQ1NmVhNDc6MHhlNjlhNmFlNWZhODYzOWI5" target="blank" class="readmore">
                    <div class="card mt-4" >
                        <img src="{{url('img/hoteles/hotelhun.jpg')}}" class="card-img-top img-fluid" alt="...">
                        <div class="solid-service-box shadow-lg">
                            <h2>21.</h2>
                            <h3>Hotel Hunza</h3>
                            <p>Dirección: Cll 21 A, #10-66 <br>Teléfono: (8) 7424111<br><br>Servicios: Hospedaje y restaurante</p>
                            <p>Ver +</p>
                        </div>
                    </div>
                </a>
            </div>

            
        </div>-->
    </div>
    <script>
        filterSelection("all")
        function filterSelection(c) {
            console.log(c);
          var x, i;
          x = document.getElementsByClassName("filterDiv");
          if (c == "all") c = "";
          for (i = 0; i < x.length; i++) {
            console.log(x[i]);

            bnt_class(c);
            w3RemoveClass(x[i], "show");
            if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
          }
        }
        
        function w3AddClass(element, name) {
          var i, arr1, arr2;
          arr1 = element.className.split(" ");
          arr2 = name.split(" ");
          for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
          }
        }
        
        function w3RemoveClass(element, name) {
          var i, arr1, arr2;
          arr1 = element.className.split(" ");
          arr2 = name.split(" ");
          for (i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
              arr1.splice(arr1.indexOf(arr2[i]), 1);     
            }
          }
          element.className = arr1.join(" ");
        }
        
        // Add active class to the current button (highlight it)
        function bnt_class(btn=null){

          

            //console.log(btn);
            var btnContainer = document.getElementById("myBtnContainer");
            var btns = btnContainer.getElementsByClassName("btn");
            for (var i = 0; i < btns.length; i++) {
                    $('#myBtnContainer button').removeClass('active');
                    $(`#myBtnContainer button[element='${btn}']`).addClass('active');
                    btns[i].addEventListener("click", function(){
                    var current = document.getElementsByClassName("active");
                    current[0].className = current[0].className.replace(" active", "");
                    this.className += " active";
                });
            }
        }
       
        </script> 
@endsection