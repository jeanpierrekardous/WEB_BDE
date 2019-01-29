@extends('template')

@section('title')
	<title>Évenements</title>
@endsection

@section('contenu')
	<section id="eventGroup">
		<?php
			if(session('role') == 'admin'){
		?>
			<h2 class="titleAddEventAdmin">Ajouter un évènement</h2>
			{!! Form::open(['url' => $_SERVER["REQUEST_URI"], 'id' => 'loginForm']) !!}
				{!! Form::label('nameEvents', 'Nom de l\'événement :') !!}
		   		{!! Form::text('nameEvents', null , array('required' => 'required', 'id' => 'subject')) !!}
		   		{!! Form::label('description', 'description de l\'événement :') !!}
		   		{!! Form::textarea('description', null , array('required' => 'required', 'id' => 'contactMessage')) !!}
		   		<!-- If there is a error because there is no respect for the conditions -->
				{!! Form::label('date', 'date (AAAA-MM-JJ) :') !!}
				{!! Form::text('date', null , array('autocomplete' => 'off', 'id' => 'dateEvent', 'spellcheck' => 'false')) !!}
				{!! Form::label('type', 'Gratuit ou Payant :') !!}
				{!! Form::text('type', null , array('autocomplete' => 'off', 'id' => 'typeFreeOrPay', 'spellcheck' => 'false')) !!}
				{!! Form::label('freq', 'Fréquence :') !!}
				{!! Form::text('freq', null , array('autocomplete' => 'off', 'id' => 'typeFreq', 'spellcheck' => 'false')) !!}
				{!! Form::label('image', 'Photos :') !!}
		   		{!! Form::file('image', ['id' => 'filesFormuleText']) !!}
	       		{!! $errors->first('date','<p class="help">:message</p>') !!}
	       		<!-- It's a message who appeared if you enter an unvalide password -->
	       		{!! $errors->first('type','<p class="help">:message</p>') !!}
	       		{!! $errors->first('nameEvents','<p class="help">:message</p>') !!}
       			{!! $errors->first('description','<p class="help">:message</p>') !!}
       			{!! $errors->first('image','<p class="help">:message</p>') !!}
       			{!! $errors->first('freq','<p class="help">:message</p>') !!}
	       		<!-- Create a buttom to send all information write in fields create before -->
	       		{!! Form::submit('Se connecter !', ['id' => 'submitSignup']) !!}
	       	<!-- We close the form -->
			{!! Form::close() !!}
		<?php
		}
		?>
		<h2 id="eventTittle">Événements prévus</h2>
		<?php
			if(empty(session('email'))){
		?>
			<a href="login" class="redirectLogin"><p class="connectNeed">
			Veuillez-vous connecter !</p></a>
		<?php
		}
		else{
		?>
			<section id="flexEvent">
				@foreach($resultEvents as $resultEvents)
					@if($resultEvents->nom != null)
						<article class="eventListAll">
							<a href="events/<?php echo $resultEvents->ID_evenement_officiel; ?>" class="linkEvents">
							<h2 class="titleEvents"><?php echo $resultEvents->nom; ?></h2>
							<?php echo"<img src='" . $resultEvents->basePhoto . "' alt='pictureEvent' class='picturesEvent'>"; ?>
							<p class="descriptionEvent">
								<?php echo $resultEvents->description; ?>
							</p>
							<p class="dateEvent">
								Date de l'évènement : <br><br> 
								<?php echo $resultEvents->date; ?>
							</p>
							<p class="freeEvent">
								Évènement : 
								<?php echo $resultEvents->type; ?>
							</p>
							<p class="frequencyEvent">
								Fréquence :
								<?php echo $resultEvents->frequence; ?>
							</p>
							</a>
							<?php $compte = 0; ?>
							@foreach($resultSignupEvent as $resultSignupEvents)
								@if(($resultSignupEvents->IDEvent == $resultEvents->ID_evenement_officiel) && ($resultSignupEvents->IDInscription == session('iduser')))
									<?php $compte = 1; ?>
								@endif
							@endforeach
							<?php
							if ($compte == 1) {
							?>
								<p class="signuptoeventalready">Déjà Inscrit</p>
							<?php
							}
							else{
							?>
								<a href="signup/events/<?php echo $resultEvents->ID_evenement_officiel; ?>" class="linkSignupEvents">
									<p class="signuptoevent">S'inscrire</p>
								</a>
							<?php
							}
							if (session('role') == 'admin') {
							?>
								<a href="{{url('events/delete/' . $resultEvents->ID_evenement_officiel)}}" class="linkDeleteEventOne"><p class="deleteEvent">SUPRIMMER</p></a>
							<?php
							}
							else if(session('role') == 'cesi'){
							?>
								<a href="{{url('events/signal/' . $resultEvents->ID_evenement_officiel)}}" class="linkDeleteEventOne"><p class="deleteEvent">SIGNALER</p></a>
							<?php
							}
							?>
						</article>
					@endif
				@endforeach
			</section>
		<?php
		}
		?>
	</section>
@endsection