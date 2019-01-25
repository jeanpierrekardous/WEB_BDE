@extends('template')

@section('title')
	<title>Évenements</title>
@endsection

@section('contenu')
	<section id="eventGroup">
		<h1 id="eventTittle">Événements prévus</h1>
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