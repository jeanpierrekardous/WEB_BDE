@extends('template')

@section('title')
	<link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('css/shop.css')}}">
	<title>Boutique du BDE</title>
@endsection

@section('contenu')
<section id="shopGroup">
	<h2 id="shopTittle">Boutique du BDE</h2>
	<h3 id="popularity">Articles les plus populaire</h3>
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
	<!-- We add the search bar to select our item and we add an autocompletion bar th help -->
	<div id="slideSearchBarre">
		<div id="sortBy">
			<div id="selecte">
				<p>Tier par :</p>
				<!-- Form to select the  -->
				<form method="POST" action="{{url('shop')}}" id="chooseForm">
					<select name="choose" id="choose">
						<option value="">A~Z</option>
						<option value="">Z~A</option>
					</select>
				</form>
			</div>
			<h3 id="listArticalShop">Liste des articles</h3>
			<form id="auto">
				<i class="fas fa-search-plus"></i><p>&nbsp;&nbsp;</p><input type="text" name="autocomplete" id="autocomplete">
			</form>
		</div>
	</div>
	<div id="listAllArticleShop">
		@foreach($article as $art)
			<article class="oneArticleShop">
				<h4 class="titleArticleShop"><?php echo $art->nom; ?></h4>
				<?php echo"<img src='" . $art->image . "' alt='pictureShop' class='picturesShop'>"; ?>
				<p class="miseCSS magtop">Catégorie : <?php echo $art->categorie; ?></p>
				<p class="commentArticleShop"><?php echo $art->commentaire; ?></p>
				<p class="miseCSS">Quantités : <?php echo $art->quantite; ?></p>
				<p class="miseCSS margbot">Prix : <?php echo $art->prix; ?>€</p>
				<a href="{{url('shop/' . $art->IDArticle)}}"><p class="addToPanier">Ajouter au panier</p></a>
			</article>
		@endforeach
	</div>
</section>

@endsection