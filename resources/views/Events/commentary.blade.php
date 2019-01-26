@extends('template')

@section('title')
	<title>Commentaires</title>
@endsection

@section('contenu')
	<section id="eventGroup">
		<h2 class="commentTittle">Publier un commentaire</h2>
		<?php 
		$adresse = $_SERVER['REQUEST_URI'];
		?>
		<form method="post" action="<?php echo $adresse ?>" id="formComment">
			@csrf
			{!! Form::label('bodies', 'Commentaire :') !!}
        	<!-- Square link with label 'bodies' if we write a commentary on this we add it to the database -->
        	{!! Form::textarea('bodies', null , array('required' => 'required', 'id' => 'contactMessage')) !!}
			{!! Form::submit('Envoyer !', ['id' => 'publishedButton']) !!}
		</form>
		<h2 class="commentTittle">Voici la liste des commentaires</h2>
		<div id="pictureShow">
			@foreach($linkPicture as $picture)
				<?php echo"<img src='../../" . $picture->link . "' alt='pictureEvent' class='picturesEvent'>"; ?>
			@endforeach()
		</div>
		<div id="listComment">
			@foreach($comment as $comments)
				<p class="commentAll">
					<?php echo $comments->commentaire; ?>
				</p>
			@endforeach()
		</div>
	</section>
@endsection