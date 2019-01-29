@extends('templateAdmin')

@section('title')
	<title>Administration</title>
@endsection

@section('contenu')
	<section id="bodyAdminHome">
		<h2 id="titleAccount">Voici la liste des comptes disponibles</h2>
		<table>
			<tr>
				<td class="cellule titleCellule">ID</td>
				<td class="cellule titleCellule">NOM</td>
				<td class="cellule titleCellule">PRENOM</td>
				<td class="cellule titleCellule">MAIL</td>
				<td class="cellule titleCellule">LOCALISATION</td>
				<td class="cellule titleCellule">MOT_DE_PASSE</td>
				<td class="cellule titleCellule">RÔLE</td>
			</tr>
			@foreach($allAccount as $account)
				<tr>
					<td class="cellule"><?php echo $account->id ?></td>
					<td class="cellule"><?php echo $account->nom ?></td>
					<td class="cellule"><?php echo $account->prenom ?></td>
					<td class="cellule"><?php echo $account->mail ?></td>
					<td class="cellule"><?php echo $account->localisation ?></td>
					<td class="cellule"><?php echo $account->mdp ?></td>
					<td class="cellule"><?php echo $account->role ?></td>
					<td class="deleteUser <?php echo $account->id ?>">Supprimer</td>
				</tr>
			@endforeach
		</table>
		<h2 id="titleAddUser">Ajouter un utilisateur</h2>
		<!-- We open the form -->
		{!! Form::open(['url' => url('admin/'), 'id' => 'signupFormAdmin']) !!}
			{!! Form::label('firstname', 'Entrer votre prénom :') !!}
			{!! Form::text('firstname', null, array('autocomplete' => 'off', 'id' => 'firstname', 'spellcheck' => 'false')) !!}
			{!! Form::label('name', 'Entrer votre nom :') !!}
			{!! Form::text('name', null, array('autocomplete' => 'off', 'id' => 'name', 'spellcheck' => 'false')) !!}
			{!! Form::label('email', 'Entrer votre Email :') !!}
			{!! Form::email('email', null , array('autocomplete' => 'off', 'id' => 'emailSignup', 'placeholder' => 'Votre email', 'spellcheck' => 'false')) !!}
			<!-- open a drop down menu with different option -->
			{!! Form::label('country', 'Quelle est votre centre ?') !!}
			<!-- Differents option we can select -->
			<select name="country" id="country">
	           <option value="Lyon">Lyon</option>
	           <option value="Paris">Paris</option>
	           <option value="Strasbourg">Strasbourg</option>
	           <option value="Nice">Nice</option>
	           <option value="Nantes">Nantes</option>
       		</select>
       		{!! Form::label('Rôle', 'Quelle est votre rôle ?') !!}
			<!-- Differents option we can select -->
			<select name="role" id="role">
	           <option value="visiteur">Visiteur</option>
	           <option value="cesi">Personel CESI</option>
	           <option value="admin">Admin</option>
       		</select>
       		{!! Form::label('password', 'Mot de passe :') !!}
       		{!! Form::label('password', '(Une Majuscule et un nombre au minimum)', array('class' => 'must')) !!}
       		<input type="password" name="password" id='password'>
       		{!! Form::label('password_confirmation', 'Vérification du mot de passe :') !!}
       		<input type="password" name="password_confirmation" id='password_confirmation'>
       		<!-- Different error who can come -->
       		{!! $errors->first('password','<p class="help">:message</p>') !!}
       		{!! $errors->first('email','<p class="help">:message</p>') !!}
       		{!! $errors->first('name','<p class="help">:message</p>') !!}
       		{!! $errors->first('firstname','<p class="help">:message</p>') !!}
       		{!! $errors->first('role','<p class="help">:message</p>') !!}
       		{!! Form::submit('S\'inscrire !', ['id' => 'submitSignupAdmin']) !!}
		{!! Form::close() !!}
	</section>
@endsection