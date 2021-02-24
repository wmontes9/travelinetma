<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Innexsa</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Restaurantly - v1.1.0
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-phone"></i>7422220
        <span class="d-none d-lg-inline-block"></span>
      </div>
      <!--<div class="languages">
        <ul>
          <li>En</li>
          <li><a href="#">Es</a></li>
        </ul>
      </div>-->
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">INNEXSA</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="/">Inicio</a></li>
          <li><a href="#about">Que hacemos</a></li>
          <!--<li><a href="#Blog">Blog</a></li>-->
          <li><a href="#menu">Retos</a></li>
          <li><a href="#specials">Ambientes</a></li>
          <li><a href="#events">Eventos</a></li>
          <li><a href="#gallery">Galería</a></li> 
          <li><a href="#chefs">Expertos</a></li>
          <li><a href="#contact">Contacto</a></li>
		  <!--<li class="book-a-table text-center"><a href="#book-a-table">Registrate</a></li>-->
		  	<li class="book-a-table text-center">
				<a href="#login" data-toggle="modal" class="nav-link" > Iniciar Sesión</a>
			</li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
  	<section>
		<div id="app-login" style="color: black">
			@include("auth.login")
		</div>
  	</section>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-left" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Bien<span>venido</span></h1>
          <h2>Plantea tu Reto!</h2>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Retos</a>
            <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Plantea la Solución</a>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center" data-aos="zoom-in" data-aos-delay="200">
          <a href="https://youtu.be/OB8XYJOVQ10" class="venobox play-btn" data-vbtype="video" data-autoplay="true"></a>
        </div>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="assets/img/about.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Retos de Innovación, Experiencias y Saberes por Boyacá.</h3>
            <p class="font-italic">
              Esta plataforma se enfrenta a diferentes retos que actualmente se presentan en el sector productivo
               del departamento de Boyacá, como el desarrollo de capacidades en investigación, 
               desarrollo experimental e innovación y la formulación de mecanismos para la transferencia
                y circulación de conocimiento, lo cual permita conocer, identificar, mejorar las capacidades
                 productivas y afianzar la vocación regional en busca de la productividad y competitividad,
                  así como la contribución al avance en la innovación y el desarrollo tecnológico empresarial.
            </p>
          
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Porque nosotros</h2>
          <p>Porque elegir nuestra plataforma</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <span>01</span>
              <h4>Los mejores expertos</h4>
              <p>Innexsa cuenta con los mejores expertos en cada área de conocimiento los cuales
                 están dispuestos a prestar nuestros servicios.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <span>02</span>
              <h4>Calidad en el servicio</h4>
              <p>Queremos que cada participante se sienta respaldado por la mejor tecnología e infraestructura 
                del departamento.</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="300">
              <span>03</span>
              <h4> Mejor conexión entre empresarios y expertos</h4>
              <p>Encontrará una gran oportunidad de conectividad con todo país y el mundo.</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Retos Section ======= -->
    
    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Un mundo para interactuar</h2>
          <p>Ambientes Innexsa</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-3">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-toggle="tab" href="#tab-1">Laboratorio de Audio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-2">Laboratorio MOCAB y video</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-3">Laboratorio de Render</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-4">Laboratorio de Ideación</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tab-5">Drone</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-9 mt-4 mt-lg-0">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3></h3>
                      Este cuenta con equipos de grabación para la realizacion de videos publicitarios, 
                      comerciales y documentales que sera base para la realización de la emisora de la entidad.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/audio.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3></h3>
                    <p class="font-italic"></p>
                    <p>Encontramos un estudio de grabación de video para el uso de cromac, mocap y 
                      fotogrametría para el modelamiento de personajes y esenarios en 3D con tecnología de punta.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/mocap.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3></h3>
                    <p class="font-italic"></p>
                    <p>En este podemos encontrar tecnologías de alta calidad como una impresora 3D,
                       un plotter y equipos robustos para la impresión y diseño de material publicitario
                        e informativo.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/render.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3></h3>
                    <p class="font-italic"></p>
                    <p>Cuenta con un escenario que permite la interación de la triple elice para aplicar 
                      tecnologías y metodologías e identificar, prototipar y validad productos innovadores.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/ideacion.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3></h3>
                    <p class="font-italic"></p>
                    <p>Se busca la realización de mapeo en 3D para diferentes usos: recrear escenas,
                       esenarios, etc, hacer levantamientos en 3D para la parte turistica, arquitectonica
                        y de cableado.</p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                    <img src="assets/img/drone.jpg" alt="" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Specials Section -->

    <!-- ======= Events Section ======= -->
    

    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Se parte de la Solución de </h2>
          <p> Nuestros Retos</p>
        </div>

        <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          <div class="form-row">
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Telefono (opcional)" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" name="Área" class="form-control" id="Área" placeholder="Área" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="text" class="form-control" name="Elige el reto" id="Elige el reto" placeholder="Elige el reto" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-lg-4 col-md-6 form-group">
              <input type="number" class="form-control" name="people" id="people" placeholder="# de personas que contribuyen" data-rule="minlen:1" data-msg="Please enter at least 1 chars">
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="Solución" rows="5" placeholder="Plantea aqui la Solución"></textarea>
            <div class="validate"></div>
          </div>
          <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-Solución"></div>
            <div class="sent-Solución">Gracias por contribuir a la solución.</div>
          </div>
          <div class="text-center"><button type="submit">Enviar</button></div>
        </form>

      </div>
    </section><!-- End Book A Table Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Experiencias de nuestros usuarios</h2>
          <p>Lo que están diciendo de nosotros.</p>
        </div>

        <div class="owl-carousel testimonials-carousel" data-aos="zoom-in" data-aos-delay="100">

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Estoy encantada con la plataforma, la temática y la ayuda recibida y personalizada.
               La plataformas en la nube, me he atrevido a crear un historia aplicando los conocimientos.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
            <h3>Julian Mateus</h3>
            <h4>Ceo &amp; epson</h4>
          </div>  

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              La atención ha sido de sobresaliente. Muchas gracias. 
              Ha sido difícil en algunas situaciones pero debido a a la complejidad de la empresa
               y de los retos que enfrentamos.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Acuña</h3>
            <h4>Diseñadora</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              La experiencia es fantástica logre junto con el experto innovar en la idea de negocio que tengo. 
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
            <h3>Fernanda Martinez</h3>
            <h4>Docente Universitario</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Excelente curso, tanto la estructura como la calidad de los contenidos,
               así como la experiencia y comunicación con el experto.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
            <h3>Martin Fernandez</h3>
            <h4>Independiente</h4>
          </div>

          <div class="testimonial-item">
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Lo aprendido con la plataforma ha sido de gran ayuda y la atención del tutor es inmemorable.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
            <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
            <h3>John Fredy Laso</h3>
            <h4>Ingeniero Industrial</h4>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Galaria de Fotos</h2>
          <p>Algunas Fotos de Nosotros</p>
        </div>
      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/imagen para fotos 2.JPG" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/imagen para fotos 2.JPG" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/imagen para fotos 3.JPG" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/imagen para fotos 3.JPG" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/imagen para fotos 5.JPG" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/imagen para fotos 5.JPG" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/imagen para fotos.JPG" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/imagen para fotos.JPG" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/imagen para fotos5.JPG" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/imagen para fotos5.JPG" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/imagenes para fotos 4.JPG" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/imagenes para fotos 4.JPG" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/imagen para foto7.JPG" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/imagen para foto7.JPG" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/imagen para foto8.JPG" class="venobox" data-gall="gallery-item">
                <img src="assets/img/gallery/imagen para foto8.JPG" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Mentores Section ======= -->
    <section id="chefs" class="chefs">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Nuestros Mentores</h2>
          <p>Conócelos e interactúa con ellos</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <img src="assets/img/expertos/team-image2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Carmen Cecilia Zuluaga</h4>
                  <span>Administradora de empresas</span>
                </div>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <img src="assets/img/expertos/team-image1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Jeinson Bello</h4>
                  <span>Ingeniero Industrial</span>
                </div>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
              <img src="assets/img/expertos/team-image3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Wilson Montes</h4>
                  <span>Ingeniero Electrónico</span>
                </div>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
	</section><!-- End Chefs Section -->
<!-- ======= Testimonials Section ======= -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contacto</h2>
          <p>Contáctenos</p>
        </div>
      </div>

      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6678.703606636282!2d-73.36128816282043!3d5.540167475861752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e6a7c30218d925f%3A0xb18e745be5b600aa!2sServicio%20de%20Empleo!5e0!3m2!1ses!2sco!4v1607124340193!5m2!1ses!2sco" frameborder="0" allowfullscreen>></iframe>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Dirección:</h4>
                <p>Calle 19 No 12-29, Tunja, Boyacá</p>
              </div>

              <div class="open-hours">
                <i class="icofont-clock-time icofont-rotate-90"></i>
                <h4>Horario de Atención :</h4>
                <p>
                  Lunes a Viernes:<br>
                  08:00 AM - 06:00 PM
                </p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>info@innexsa.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Teléfono:</h4>
                <p>+57 0987 446038</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">
              <div class="line"></div>
                <h3 class="text-center">Contactenos</h3>
                <form enctype="multipart/form-data" action="contact" method="POST">
                  {{csrf_field()}}			
                  <div>
                    <label for="name">Nombre y apellidos  <span class="required">*</span></label>
                    <div class="inputs form-group">
                      <input class="aweform form-control"
                        type="text" 
                        id="name" 
                        name="name" 
                        placeholder="Ingrese su nombre" 
                        value="{{ old('name')}}" 
                        required/>
                      {!! $errors -> first('name','<small>:message</small>')!!}
                    </div>  
                  </div>
                  
                  <div>
                    <label for="email">Correo electrónico<span class="required">*</span></label>
                    <div class="inputs form-group">
                      <input class="aweform form-control" type="text" id="email" name="email" placeholder="E-mail..." value="{{ old('email')}}" required />
                      {!! $errors -> first('email','<small>:message</small>')!!}
                    </div>  
                  </div>
                  
                  <div>
                    <label for="phone">Teléfono <span class="required">*</span></label>
                    <div class="inputs form-group">
                      <input class="aweform small form-control" type="text" id="phone" name="phone" placeholder="Teléfono" value="{{ old('phone')}}" required/>
                      {!! $errors -> first('phone','<small>:message</small>')!!}
                    </div>  
                  </div>
                  <div>
                    <label for="message">Mensaje <span class="required">*</span></label>
                    <div class="inputs form-group">
                      <textarea class="aweform form-control" id="message" name="message" rows="6" cols="5" placeholder="Ingrese su mensaje, solicitud o consulta" value="{{ old('message')}}" required></textarea>
                      {!! $errors -> first('message','<small>:message</small>')!!}
                    </div>  
                  </div>		
                  <div class="form-group text-center">
                    <button class="btn btn-success"><i class="fa fa-chevron-circle-right"></i> Enviar</button>   
                  </div>
                </form>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>INNEXSA</h3>
              <p>
                Calle 19 No 12-29 <br>
                Tunja, Boyacá, Colombia<br><br>
                <strong>Telefono:</strong> +57 0987 446038<br>
                <strong>Email:</strong> info@innexsa.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Enlaces Utiles</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Inicio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Acerca de Nosotros</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Servicios</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Condiciones de Servicio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Autorización de Tratamiento de datos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Política de Privacidad</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nuestros servicios</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Diseño Web</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Desarrollo Web</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Gestión de productos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Consultorías</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Noticias</h4>
            <p>Últimas noticias sobre nuestra plataforma y nuevos retos.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; INNEXSA <strong><span>Derechos</span></strong>. reservados
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
        Diseñado por <a href="https://bootstrapmade.com/">Liliana y Andres</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>