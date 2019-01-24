@extends('template')

@section('title')
<title>Boîtes à idées</title>
@endsection

@section('contenu')
	<section id="ideaGroup">
		<h1 id="ideaTittle">Boîtes à idées</h1>
		<?php
		if(empty(session('email'))){
		?>
			<p><a href="login">Veuillez-vous connecter !</a></p>
        <?php
		}
		else{
		?>
			<a href="writeidea" id="addIdea">Ajouter un évenement</a>
		<?php
		}
		?>
		<article id="ideaBox">
			<h1 id="ideaSecondTittle">Liste des idées proposées</h1>
			<!-- ajouter la liste des évenements -->
			<?php
			if(empty(session('email'))){
			?>
				<p><a href="login">Veuillez-vous connecter !</a></p>
            <?php
			}
			else{
			?>
				
			<?php
			}
			?>
		</article>
	</section>

@endsection