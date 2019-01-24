@extends('template')

@section('title')
	<title>WriteIdea</title>
@endsection

@section('contenu')
	<section id="contactBDE">
		    <h1 id="contactTittle">Quel est l'événement que vous souhaitez créer ?</h1>
		    {!! Form::open(['url' => 'writeidea', 'id' => 'formContact']) !!} 
		   		{!! Form::label('nameEvents', 'Nom de l\'événement :') !!}
		   		{!! Form::text('nameEvents', null , array('required' => 'required', 'id' => 'subject')) !!}
		   		{!! Form::label('description', 'description de l\'événement :') !!}
		   		{!! Form::textarea('description', null , array('required' => 'required', 'id' => 'contactMessage')) !!}
		   		{!! Form::label('picture', 'Photos :') !!}
		   		{!! Form::file('picture', ['id' => 'filesFormuleText']) !!}
		   		{!! $errors->first('nameEvents','<p class="help">:message</p>') !!}
       			{!! $errors->first('description','<p class="help">:message</p>') !!}
       			{!! $errors->first('picture','<p class="help">:message</p>') !!}
		   		{!! Form::submit('Proposer', ['id' => 'submit']) !!}
		   	{!! Form::close() !!}
	</section>
@endsection