@extends('template')

@section('title')
    <title>Home</title>
@endsection

@section('contenu')
    <!-- Large categorie in the middle of the website in the following section -->
    <section id="bodyprincipal">
        <!-- One article = 1 link to another page = 1 square with informations -->
        <article id="info">
            <a href="info">
                <img src="fonts/pictures/logo_info.jpg" class="picturesbody" alt="pictures_info">
                <h3 class="namecategory">Informations</h3>
            </a>
        </article>
        <article id="idea">
            <a href="idea">
                <img src="fonts/pictures/logo_idea.jpg" class="picturesbody" alt="pictures_idea">
                <h3 class="namecategory">Boîte à idées</h3>
            </a>
        </article>
        <article id="event">
            <a href="events">
                <img src="fonts/pictures/logo_event.png" class="picturesbody" alt="pictures_event">
                <h3 class="namecategory">&Eacute;venements</h3>
            </a>
        </article>
        <article id="shop">
            <a href="shop">
                <img src="fonts/pictures/logo_shop.png" class="picturesbody" alt="pictures_shop">
                <h3 class="namecategory">Boutique</h3>
            </a>
        </article>
        <article id="contact">
            <a href="contact">
                <img src="fonts/pictures/logo_contact.png" class="picturesbody" alt="pictures_contact">
                <h3 class="namecategory">Contact</h3>
            </a>
        </article>
    </section>
@endsection