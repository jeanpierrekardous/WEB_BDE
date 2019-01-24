@extends('template')

@section('title')
	<title>WriteIdea</title>
@endsection

@section('contenu')
	<section id="contactBDE">
		    <h1 id="contactTittle">Quel est l'événement que vous souhaité créer</h1>
		    {!! Form::open(['url' => 'contact', 'id' => 'formContact']) !!} 
		   		{!! Form::label('nameEvents', 'Nom de l\'événement :') !!}
		   		{!! Form::text('nameEvents', null , array('required' => 'required', 'id' => 'subject')) !!}
		   		{!! Form::label('description', 'description de l\'évenement :') !!}
		   		{!! Form::text('description', null , array('required' => 'required', 'id' => 'contactMessage')) !!}
		   		{!! Form::label('picture', 'Photos :') !!}
		   		{!! Form::file('description', ['id' => 'files']) !!}
		   		{!! Form::submit('Proposer', ['id' => 'submit']) !!}
		   	{!! Form::close() !!}
	</section>
@endsection