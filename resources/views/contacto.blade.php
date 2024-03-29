@extends("layouts.app")
@section("content")
<section class="banner-contacto">
    <div id="carousel-id" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-id" data-slide-to="0" class=""></li>
            <li data-target="#carousel-id" data-slide-to="1" class=""></li>
            <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item">
                <img  alt="First slide" src="{{ url('img/contacto.jpg') }}">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>SOBRE NOSOTROS.</h1>
                        <p></p>
                    </div>
                </div>
            </div>
           
        </div>
        <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
</section>


<section id="informacion-contact">
    <div class="box">
        <div class="container">
            <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="box-part text-center" style="color: #df385d">
                            <i class="fab fa-instagram"></i>
                            <div class="title">
                                <h4>Instagram</h4>
                            </div>
                            <div class="text">
                                <span></span>
                            </div>
                            <a href="https://www.instagram.com/travelinetma/" target="_blank">Visitar</a>
                            
                         </div>
                    </div>  
                     <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="box-part text-center" style="color: #3b5998">
                            <i class="fab fa-facebook"></i>
                            <div class="title">
                                <h4>Facebook</h4>
                            </div>
                            <div class="text">
                                <span></span>
                            </div>
                            <a href="https://www.facebook.com/pg/TravelineTmaLineaViajera/posts/?ref=page_internal" target="_blank">Visitar</a>
                            
                         </div>
                    </div>  
                     <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="box-part text-center" style="color: #00acee">
                           <i class="fab fa-twitter"></i>
                            <div class="title">
                                <h4>Twitter</h4>
                            </div>
                            <div class="text">
                                <span></span>
                            </div>
                            <a href="https://twitter.com/search?q=%40ttraveline&s=08" target="_blank">Visitar</a>
                            
                         </div>
                    </div>  
                     <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="box-part text-center" style="color: #4dc247">
                            <i class="fab fa-whatsapp" aria-hidden="true"></i>
                            <div class="title">
                                <h4>Whatapp</h4>
                            </div>
                            <div class="text">
                                <span></span>
                            </div>
                            <a href="https://api.whatsapp.com/send?phone=573115182141&text=Hola%2C%20deseo%20adquirir%20mas%20informacion." target="_blank">Visitar</a>
                            
                         </div>
                    </div>             
            </div>      
        </div>
    </div>
</section>


<section id="contacto">
    <div class="container">
        <div class="row">
            
            <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3971.232002103688!2d-73.3630942852342!3d5.5325645959884175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sco!4v1618423554878!5m2!1ses!2sco" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="col-md-6">
                <form method="post" {{ route('contacto.store') }} method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                             <h3>Formulario de contacto</h3>
                        </div>
                         <div class="form-group col-md-6">
                            <input type="text" name="nombres" class="form-control" placeholder="Nombres *" value="" />
                        </div>
                         <div class="form-group col-md-6">
                            <input type="text" name="telefono" class="form-control" placeholder="Telefono" value="" />
                        </div>
                        <div class="form-group col-md-12">
                            <input type="email" name="correo" class="form-control" placeholder="Correo" value="" />
                        </div>
                        <div class="form-group col-md-12">
                            <textarea name="mensaje" class="form-control" placeholder="Mensaje" style="width: 100%; height: 150px;"></textarea>
                        </div>
                       
                        <div class="form-group col-md-12">
                            <input type="submit" name="btnSubmit" class="btnContact btn btn-success" value="Enviar" />
                        </div>
                    
                   
                        
                    </div>
                   

                    

                       

                </form>
            </div>
        </div>
    </div>

</section>
@endsection