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
			@foreach($resultEvents as $resultEvents)
				@if($resultEvents->nom != null)
					<article class="ideaListAll">
						<h2><?php echo $resultEvents->nom; ?></h2>
						<p>
							<?php echo $resultEvents->description; ?>
						</p>
						<p>
							<?php echo $resultEvents->date; ?>
						</p>
						<p>
							<?php echo $resultEvents->type; ?>
						</p>
						<p>
							<?php echo $resultEvents->frequence; ?>
						</p>
					</article>
				@endif
			@endforeach
		<?php
		}
		?>
	</section>
@endsection