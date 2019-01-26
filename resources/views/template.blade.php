<!DOCTYPE html>
<html lang="fr">
    <head>
    	<meta charset="utf-8">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
		<!-- Link to all .css -->
		<link rel="stylesheet" type="text/css" href="../css/home.css">
		<link rel="stylesheet" type="text/css" href="../css/general.css">
		<link rel="stylesheet" type="text/css" href="../css/contact.css">
		<link rel="stylesheet" type="text/css" href="../css/signup.css">
		<link rel="stylesheet" type="text/css" href="../css/info.css">
		<link rel="stylesheet" type="text/css" href="../css/help.css">
		<link rel="stylesheet" type="text/css" href="../css/legalmention.css">
		<link rel="stylesheet" type="text/css" href="../css/events.css">
		<link rel="stylesheet" type="text/css" href="../css/idea.css">
		<link rel="stylesheet" type="text/css" href="../css/cgv.css">
		<link rel="stylesheet" type="text/css" href="../css/cgu.css">
		<link rel="stylesheet" type="text/css" href="../css/ppd.css">
		<link rel="stylesheet" type="text/css" href="../css/shop.css">
    	@yield('title')
    </head>
    <body id="font">
    	<!-- Header with picture, title, sub-title and the menu (login, sign up and help) -->
		<header id="headerHome">
		    <a href="/"><img src="../fonts/pictures/LogoBDE.png" alt="logoBDE" id="logo"></a>
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
		    </nav>
		    <!-- title and sub-title -->
		    <div id="titlePresentation">
		        <h1>Bureau des élèves</h1>
		        <h2>Site événementiel du CESI avec une boutique en ligne</h2>
		    </div>
		</header>
    	<!-- The main components of our home page in our website are in this following section -->
    	<section id="body">
    		<!-- It's the menu on the left of the page -->
			<nav id="band">
			    <!-- In the following section there are the name of the menu like CCONTACT, EVENEMENT... With the little picture on the left of the name  -->
			    <ul>
			        <li><a href="{{url('info')}}"><i class="fas fa-info"></i> INFORMATIONS</a></li>
			        <li><a href="{{url('idea')}}"><i class="far fa-lightbulb"></i> BOITE A IDEES</a></li>
			        <li><a href="{{url('events')}}"><i class="far fa-calendar-alt"></i> &Eacute;VENEMENTS</a></li>
			        <li><a href="{{url('shop')}}"><i class="fas fa-shopping-cart"></i> BOUTIQUE</a></li>
			        <li id="bodermake"><a href="{{url('contact')}}"><i class="fas fa-envelope"></i> CONTACT</a></li>
			    </ul>
			    <!-- Here, it's the link to facebook, youtube and instagram in order to follow the CESI and the BDE -->
			    <div id="headerLink">
			        <p class="second">Retrouvez-nous&nbsp;sur&nbsp;:</p>
			        <div id="image">
			            <a href="https://www.facebook.com/BDECesiLyon/" target="_Blank">
			                <img src="../fonts/pictures/logo_facebook.PNG" alt="logo_facebook">
			            </a>
			            <a href="https://www.youtube.com/channel/UCWanyqUivV6rjbTABGFI8pA" target="_Blank">
			                <img src="../fonts/pictures/logo_yt.PNG" alt="logo_yt">
			            </a>
			            <a href="https://www.instagram.com/campus_cesi/?hl=fr" target="_Blank">
			                <img src="../fonts/pictures/logo_insta.PNG" alt="logo_insta">
			            </a>
			        </div>
			    </div>
			</nav>
    		@yield('contenu')
    	</section>
		<!-- Footer with the legal mentions, the phone number if you have problems and the copyright -->
		<footer id="footerHome">
		    <a href="{{url('CGV')}}" id="legalMention"><p class="information_legal">
		       Condition générale de vente
		    </p></a> 
		    <p class="delimitor">
		        &nbsp;
		    </p>
		     <a href="{{url('CGU')}}" id="legalMention"><p class="information_legal">
		        Conditions générales d'utilisation
		    </p></a>
		    <p class="delimitor">
		        &nbsp;
		    </p>
		    <p class="information_legal">
		        19 Avenue Guy de Collongue 69130 Ecully France <br />
		        Copyright 2019 © BDE cesi Lyon | Tous droits réservés
		    </p>
		    <p class="delimitor">
		        &nbsp;
		    </p>
		    <a href="{{url('right')}}" id="legalMention"><p class="information_legal">
		        Mentions légales
		    </p></a>
		     <p class="delimitor">
		        &nbsp;
		    </p>
		    <a href="{{url('PPD')}}" id="legalMention"><p class="information_legal">
		        Politique de protection des données
		    </p></a>
		</footer>
    </body>
</html>