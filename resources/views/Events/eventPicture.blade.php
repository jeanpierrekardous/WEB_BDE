@extends('template')

@section('title')
<title>Photo des events</title>
@endsection

@section('contenu')
	<section id="eventGroup">
		<?php
		$info = 0;
		?>
		@foreach($resultAgree as $agree)
			@if($agree->IDInscription == session('iduser'))
				<?php $info = 1; ?>
			@endif
		@endforeach
		<?php
		if ($info == 1) {
		?>
			<h1 id="addpicture">Ajouter une photo</h1>
			
			{!! Form::open(['url' => $_SERVER["REQUEST_URI"], 'files' => true, 'id' => 'formContact']) !!} 
				{!! Form::label('images', 'Photos :') !!}
		   		{!! Form::file('images', ['id' => 'filesFormule']) !!}
		   		{!! $errors->first('images','<p class="help">:message</p>') !!}
				{!! Form::submit('Envoyer !', ['id' => 'publishedButton']) !!}
			{!! Form::close() !!}
		<?php
		}
		?>
		<?php
		$countPictures = count($resultPicture);
		if ($countPictures == 0) {
		?>
			<h1 id="eventTittle">Il n'y a pas encore de photo</h1>
		<?php
		}
		else{
		?>
			<h1 id="eventTittle">Voici les photos poster par les participants de cet événement</h1>
			<div id="flexPictureOneEvent">
			@foreach($resultPicture as $pictures)
				<article class="eventListAllPicture">
					<?php echo"<img src='../" . $pictures->link . "' alt='pictureEvent' class='picturesEvent'>"; ?>
					<div class="barLikePicturesEvent">
						<a href="comment/<?php echo $pictures->IDPhotos; ?>" class="linkComment">
							<p class="comment">COMMENTER</p>
						</a>
						<div class="likeBareEvent">
							<a href="like/<?php echo $pictures->IDPhotos; ?>"><img src="../fonts/pictures/like.png" alt="pictureLike" class="likePicture"></a>
							<p class="vote"><?php echo $pictures->likes; ?>
							</p>
						</div>
					</div>
				</article>
			@endforeach
			</div>
		<?php
		}
		?>
	</section>
@endsection