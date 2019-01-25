@extends('template')

@section('title')
<title>Boîtes à idées</title>
@endsection

@section('contenu')
<!-- Return this view if there is a problem during sending data -->
	<section id="contactBDE">
		    <h1 id="contactTittle">Error</h1>
		    <article id="formContact">
		    	<p class="Center">
		    		Erreur lors de la création d'une idée pour la boite à idée veuiller réessayer ultérieurement.
		    	</p>
		    </article>
	</section>
@endsection