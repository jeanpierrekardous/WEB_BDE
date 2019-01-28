@extends('template')

@section('title')
<title>Informations</title>
@endsection

@section('contenu')
	<section id="infoGroup">
		<h2 id="infoTittle">Bureau des élèves</h2>
		<!-- Here, there are information about us, which activities and where we are situated -->
		<article class="infoSize">
			<h2 class="secondTittle">Qui sommes-nous ?</h2>
			<p class="infoTexte">Le BDE est un groupe de plusieurs étudiants de la première à la dernière année qui se rassemble régulièrement afin de proposer à ces derniers diverses activités. Ces derniers peuvent être proposés par les élèves dans la boîte à idées qui seront par la suite votées. <br />Une fois votée, c'est au BDE de mettre en place l'événement.</p>
		</article>
		<article class="infoSize">
			<h2 class="secondTittle">Quelles activités pouvons nous proposer ? </h2>
			<ul class="infoDot">
				<li>Soirée étudiante</li>
				<li>Voyages organisés</li>
				<li>Échanges par correspondance</li>
				<li>Tournoi sportif</li>
				<li>Diverses activités secondaires</li>
			</ul>
			<p class="infoTexte">Les membres du BDE sont élus à chaque début d'année scolaire par les étudiants afin de les représenter au cours de l'année.</p>
		</article>
		<article class="infoSize">
			<h2 class="secondTittle">Qui sont les membres ? </h2>
			<ul class="infoDot">
				<li>Belin Paul - Président</li>
				<li>Victor Lerivray - Vice-président </li>
				<li>Tiffany Besançon - Trésorière </li>
				<li>Christelle Fotso - Secrétaire</li>
				<li>Rawan Abdelsalam - Responsable événement</li>
				<li>Benjamin Mollon - Responsable communication</li>
			</ul>
		</article>
		<article class="infoSize">
			<h2 class="secondTittle">Où nous trouver ? </h2>
			<p class="infoTexte"><i class="fas fa-map-marked"></i>19 Avenue Guy de Collongue 69130 Écully.</p>
			<!-- api map -->
		</article>
	</section>
	<script type="text/javascript" src="{{url('nodeJs/nodeServeur.js')}}">;(function map</script>
@endsection
