@extends('template')

@section('title')
	<title>Ajouter un évènement</title>
@endsection

@section('contenu')
	<section id="flexFormulEvent">
		<h2 id="EventAddTitle">Ajouter un évènement</h2>
		{!! Form::open(['url' => $_SERVER["REQUEST_URI"], 'id' => 'loginForm']) !!}
			{!! Form::label('date', 'date (AAAA-MM-JJ) :') !!}
			{!! Form::text('date', null , array('autocomplete' => 'off', 'id' => 'dateEvent', 'spellcheck' => 'false')) !!}
			{!! Form::label('type', 'Gratuit ou Payant :') !!}
			{!! Form::text('type', null , array('autocomplete' => 'off', 'id' => 'typeFreeOrPay', 'spellcheck' => 'false')) !!}
       		{!! $errors->first('date','<p class="help">:message</p>') !!}
       		<!-- It's a message who appeared if you enter an unvalide password -->
       		{!! $errors->first('type','<p class="help">:message</p>') !!}
       		<!-- Create a buttom to send all information write in fields create before -->
       		{!! Form::submit('Se connecter !', ['id' => 'submitSignup']) !!}
       	<!-- We close the form -->
		{!! Form::close() !!}
	</section>
@endsection