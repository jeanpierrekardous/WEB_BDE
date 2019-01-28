@extends('template')

@section('title')
	<title>Contact</title>
@endsection

@section('contenu')
	<section id="contactBDE">
		<!-- Title -->
		<h2 id="contactTittle">Nous contacter</h2>
		<!-- Open the form and add an id to the CSS file. -->
		{!! Form::open(['url' => 'contact', 'id' => 'formContact']) !!} 
			<!-- add a label 'email' with text and name for when we click on the text we go on the square. -->
			{!! Form::label('email', 'Votre adresse mail :') !!} 
			<!-- Square link with label 'email' if we write an email adress on this we send a mail with this adress mail. -->
			{!! Form::email('email', null , array('autocomplete' => 'off', 'id' => 'email', 'placeholder' => 'Votre email', 'spellcheck' => 'false', 'required' => 'required')) !!}
			<!-- add a label 'subjects' with text and name for when we click on the text we go on the square. -->
			{!! Form::label('subject', 'Objet du mail :') !!}
			<!-- Square link with label 'subject' if we write a subject  on this we send a mail with this subject. -->
        	{!! Form::text('subject', null , array('required' => 'required', 'id' => 'subject')) !!}
        	<!-- add a label 'bodies' with text and name for when we click on the text we go on the square. -->
        	{!! Form::label('bodies', 'Message :') !!}
        	<!-- Square link with label 'bodies' if we write a message on this we send a mail with this message. -->
        	{!! Form::textarea('bodies', null , array('required' => 'required', 'id' => 'contactMessage')) !!}

        	{!! $errors->first('subject','<p class="help">:message</p>') !!}
        	{!! $errors->first('bodies','<p class="help">:message</p>') !!}
        	<!-- create a button and send the mail with the information write in the square. -->
			{!! Form::submit('Envoyer !', ['id' => 'submit']) !!}
        {!! Form::close() !!}
	</section>
@endsection