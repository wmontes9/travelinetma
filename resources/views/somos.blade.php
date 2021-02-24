@extends("layouts.app")
@section("content")
<section class="banner-about">
    <div id="carousel-id" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-id" data-slide-to="0" class=""></li>
            <li data-target="#carousel-id" data-slide-to="1" class=""></li>
            <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item">
                <img  alt="First slide" src="{{ url('img/banner/about/1.png') }}">
                <div class="container">
                    <div class="carousel-caption">
                        <h1 style="font-size: 50px">SOBRE NOSOTROS.</h1>
                        <p></p>
                    </div>
                </div>
            </div>
           
        </div>
        <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
</section>
<br><br><br>
    <section id="content-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <p style="font-size:1.7em; color:midnightblue;">!Lo llevamos a donde sus sueños quieren llegar¡</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="shadow">
                    <h3 class="h3 text-center title pt-3 text-company-2">Quiénes somos</h3>
                    <p class="text-justify  px-4 pb-4" style="font-size:1.2em;">
                        Una Agencia de Viajes Operadora con Registro Nacional de Turismo No 20872, que ofrece varios Productos de Turismo y transporte Especial de Operación Nacional respaldado por un moderno  parque automotor con tecnología de punta.
                        <br>
                        Contamos con un sólido grupo de profesionales que operan las variadas Líneas Turísticas: Viajeras, Pedagógicas, de Peregrinación,   Parques temáticos, Vacaciones recreativas, Festividades y Eventos; analizadas y sustentadas para satisfacción de los usuarios en desarrollo del objeto social de TRAVELINE T.M.A, que es prestar servicios integrales de recepción, transporte y turismo.
                    </p>
                </div>
                <div class="shadow">
                    <h3 class="h3 text-center title pt-3 text-company-2">Misión</h3>
                    <p class="text-justify  px-4 pb-4" style="font-size:1.2em;">
                        En TRAVELINE T.M.A ofrecemos servicios de transporte y turismo, respaldados en la experiencia, integridad del talento humano y soporte tecnológico de avanzada, a nivel nacional, con el fin de dar conocer la riqueza histórica, cultural, paisajística y gastronómica, respetando y protegiendo el medio ambiente, ya que nuestro compromiso es un deber moral, social y ambiental con nuestros usuarios, manteniéndonos como líderes en el mercado.  
                    </p>
                </div>
                <div class="shadow">
                    <h3 class="h3 text-center title pt-3 text-company-2">Visión</h3>
                    <p class="text-justify px-4 pb-4" style="font-size:1.2em;">
                        TRAVELINE T.M.A estará posicionada, entre las cinco mejores organizaciones de transporte y turismo, para el 2025 en el Departamento de Boyacá.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 shadow">
                <h3 class="h3 text-center title pt-3 text-company">Historia</h3>
                <p class="text-justify px-5 pb-5" style="font-size:1.2em;">
                    A finales del año 1994, nuestro Fundador y actual Gerente, Didier Califa Vargas, trabajando en una de las empresas petroleras del país, visito algunos municipios del Departamento de Boyacá en compañía de algunos de sus compañeros en cumplimiento de un plan de recreación y turismo, a partir del cual se interesó por conocer más a fondo su cultura, su historia, su gastronomía y los bellos sitios de la región, de allí nace la idea de crear una empresa de transporte y turismo, la cual brindaría un excelente servicio a los usuarios y daría a conocer la riqueza de la región. 
                    <br>
                    La primera línea turística que ofreció TRAVELINE TMA fue el <b>“Tour Navideño”</b>, donde se visitaban las diferentes parroquias del Departamento con el aval previo de Monseñor Trujillo Arango. Inicialmente se visitaban los municipios distanciados de la ciudad de Tunja como Corrales, Busbanza, Floresta, Tibasosa, Nobsa, entre otros, el objetivo era observar los pesebres que se encontraban al interior de las parroquias, rezar la novena y al retornar del recorrido, calificar los pesebres, las parroquias y los municipios para determinar el mejor. Entre 2002 y 2003 surgieron una serie de situaciones de inseguridad en las iglesias, por lo cual, los Párrocos decidieron restringir el ingreso a ellas. Por esta razón, los pesebres salieron a las plazas públicas de los diferentes Municipios y las Alcaldías iniciaron con la decoración, a través de la iluminación sus localidades, las cuales por su arquitectura, vías de comunicación y majestuosidad se dieron a conocer con el Tour navideño.
                    <br>
                    Por la acogida y tradición que obtuvo el Tour Navideño, nuestros usuarios nos motivaron a la creación de más líneas turísticas, con destinos que permitieran conocer la geografía de la región y de sus principales atractivos. Así nacieron dos líneas más, que en un principio se llamaron <b>“Recorrido Turístico” y “Recorra y Coma”. </b>
                    <br>
                    Hoy en día, en TRAVELINE TMA contamos con las siguientes líneas turísticas: líneas viajeras, pedagógicas, de peregrinación, parques temáticos, vacaciones recreativas, festividades y eventos, además, de la línea de transporte especial con operación nacional, servicio de expresos a <b>grupos empresariales</b>, instituciones educativas como Colegios y Universidades, entidades del estado y particulares, siendo a su vez una empresa pionera en su parque automotor para la comodidad de sus usuarios.
                </p>
            </div>
        </div>
        
    </section>

    <style>
        .carousel-inner img {
            width: 100%;
            background-attachment: fixed;
            overflow: hidden;
        }

        #banner-about{
            max-height: 400px;
            overflow: hidden;
        }

        #banner-about h1{
            font-size: 410px;
        }
    </style>
@endsection