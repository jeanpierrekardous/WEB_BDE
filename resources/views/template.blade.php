<!DOCTYPE html>
<html lang="fr">
    <head>
    	<meta charset="utf-8">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		<link rel="shortcut icon" type="image/x-icon" href="{{url('favicon.ico')}}" />
		<!-- Link to all .css -->
		<link rel="stylesheet" type="text/css" href="{{url('css/home.css')}}">
		<link rel="stylesheet" type="text/css" href="{{url('css/general.css')}}">
		<link rel="stylesheet" type="text/css" href="{{url('css/contact.css')}}">
		<link rel="stylesheet" type="text/css" href="{{url('css/signup.css')}}">
		<link rel="stylesheet" type="text/css" href="{{url('css/info.css')}}">
		<link rel="stylesheet" type="text/css" href="{{url('css/help.css')}}">
		<link rel="stylesheet" type="text/css" href="{{url('css/legalmention.css')}}">
		<link rel="stylesheet" type="text/css" href="{{url('css/events.css')}}">
		<link rel="stylesheet" type="text/css" href="{{url('css/idea.css')}}">
		<link rel="stylesheet" type="text/css" href="{{url('css/cgv.css')}}">
		<link rel="stylesheet" type="text/css" href="{{url('css/cgu.css')}}">
		<link rel="stylesheet" type="text/css" href="{{url('css/ppd.css')}}">
		<link rel="stylesheet" type="text/css" href="{{url('css/admin.css')}}">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    	@yield('title')
    </head>
    <body id="font">
    	<!-- Header with picture, title, sub-title and the menu (login, sign up and help) -->
		<header id="headerHome">
		    <a href="{{url('/')}}"><img src="{{url('fonts/pictures/LogoBDE.png')}}" alt="logoBDE" id="logo"></a>

		    <nav id="menu">
		        <ul id="flexboxmenu">
		            <!-- Menu(login...) -->
		            <?php
					if(empty(session('email'))){
					?>
						<li><a href="{{url('login')}}">Connexion</a></li>
		            	<li><a href="{{url('signup')}}">Inscription</a></li>
		            <?php
					}
					else{
						if (session('role')=='admin') {
						?>
							<li><a href="{{url('admin')}}">Admin</a></li>
						<?php
						}
					?>
						<li id="welcome">Bonjour <?php echo session('name'); ?> !</li>
						<li><a href="{{url('logout')}}">Déconnexion</a></li>
					<?php
					}
					?>
		            <li><a href="{{url('help')}}">Aide <i class="fas fa-question-circle"></i></a></li>
		        </ul>
		        <ul id="hamberger">
					<li>&nbsp;</li>
					<li>&nbsp;</li>
					<li>&nbsp;</li>
				</ul>
				<ul id="flexboxmenuResponsive">
		            <!-- Menu(login...) -->
		            <?php
					if(empty(session('email'))){
					?>
						<li id="connexionBurger"><a href="{{url('login')}}">Connexion</a></li>
		            	<li id="inscriptionBurger"><a href="{{url('signup')}}">Inscription</a></li>
		            <?php
					}
					else{
						if (session('role')=='admin') {
						?>
							<li id="adminBurger"><a href="{{url('admin')}}">Admin</a></li>
						<?php
						}
					?>
						<li id="welcomeBurger">Bonjour <?php echo session('name'); ?> !</li>
						<li id="deconnecionBurger"><a href="{{url('logout')}}">Déconnexion</a></li>
					<?php
					}
					?>
		            <li id="helpBurger"><a href="{{url('help')}}">Aide <i class="fas fa-question-circle"></i></a></li>
		        </ul>
		    </nav>
		    <!-- title and sub-title -->
		    <div id="titlePresentation">
		        <h1 id="titleBurger">Bureau des élèves</h1>
		        <h2 id="secondTitleBurger">Site événementiel du CESI avec une boutique en ligne</h2>
		    </div>
		</header>
    	<!-- The main components of our home page in our website are in this following section -->
    	<section id="body">
    		<!-- It's the menu on the left of the page -->
			<nav id="band">
			    <!-- In the following section there are the name of the menu like CCONTACT, EVENEMENT... With the little picture on the left of the name  -->
			    <ul>
			        <li ><a href="{{url('info')}}" id="informationBurger"><i class="fas fa-info"></i> INFORMATIONS</a></li>
			        <li ><a href="{{url('idea')}}" id="ideaBurger"><i class="far fa-lightbulb"></i> BOITE A IDEES</a></li>
			        <li><a href="{{url('events')}}" id="évenementBurger"><i class="far fa-calendar-alt"></i> &Eacute;VENEMENTS</a></li>
			        <li ><a href="{{url('shop')}}" id="boutiqueBurger"><i class="fas fa-shopping-cart"></i> BOUTIQUE</a></li>
			        <li id="bodermake"><a href="{{url('contact')}}" id="contactBurger"><i class="fas fa-envelope"></i> CONTACT</a></li>
			    </ul>
			    <!-- Here, it's the link to facebook, youtube and instagram in order to follow the CESI and the BDE -->
			    <div id="headerLink">
			        <p class="second" id="paragrapheBurger">Retrouvez-nous&nbsp;sur&nbsp;:</p>
			        <div id="image">
			            <a href="https://www.facebook.com/BDECesiLyon/" target="_Blank">
			                <img src="{{url('fonts/pictures/logo_facebook.PNG')}}" alt="logo_facebook">
			            </a>
			            <a href="https://www.youtube.com/channel/UCWanyqUivV6rjbTABGFI8pA" target="_Blank">
			                <img src="{{url('fonts/pictures/logo_yt.PNG')}}" alt="logo_yt">
			            </a>
			            <a href="https://www.instagram.com/campus_cesi/?hl=fr" target="_Blank">
			                <img src="{{url('fonts/pictures/logo_insta.PNG')}}" alt="logo_insta">
			            </a>
			        </div>
			    </div>
			</nav>
    		@yield('contenu')
    	</section>
		<!-- Footer with the legal mentions, the phone number if you have problems and the copyright -->
		<footer id="footerHome">
			<select name="rightBurger" id="doobleCheeseBurger" onchange="tripleCheeseBurger(this.value);">
				<option value="copyright"> Copyright 2019 © BDE cesi Lyon | Tous droits réservés</option>
	           <option value="CGV">Condition générale de vente</option>
	           <option value="CGU">
		        Conditions générales d'utilisation</option>
	           <option value="legalMention">Mentions légales</option>
	           <option value="PPD">Politique de protection des données</option>
       		</select>
			    <a href="{{url('CGV')}}" class="legalMention"><p class="information_legal disparition">
			       Condition générale de vente
			    </p></a> 
			    <p class="delimitor disparition">
			        &nbsp;
			    </p>
			     <a href="{{url('CGU')}}" class="legalMention"><p class="information_legal disparition">
			        Conditions générales d'utilisation
			    </p></a>
			    <p class="delimitor disparition">
			        &nbsp;
			    </p>
			    <p class="information_legal disparition">
			        19 Avenue Guy de Collongue 69130 Ecully France <br />
			        Copyright 2019 © BDE cesi Lyon | Tous droits réservés
			    </p>
			    <p class="delimitor disparition">
			        &nbsp;
			    </p>
			    <a href="{{url('right')}}" class="legalMention disparition"><p class="information_legal">
			        Mentions légales
			    </p></a>
			     <p class="delimitor disparition">
			        &nbsp;
			    </p>
			    <a href="{{url('PPD')}}" class="legalMention disparition"><p class="information_legal">
			        Politique de protection des données
			    </p></a>
		</footer>
		<script type="text/javascript" src="{{url('js/jquery-3.3.1.min.js')}}"></script>
		<script type="text/javascript" src="{{url('js/menu.js')}}"></script>
		<script type="text/javascript" src="{{url('js/bootstrap.bundle.min.js')}}"></script>
		<script>
			function tripleCheeseBurger(value){
				switch(value){
					case "CGV":
						 window.location.href="{{url('CGV')}}";
					break;
					case "CGU":
						 window.location.href="{{url('CGU')}}";
					break;
					case "legalMention":
						 window.location.href="{{url('right')}}";
					break;
					case "PPD":
						 window.location.href="{{url('PPD')}}";
					break;
				}
			}
		</script>
    </body>
</html>