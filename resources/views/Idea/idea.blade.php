@extends('template')

@section('title')
<title>Boîtes à idées</title>
@endsection

@section('contenu')
	<section id="ideaGroup">
		<h1 id="ideaTittle">Boîtes à idées</h1>
		<?php
		if(empty(session('email'))){
		?>
			<a href="login" class="redirectLogin"><p class="connectNeed">Veuillez-vous connecter !</p></a>
        <?php
		}
		else{
		?>
			<a href="writeidea" id="addIdea">Ajouter un évenement</a>
		<?php
		}
		?>
		<article id="ideaBox">
			<h1 id="ideaSecondTittle">Liste des idées proposées</h1>
			<!-- ajouter la liste des évenements -->
			<?php
			if(empty(session('email'))){
			?>
				<a href="login" class="redirectLogin"><p class="connectNeed">Veuillez-vous connecter !</p></a>
            <?php
			}
			else{
			?>
				<div id="ideaContent">
					@foreach ($idea as $idea)
						@if($idea->nom != null)
							<article class="ideaListAll">
								<h2 class="titleIdeaList"><?php echo $idea->nom; ?></h2>
								<?php echo"<img src='" . $idea->image . "' alt='pictureIdea' class='picturesIdea'>"; ?>
								<p class="descriptionIdea"><?php echo $idea->description; ?></p>
								<div class="barLike">
									<a href="idea/<?php echo $idea->ID_idee_table ?>"><img src="fonts/pictures/like.png" alt="pictureLike" class="likePicture"></a>
									<p class="vote"><?php echo $idea->vote; ?>
									</p>
								</div>
							</article>
						@endif
					@endforeach
				</div>
			<?php
			}
			?>
		</article>
	</section>
@endsection