@extends('template')

@section('title')
	<title>Login</title>
@endsection

@section('contenu')
	<section id="login">
		<h1 id="titlelogin">Vous connecter</h1>
		{!! Form::open(['url' => 'login', 'id' => 'loginForm']) !!}
			{!! Form::label('email', 'Entrer votre Email :') !!}
			{!! Form::email('email', null , array('autocomplete' => 'off', 'id' => 'emailSignup', 'placeholder' => 'Votre email', 'spellcheck' => 'false')) !!}
			{!! Form::label('password', 'Mot de passe :') !!}
       		<input type="password" name="password" id='password'>
       		{!! $errors->first('email','<p class="help">:message</p>') !!}
       		{!! $errors->first('password','<p class="help">:message</p>') !!}
       		{!! Form::submit('S\'inscrire !', ['id' => 'submitSignup']) !!}
		{!! Form::close() !!}
	</section>
@endsection