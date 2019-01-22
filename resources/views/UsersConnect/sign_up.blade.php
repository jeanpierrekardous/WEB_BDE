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
       		<input type="password" name="password" id='password'>
       		{!! Form::label('password_confirmation', 'Mot de passe :') !!}
       		<input type="password" name="password_confirmation" id='password_confirmation'>
			{!! Form::submit('S\'inscrire !', ['id' => 'submitSignup']) !!}
		{!! Form::close() !!}
	</section>
@endsection