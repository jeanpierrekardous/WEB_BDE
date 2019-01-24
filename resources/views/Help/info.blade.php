@extends('template')

@section('title')
<title>Informations</title>
@endsection

@section('contenu')
	<section id="infoGroup">
		<h1 id="infoTittle">Bureau des élèves</h1>
		<h2 class="secondTittle">Qui sommes-nous ?</h2>
		<p class="infoTexte">Le BDE est un groupe de plusieurs étudiants de la première à la dernière année qui se rassemble régulièrement afin de proposer à ces derniers diverses activités. Ces derniers peuvent être proposés par les élèves dans la boîte à idées qui seront par la suite votées. <br />Une fois votée, c'est au BDE de mettre en place l'événement.</p>
		<h2 class="secondTittle">Quelles activités pouvons nous proposer ? </h2>
		<ul id="infoDot">
			<li>Soirée étudiante</li>
			<li>Voyages organisés</li>
			<li>Échanges par correspondance</li>
			<li>Tournoi sportif</li>
			<li>Diverses activités secondaires</li>
		</ul>
		<p class="infoTexte">Les membres du BDE sont élus à chaque début d'année scolaire par les étudiants afin de les représenter au cours de l'année.</p>
		<h2 class="secondTittle">Qui sont les membres ? </h2>
		//Membres à rajouter//
		<h2 class="secondTittle">Où nous trouver ? </h2>
		<p class="infoTexte"><i class="fas fa-map-marked"></i>19 Avenue Guy de Collongue 69130 Écully.</p>
		<!-- api map -->
		<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=4.7644293308258066%2C45.782666911429075%2C4.766939878463746%2C45.78397439248092&amp;layer=mapnik&amp;marker=45.78332065578796%2C4.765684604644775" style="border: 1px solid black; margin-bottom: 30px;"></iframe><br/>
	</section>
@endsection