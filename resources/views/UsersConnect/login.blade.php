@extends('template')

@section('title')
	<title>Login</title>
@endsection

@section('contenu')
	<section id="login">
		<h2 id="titlelogin">Vous connecter</h2>
		<!-- We open the form to start the connexion between the visitor and the web site -->
		{!! Form::open(['url' => 'login', 'id' => 'loginForm']) !!}
			<!-- We introduce the label email who have a link with the database -->
			{!! Form::label('email', 'Rentrer votre email :') !!}
			{!! Form::email('email', null , array('autocomplete' => 'off', 'id' => 'emailSignup', 'placeholder' => 'Votre email', 'spellcheck' => 'false')) !!}
			<!-- We introduce the label password who have a link with the database-->
			{!! Form::label('password', 'Mot de passe :') !!}
			<!-- We create the field where we can write the password-->
       		<input type="password" name="password" id='password'>
       		<!-- It's a message who appeared if you enter a wrong email -->
       		{!! $errors->first('email','<p class="help">:message</p>') !!}
       		<!-- It's a message who appeared if you enter an unvalide password -->
       		{!! $errors->first('password','<p class="help">:message</p>') !!}
       		<!-- Create a buttom to send all information write in fields create before -->
       		{!! Form::submit('Se connecter !', ['id' => 'submitSignup']) !!}
       	<!-- We close the form -->
		{!! Form::close() !!}
	</section>
@endsection