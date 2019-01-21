@extends('template')

@section('title')
	<title>Contacte</title>
@endsection

@section('contenu')
	<section id="contactBDE">
		<h1 id="contactTittle">Nous Contacter</h1>
    	<form id="mail" method="post">
        	<label for="email" >Votre adresse mail :</label><br>
        	<input type="email" name="email" required id="email"><br>
        	<label for="sujets" >sujets du mail :</label><br>
        	<textarea name="sujets" required id="subjects"></textarea><br>
        	<label for="corps" >Message :</label><br>
        	<textarea name="corps" required id="body"></textarea><br>
        	<input type="submit" id="contactValider">
    	</form>
    </section>
@endsection