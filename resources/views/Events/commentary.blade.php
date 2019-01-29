@extends('template')

@section('title')
	<title>Commentaires</title>
@endsection

@section('contenu')
	<section id="eventGroup">
		<!-- We check if they have a session -->
		<?php
		if(empty(session('email'))){
		?>
			<h1 id="addpicture fontRes">Ajouter une photo</h1>
			<a href="{{url('login')}}" class="redirectLogin fontRes"><p class="connectNeed">
			Veuillez-vous connecter !</p></a>
		<?php
		}
		else{
		?>
			<h2 class="commentTittle fontRes">Publier un commentaire</h2>
			<?php 
			$adresse = $_SERVER['REQUEST_URI'];
			?>
			<form method="post" action="<?php echo $adresse ?>" id="formComment">
				@csrf
				{!! Form::label('bodies', 'Commentaire :') !!}
	        	<!-- Square link with label 'bodies' if we write a commentary on this we add it to the database -->
	        	{!! Form::textarea('bodies', null , array('required' => 'required', 'id' => 'contactMessage')) !!}
	        	{!! $errors->first('bodies','<p class="help">:message</p>') !!}
				{!! Form::submit('Envoyer !', ['id' => 'publishedButton']) !!}
			</form>
			<h2 class="commentTittle fontRes">Voici la liste des commentaires</h2>
			<div id="pictureShow">
				@foreach($linkPicture as $picture)
					<?php echo"<img src='../../" . $picture->link . "' alt='pictureEvent' class='picturesEvent'>"; ?>
				@endforeach()
			</div>
			<div id="listComment">
				@foreach($comment as $comments)
				<article class="commentaryFlex">
					<p class="commentAll fontRes">
						<?php echo $comments->commentaire; ?>
					</p>
					<?php
					if (session('role') == 'admin') {
					?>
						<a href="{{url('events/comment/delete/' . $comments->IDCommentaire)}}" class="linkDeleteEvent"><p class="deleteComment">SUPRIMMER</p></a>
					<?php
					}
					else if(session('role') == 'cesi'){
					?>
						<a href="{{url('events/comment/signal/' . $comments->IDCommentaire)}}" class="linkDeleteEvent"><p class="deleteComment">SIGNALER</p></a>
					<?php
					}
					?>
				</article>
				@endforeach()
			</div>
		<?php
		}
		?>
	</section>
@endsection