@extends('template')

@section('title')
	<title>Évenements</title>
@endsection

@section('contenu')
	<section id="events">
		<h1>Liste des évènements</h1>
		<div id="listevents">
			<article class="publication">
				<h3 class="event_title">Titre</h3>
				<img src="fonts/pictures/logo_test.png" class="test" alt="pictures_test">
			</article>
			<article class="publication">
				<h3 class="event_title">Titre</h3>	
				<img src="fonts/pictures/logo-mercedes.png" class="test" alt="test_2">
			</article>
			<article class="publication">
				<h3 class="event_title">Titre</h3>
				<img src="fonts/pictures/hitachi.png" class="test" alt="test_3">
			</article>
			<article class="publication">
				<h3 class="event_title">Titre</h3>
				<img src="fonts/pictures/nanosonde.png" class="test" alt="test_4">
			</article>
			<article class="publication">
				<h3 class="event_title">Titre</h3>
				<img src="fonts/pictures/bijuu.png" class="test" alt="test_5">
			</article>
		</div>
	</section>
@endsection