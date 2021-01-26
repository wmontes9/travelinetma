@extends("layouts.app")
@section("content") 
<style>
    #carouselExampleCaptions h3.title {
    font-size: 61px;
}
</style>
    <div class="d-none d-sm-none d-md-block"> 
   
    </div>
    <div class="container-flid">   
        <br>
        <br>    
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" >
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="title">Bienvenido</h3>
                        <p style="font-size:1.7em;">!Lo llevamos a donde sus sueños quieren llegar¡</p>
                    </div>
                    <img class="d-block w-100" alt="First slide"  style="max-height:720px;" src="img/slider-01.jpg"/>                            
                    
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" alt="Second slide" style="max-height:720px;" src="img/slider-02.jpg"/>
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="title">Servicios de Calidad</h3>
                        <p style="font-size:1.7em;">!Lo que necesitas lo tenemos¡</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" alt="Second slide" style="max-height:720px;" src="img/slider-03.jpg"/>
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="title">Bienvenido</h3>
                        <p style="font-size:1.7em;">!Lo llevamos a donde sus sueños quieren llegar¡</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" alt="Second slide" style="max-height:720px;" src="img/slider-04.jpg"/>
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="title">Servicios de Calidad</h3>
                        <p style="font-size:1.7em;">!Lo que necesitas lo tenemos¡</p>
                    </div>
                </div>
                
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div> 
        <hr>
        <div class="row">
            <div class="col-md-12">
                <br>
                <h2 class="text-center title text-company">Líneas de Servicio.</h2>
            </div>
        </div>

      <style>
        .filterDiv {
          float: left;
          color: #ffffff;
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
        </style>
        <div id="myBtnContainer" class="text-center">
          <button class="btn active" onclick="filterSelection('all')" element="0"> Todas</button>
          @foreach ($lis_tipos as $tipo)
              <button class="btn" onclick="filterSelection('{{ $tipo['id'] }}')" element="{{ $tipo['id'] }}"> {{ $tipo['nombre'] }}</button>
          @endforeach
        </div>
        <hr>
        <div class="container-fluid">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($lineas as $linea)
                    <div class="col-md-6 col-lg-6 filterDiv {{ $linea->id_tipo }} show active">
                        <div class="col">
                            <div class="card">
                              <img
                                src="https://mdbootstrap.com/img/new/standard/city/041.jpg"
                                class="card-img-top"
                                alt="..."
                              />
                              <div class="card-body">
                                <h5 class="card-title"><a href="#">{{ $linea->nombre }}</a></h5>
                                <p class="card-text">
                                    {{ $linea->nombre }}
                                </p>
                              </div>
                            </div>
                        </div>
                    </div>
                @endforeach
          </div>
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
            console.log(btn);
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
        <!--<div class="row">
            <div class="col-md-2 text-center">
            </div>
           
                <div class="col-md-2 text-center" id="linea">
                    <a href="{{url('/superlinea')}}">
                        <br>
                        <img src="img/superl.JPG" class="rounded-circle img-fluid img-thumbnail" alt="Super línea">
                        <div>
                            <br>
                            <h4 class="text-company">Super línea</h4>
                        </div>
                    </a>
                </div>
           
            <div class="col-md-1 text-center">
            </div>
                <div class="col-md-2 text-center" id="linea1">
                    <a href="{{url('/playandina')}}">
                        <br>
                        <img src="img/playa.jpg" class="rounded-circle img-fluid img-thumbnail" alt="Playa andina">
                        <div>
                            <br>
                            <h4 class="text-company">Playa andina</h4>
                        </div>
                    </a>
                </div>
            </a>
            <div class="col-md-1 text-center">
            </div>
                <div class="col-md-2 text-center" id="linea2">
                    <a href="{{url('/termal')}}">
                        <br>
                        <img src="img/lago.jpg" class="rounded-circle img-fluid img-thumbnail" alt="Paseo termal">
                        <div>
                            <br>
                            <h4 class="text-company">Paseo termal</h4>
                        </div>
                    </a>
                </div>
            </a>
        </div>
        <div class="row">
            <div class="col-md-2 text-center">
            </div>
           
                <div class="col-md-2 text-center" id="linea">
                    <a href="{{url('/tunjahistorica')}}">
                        <br>
                        <img src="img/tunja/republicana/republicana1.jpg" class="rounded-circle img-fluid img-thumbnail" alt="Super línea">
                        <div>
                            <br>
                            <h4 class="text-company">Tunja histórica</h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-1 text-center">
                </div>
                <div class="col-md-2 text-center" id="linea">
                    <a href="{{url('/navidad')}}">
                        <br>
                        <img src="img/navidad/slider5.jpg" class="rounded-circle img-fluid img-thumbnail" alt="Super línea">
                        <div>
                            <br>
                            <h4 class="text-company">Línea navideña</h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-1 text-center">
                </div>
                <div class="col-md-2 text-center" id="linea">
                    <a href="{{url('/cocuy')}}">
                        <br>
                        <img src="img/cocuy/cocuy2.jpg" class="rounded-circle img-fluid img-thumbnail" alt="Super línea">
                        <div>
                            <br>
                            <h4 class="text-company">Parque nacional natural "El Cocuy"</h4>
                        </div>
                    </a>
                </div>
        </div>
        <div class="row">
            <div class="col-md-2 text-center">
            </div>
           
                <div class="col-md-2 text-center" id="linea">
                    <a href="{{url('/norteg')}}">
                        <br>
                        <img src="img/norte/norte1.jpg" class="rounded-circle img-fluid img-thumbnail" alt="Super línea">
                        <div>
                            <br>
                            <h4 class="text-company">Norte y Gutierrez</h4>
                        </div>
                    </a>
                </div>
        </div>-->
        {{-- <div class="row">
            <div class="col-md-12">
                <h2 class="text-center title text-company">Líneas de Servicios</h2>
            </div>
        </div>    --}}
        <!--<div id="lineas">              
            <div v-for="tipo in tipos">                                                               
                <div v-if="tipo.nombre == 'pedagogica'" class="mt-2">
                    <div class="row">
                        <div class="col-md-2 text-center d-flex justify-content-center">
                            <div class="lk-rounded d-flex justify-content-center align-items-center">
                                <h4><a href="#" class="text-white title">Línea <br> Pedagógica</a></h4>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <ul class="list-group-flush actividades" >
                                <li class="list-group-item" v-for="(linea, k2, ii) in tipo.lineas">
                                    <a :href="'{{url('/lineas')}}'+ '/' + linea.id" class="text-dark">@{{linea.nombre}}</a> 
                                </li>
                            </ul>
                        </div>
                        {{-- <div class="col-md-5" v-if="i > 3">
                            <ul class="list-group-flush actividades">
                                <li class="list-group-item" v-text="linea.nombre"></li>                                
                            </ul>
                        </div>                     --}}
                    </div>
                </div>
                <div v-else-if="tipo.nombre == 'turistica'" class="mt-2">
                    <div class="row">
                        <div class="col-md-2 text-center d-flex justify-content-center">
                            <div class="lk-rounded d-flex justify-content-center align-items-center">
                                <h4><a href="#" class="text-white title">Línea <br> Turistica</a></h4>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <ul class="list-group-flush actividades">
                                <li class="list-group-item" v-for="(linea, k2, ii) in tipo.lineas"> 
                                    <a :href="'{{url('/lineas')}}'+ '/' + linea.id" class="text-dark">@{{linea.nombre}}</a> 
                                </li>
                            </ul>
                        </div>
                        {{-- <div class="col-md-5" v-if="i > 3">
                            <ul class="list-group-flush actividades">
                                <li class="list-group-item" v-text="linea.nombre"></li>                                
                            </ul>
                        </div>                     --}}
                    </div>
                </div>
                <div v-else-if="tipo.nombre == 'viajera'" class="mt-2">
                    <div class="row">
                        <div class="col-md-2 text-center d-flex justify-content-center">
                            <div class="lk-rounded d-flex justify-content-center align-items-center">
                                <h4><a href="#" class="text-white title">Línea <br> Viajera</a></h4>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <ul class="list-group-flush actividades">
                                <li class="list-group-item" v-for="(linea, k2, ii) in tipo.lineas"> 
                                    <a :href="'{{url('/lineas')}}'+ '/' + linea.id" class="text-dark">@{{linea.nombre}}</a> 
                                </li>
                            </ul>
                        </div>
                        {{-- <div class="col-md-5" v-if="i > 3">
                            <ul class="list-group-flush actividades">
                                <li class="list-group-item" v-text="linea.nombre"></li>                                
                            </ul>
                        </div>                     --}}
                    </div>
                </div>
            </div>          
        </div>  -->  
    </div>
    <script src="{{ asset('js/controller/lineas.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            //hover línea 0
            $("#linea").mouseover(function(){
                $("#linea").css("background-color", "#A1CBCC");
  	        });
            $("#linea").mouseout(function(){
                $("#linea").css("background-color", "#FFFFFF");
            });
            //hover línea 1
            $("#linea1").mouseover(function(){
                $("#linea1").css("background-color", "#A1CBCC");
  	        });
            $("#linea1").mouseout(function(){
                $("#linea1").css("background-color", "#FFFFFF");
            });
            //hover línea 2
            $("#linea2").mouseover(function(){
                $("#linea2").css("background-color", "#A1CBCC");
  	        });
            $("#linea2").mouseout(function(){
                $("#linea2").css("background-color", "#FFFFFF");
            });
        });
    </script>
@endsection 
