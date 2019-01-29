@extends('template')

@section('title')
	<title>Aide</title>
@endsection

@section('contenu')
	<section id="helpGroup">
		<article class="helpSize">
			<h1 id="helpTittle">Aide</h1>
		<!-- Here, which articles are questions that users ask us -->
			<h3 class="secondTittle">Que dois-je faire si j'ai perdu mon mot de passe ? </h3> <br />
			<p class="helpTexte"> Si le mot de passe a été perdu, il suffit de nous envoyer un mail avec votre nom, prénom et la localisation du centre</p><br />
		</article>
		<article class="helpSize">
			<h3 class="secondTittle">Est-il possible de réinitialiser son mot de passe ? </h3> <br />
			<p class="helpTexte"> Oui, il est tout à fait possible de modifier son mot de passe. Pour cela, il faut nous envoyer un mail avec votre nom, prénom, localisation du centre, votre ancien et nouveau mot de passe ainsi que la raison du changement.</p>
		</article>
		<article class="helpSize">
			<h3 class="secondTittle">Est-il possible de participer à un évènement qui n'est pas organisé par son centre ?</h3> <br />
			<p class="helpTexte"> Malheureusement non, il n'est pas possible de participer à un évènement qui ne se situe pas dans son centre. Lors de la création de l'événèment il faut choisir le centre dans lequel vous voulez que l'évènement ce déroule.</p>
		</article>
		<article class="helpSize">
			<h3 class="secondTittle">Si je ferme la page Shop alors que je n'ai pas validé, le panier sera t-il sauvegardé ? </h3> <br />
			<p class="helpTexte"> Bien sûr, lorsque vous ajoutez des articles dans le panier, celui-ci sauvegarde automatiquement. Ceci signifie donc que si vous quittez la page sans valider, vous retrouverez vos articles dans le panier lors de votre prochaine connexion sur la page.</p>
		</article>
		<article class="helpSize">
			<h3 class="secondTittle">Est-il possible de se connecter avec Facebook ?</h3><br />
			<p id="lastTexte"> Malheureusement, il est impossible de se connecter avec un réseau social quel qu'il soit. Ceci est due au fait que nous voulions des informations complètes et sérieuses.</p>
		</article>
	</section>
@endsection
