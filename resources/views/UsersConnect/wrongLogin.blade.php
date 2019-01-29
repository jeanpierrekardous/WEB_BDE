@extends('template')

@section('title')
	<title>Login</title>
@endsection

@section('contenu')
	<section id="login">
		<h1 id="titlelogin">Vous connecter</h1>
		<!-- return this page if there are errors during the login -->
		{!! Form::open(['url' => 'login', 'id' => 'loginForm']) !!}
			{!! Form::label('email', 'Entrer votre Email :') !!}
			{!! Form::email('email', null , array('autocomplete' => 'off', 'id' => 'emailSignup', 'placeholder' => 'Votre email', 'spellcheck' => 'false')) !!}
			{!! Form::label('password', 'Mot de passe :') !!}
       		<input type="password" name="password" id='password'>
       		{!! $errors->first('email','<p class="help">:message</p>') !!}
       		{!! $errors->first('password','<p class="help">:message</p>') !!}
       		<p class="help">
       			Erreur lors de la connexion !<br>
       			Vérifier que vous avez bien entré le bon email et le bon mot de passe
       		</p>
       		{!! Form::submit('Se connecter !', ['id' => 'submitSignup']) !!}
		{!! Form::close() !!}
	</section>
@endsection