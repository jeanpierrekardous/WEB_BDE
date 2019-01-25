@extends('template')

@section('title')
	<title>Évenements</title>
@endsection

@section('contenu')
	<section id="eventGroup">
		<h1 id="eventTittle">Événements prévus</h1>
		<?php
			if(empty(session('email'))){
		?>
			<a href="login" class="redirectLogin"><p class="connectNeed">
			Veuillez-vous connecter !</p></a>
		<?php
		}
		else{
		?>

		<?php
		}
		?>
	</section>
@endsection