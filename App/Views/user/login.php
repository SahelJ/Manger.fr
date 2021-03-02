<h1>Connexion</h1>

<form class="generic-form" action="index.php?page=login" method="POST">
	<fieldset>
		<legend>Informations d'authentification</legend>
		<ul>
			<li>
				<label for="email">E-mail :</label>
				<input id="email" type="text" name="email" data-required data-name="E-mail" value="">
			</li>
			<li>
				<label for="password">Mot de passe :</label>
				<input id="password" type="password" name="password" data-required data-name="Mot de passe">
				<input type='hidden' value="603e44c670ffc0.56776637" name="token"/>
			</li>
		</ul>
	</fieldset>

	<ul>
		<li>
			<input class="button button-primary" type="submit" value="Connexion">
			<a class="button button-cancel small" href="/restaurant/index.php">Annuler</a>
		</li>
	</ul>
</form>