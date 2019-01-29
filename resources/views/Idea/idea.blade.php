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
			<a href="login" class="redirectLogin fontRes"><p class="connectNeed">Veuillez-vous connecter !</p></a>
        <?php
		}
		else{
		?>
			<a href="writeidea" id="addIdea" class="fontRes">Ajouter un évenement</a>
		<?php
		}
		?>
		<article id="ideaBox">
			<h1 id="ideaSecondTittle">Liste des idées proposées</h1>
			<!-- Add events lists -->
			<?php
			if(empty(session('email'))){
			?>
				<a href="login" class="redirectLogin"><p class="connectNeed fontRes">Veuillez-vous connecter !</p></a>
            <?php
			}
			else{
			?>
				<div id="ideaContent">
					<!-- We create an article foreach idea present in the database -->
					@foreach ($idea as $idea)
						@if($idea->nom != null)
							<article class="ideaListAll">
								<h2 class="titleIdeaList"><?php echo $idea->nom; ?></h2>
								<?php echo"<img src='" . $idea->image . "' alt='pictureIdea' class='picturesIdea'>"; ?>
								<p class="descriptionIdea fontRes"><?php echo $idea->description; ?></p>
								<div class="barLike">
									<a href="idea/<?php echo $idea->ID_idee_table ?>"><img src="fonts/pictures/like.png" alt="pictureLike" class="likePicture"></a>
									<p class="vote"><?php echo $idea->vote; ?>
									</p>
								</div>
								<!-- If the user is an admin, then we add the control panel -->
								<div class="adminPanel">
									<?php
									if (session('role') == 'admin') {
									?>
										<a href="idea/delete/<?php echo $idea->ID_idee_table ?>" class="linkDeleteIdea"><p class="deleteIdea fontRes">SUPRIMMER</p></a>
										<a href="idea/add/event/<?php echo $idea->ID_idee_table ?>" class="linkAddIdeaToEvent"><img src="{{url('fonts/pictures/add.png')}}" alt="ajouter" class="addIdeaToEvent"></a>
									<?php
									}
									else if (session('role') == 'cesi') {
									?>
										<a href="idea/signal/<?php echo $idea->ID_idee_table ?>" class="linkDeleteIdea"><p class="deleteIdea">SIGNALER</p></a>
									<?php		
									}
									?>
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