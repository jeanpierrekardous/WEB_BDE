@extends('template')

@section('title')
	<link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('css/shop.css')}}">
	<title>Boutique du BDE</title>
@endsection

@section('contenu')
<section id="shopGroup">
	<h2 id="shopTittle">Boutique du BDE</h2>
	<!-- Add carousel for article -->
	<article id="carousel">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators listIndi">
		    	<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active clickOnSlide"></li>
		    	<li data-target="#carouselExampleIndicators" data-slide-to="1" class="clickOnSlide"></li>
		        <li data-target="#carouselExampleIndicators" data-slide-to="2" class="clickOnSlide"></li>
		    </ol>
			<div class="carousel-inner">
			    <div class="carousel-item active">
			        <img class="d-block w-100 carouImg" src="{{url('fonts/pictures/pull.jpg')}}" alt="First slide">
			    </div>
			    <div class="carousel-item">
			       	<img class="d-block w-100 carouImg" src="{{url('fonts/pictures/pomme.jpg')}}" alt="Second slide">
			    </div>
			    <div class="carousel-item carouImg">
			    <img class="d-block w-100" src="{{url('fonts/pictures/lunettes.jpg')}}" alt="Third slide">
			    </div>
			</div>
		</div>
	</article>
</section>

@endsection