@extends('template')

@section('title')
<title>Photo des events</title>
@endsection

@section('contenu')
	<section id="eventGroup">
		<?php
		$countPictures = count($resultPictures);
		if ($countPictures == 0) {
		?>
			<h1 id="eventTittle">Il n'y a pas encore de photo</h1>
		<?php
		}
		else{
		?>
			<h1 id="eventTittle">Voici les photos poster par les participants de cet événement</h1>
			@foreach($resultPictures as $pictures)
				<article class="eventListAll">
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
		<?php
		}
		?>
	</section>
@endsection