@extends("layouts.app")
@section("content")

<section id="banner-lineas">
	<div id="carousel-id" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carousel-id" data-slide-to="0" class="active"></li>
		</ol>
		<div class="carousel-inner">
			<div class="item">
				<img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="{{ asset('storage/banner/lineas')}}/{{ $linea->image }}">
				<div class="container">
					<div class="carousel-caption">
						<h1>{{ $linea->nombre }}</h1>
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

<section id="paquetes">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="card">
          <h3>Filtre por lineas</h3>
          <select name="id_linea"></select>
        </div>
      </div>

      <div class="col-md-9">
          <div class="card">
            <div class="row">
              <div class="col-md-3">
                Lorem ipsum dolor sit amet, consectetur adipisicing, elit. Fugit saepe consequatur sit, ducimus iusto deleniti officiis aperiam veniam numquam praesentium reprehenderit quibusdam doloremque eligendi, sequi, recusandae atque reiciendis, aliquam quo.
              </div>
              <div class="col-md-9">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos enim magnam quidem iste quasi fugit? At, expedita ad earum eveniet tempore, iusto placeat sapiente temporibus harum quo quidem non nihil.
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</section>


<style>
  #paquetes{
    padding:50px 0 40px 0;
  }
</style>




@endsection