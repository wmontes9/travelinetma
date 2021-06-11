@extends("layouts.app")
@section("content") 

<section id="banner">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" >
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                 <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="title">Bienvenido</h3>
                        <p style="font-size:1.7em;">!Lo llevamos a donde sus sueños quieren llegar¡</p>
                    </div>
                    <img class="d-block w-100" alt="First slide"  style="max-height:730px;" src="{{ url('img/banner/home/slider1.jpg') }}"/>                            
                    
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" alt="First slide"  style="max-height:730px;" src="{{ url('img/banner/home/slider2.jpg') }}"/>                            
                    
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="title">Servicios de Calidad</h3>
                        <p style="font-size:1.7em;">!Lo que necesitas lo tenemos¡</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" alt="First slide"  style="max-height:730px;" src="{{ url('img/banner/home/slider4.jpg') }}"/>                            
                    
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="title">PLAYA BLANCA</h3>
                        <p style="font-size:1.7em; display: none;">!Lo que necesitas lo tenemos¡</p>
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
</section>

<section id="lineas">
    <div class="container-fluid">
        <div class="row">
                <div class="col-md-12">
                    <br>
                    <h2 class="text-center title text-company">Líneas de Servicio.</h2>
                </div>
                <div class="col-md-12 form-group">
                     <div id="myBtnContainer" class="text-center">
                          <button class="btn active" onclick="filterSelection('all')" element="0"> Todas</button>
                          @foreach ($lis_tipos as $tipo)
                              <button class="btn" onclick="filterSelection('{{ $tipo['id'] }}')" element="{{ $tipo['id'] }}"> {{ $tipo['nombre'] }}</button>
                          @endforeach
                    </div>
                </div>
                <div class="col-md-12 form-group">
                    @foreach($tipos as  $value)
                        @foreach($value['lineas'] as $index => $linea)        
                            <div class="col-md-6 col-lg-3 filterDiv  {{ $linea['pivot']['id_tipo'] }} show active" >
                                <div class="col">
                                    <div class="card">
                                       <img src="{{ asset('storage/banner/lineas')}}/{{ $linea['banner_small'] }}" class="img-thumbnail">
                                        <div class="card-body">
                                        <h5 class="card-title"><a href="{{ url('/categoria',$value['nombre']) }}?ids={{ $linea['id'] }}&linea={{ $linea['nombre'] }}">{{ $linea['nombre'] }}</a></h5>
                                        <p class="card-text">
                                           
                                        </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    @endforeach
                </div>
         </div>
    </div> 
</section>

    <div class="container-fld">   
                       
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
    <style>
        .card {
    background: #f3f3f3;
    box-shadow: 1px 1px 7px 8px #f6f6f6;
}
section#lineas .col-md-6 {
    margin: 10px 0;
}
    </style>
@endsection 
