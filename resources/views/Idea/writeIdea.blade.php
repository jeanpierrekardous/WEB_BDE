@extends('template')

@section('title')
	<title>WriteIdea</title>
@endsection

@section('contenu')
	<section id="contactBDE">
		<?php
		if(empty(session('email'))){
		?>
			<h1 id="connectNeedTittle">Boîtes à idées</h1>
			<a href="{{url('login')}}" class="redirectLogin"><p class="connectNeed">
			Veuillez-vous connecter !</p></a>
		<?php
		}
		else{
		?>
			<!-- Here, we create a form with name, photo, descritpion etc... -->
		    <h1 id="contactTittle">Quel est l'événement que vous souhaitez créer ?</h1>
		    <!-- Opening the form with a label -->
		    {!! Form::open(['url' => 'writeidea', 'files' => true, 'id' => 'formContact']) !!} 
		   		{!! Form::label('nameEvents', 'Nom de l\'événement :') !!}
		   		{!! Form::text('nameEvents', null , array('required' => 'required', 'id' => 'subject')) !!}
		   		{!! Form::label('description', 'description de l\'événement :') !!}
		   		{!! Form::textarea('description', null , array('required' => 'required', 'id' => 'contactMessage')) !!}
		   		{!! Form::label('image', 'Photos :') !!}
		   		{!! Form::file('image', ['id' => 'filesFormuleText']) !!}
		   		<!-- If there is a error because there is no respect for the conditions -->
		   		{!! $errors->first('nameEvents','<p class="help">:message</p>') !!}
       			{!! $errors->first('description','<p class="help">:message</p>') !!}
       			{!! $errors->first('image','<p class="help">:message</p>') !!}
       		<!-- Here, we create the submit button, to send the form -->
		   		{!! Form::submit('Proposer', ['id' => 'submit']) !!}
		   	{!! Form::close() !!}
		<?php
		}
		?>
	</section>
@endsection