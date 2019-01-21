@extends('template')

@section('tittle')
	<title>Contact</title>
@endsection

@section('contenu')
	<section id="contactBDE">
		<h1 id="contactTittle">Nous contacter</h1>
		{!! Form::open(['url' => 'contact', 'id' => 'formContact']) !!}
			{!! Form::label('email', 'Votre adresse mail :') !!}
			{!! Form::email('email', null , array('autocomplete' => 'off', 'id' => 'email', 'placeholder' => 'Votre email', 'spellcheck' => 'false', 'required' => 'required')) !!}
			{!! Form::label('subject', 'Objet du mail :') !!}
        	{!! Form::text('subject', null , array('required' => 'required', 'id' => 'subject')) !!}
        	{!! Form::label('bodies', 'Message :') !!}
        	{!! Form::text('bodies', null , array('required' => 'required', 'id' => 'contactMessage')) !!}
			{!! Form::submit('Envoyer !', ['id' => 'submit']) !!}
        {!! Form::close() !!}
	</section>
@endsection