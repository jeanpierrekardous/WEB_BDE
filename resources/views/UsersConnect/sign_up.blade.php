@extends('template')

@section('title')
	<title>Sign Up</title>
@endsection

@section('contenu')
	<section id="signup">
		<h1 id="titleSignup">Vous identifier</h1>
		{!! Form::open(['url' => 'signup', 'id' => 'signupForm']) !!}
			{!! Form::label('firstname', 'Entrer votre prénom :') !!}
			{!! Form::text('firstname', null, array('autocomplete' => 'off', 'id' => 'firstname', 'spellcheck' => 'false')) !!}
			{!! Form::label('name', 'Entrer votre nom :') !!}
			{!! Form::text('name', null, array('autocomplete' => 'off', 'id' => 'name', 'spellcheck' => 'false')) !!}
			{!! Form::label('email', 'Entrer votre Email :') !!}
			{!! Form::email('email', null , array('autocomplete' => 'off', 'id' => 'emailSignup', 'placeholder' => 'Votre email', 'spellcheck' => 'false')) !!}
			{!! Form::label('country', 'Quelle est votre centre ?') !!}
			<select name="country" id="country">
	           <option value="Lyon">Lyon</option>
	           <option value="Paris">Paris</option>
	           <option value="Strasbourg">Strasbourg</option>
	           <option value="Nice">Nice</option>
	           <option value="Nantes">Nantes</option>
       		</select>
       		{!! Form::label('password', 'Mot de passe :') !!}
       		{!! Form::label('password', '(Une Majuscule et un nombre au minimum)', array('class' => 'must')) !!}
       		<input type="password" name="password" id='password'>
       		{!! Form::label('password_confirmation', 'Vérification du mot de passe :') !!}
       		<input type="password" name="password_confirmation" id='password_confirmation'>
       		{!! $errors->first('password','<p class="help">:message</p>') !!}
       		{!! $errors->first('email','<p class="help">:message</p>') !!}
       		{!! $errors->first('name','<p class="help">:message</p>') !!}
       		{!! $errors->first('firstname','<p class="help">:message</p>') !!}
       		<?php
				$URL = $_SERVER['HTTP_REFERER'];
				if($URL == 'http://www.cesi-bde.com/signup' AND !$errors->first()){
					?>
						<p class="help">Utilisateur déjà existant</p>
					<?php
				}
			?>
			{!! Form::submit('S\'inscrire !', ['id' => 'submitSignup']) !!}
		{!! Form::close() !!}
	</section>
@endsection