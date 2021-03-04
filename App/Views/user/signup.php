<h2><i class="fa fa-user"></i>Création d'un compte client</h2>

<form class="generic-form" action="index.php?page=registration" method="POST" name="subscr" onsubmit="return validation()">
	<fieldset>
		<legend><i class="fa fa-book"></i> Identité et coordonnées</legend>
		<ul>
			<li>
				<label for="lastName">Nom :</label>
				<input id="lastName" type="text" name="LastName" data-required data-name="Nom" value="">
				<!--input id="lastName" type="text" name="lastName" value=""-->
			</li>
			<li>
				<label for="firstName">Prénom :</label>
				<input id="firstName" type="text" name="FirstName" data-required data-name="Prénom" value="">
			</li>
			<li>
				<label for="birthDay">Date de naissance :</label>
				<input id="BirthDate" type="date" name="BirthDate" value="">	                	                	
			</li>
			<li>
				<label class="textarea" for="address">Adresse :</label>
				<textarea id="address" name="Address" rows="3" value=""></textarea>
			</li>
			<li>
				<label for="city">Ville :</label>
				<input id="city" type="text" name="City" value="">
			</li>
			<li>
				<label for="country">Pays :</label>
				<input id="country" type="text" name="Country" value="">
			</li>
			<li>
				<label for="zipCode">Code Postal :</label>
				<input id="zipCode" class="zip-code" type="text" maxlength="5" name="ZipCode" data-name="Code postal" data-type="number" value="">
			</li>
			<li>
				<label for="phone">Téléphone :</label>
				<input id="phone" class="phone" type="text" maxlength="10" name="Phone" data-name="Téléphone" data-type="number" value="">
			</li>
				<input type='hidden' value="603e451893fcf8.85869441" name="Token"/>
		</ul>
	</fieldset>
	<fieldset>
		<legend><i class="fa fa-lock"></i> Informations d'authentification</legend>
		<ul>
	        <li>
	            <label for="email">E-mail :</label>
	            <input id="email" type="text" name="Email" data-required data-name="E-mail" value="">
	        </li>
	        <li>
	            <label for="password">Mot de passe :</label>
	            <input id="password" type="password" name="Password" data-required data-name="Mot de passe" data-length="8">
	        </li>
		</ul>
	</fieldset>
	<ul>
		<li>
			<input class="button button-primary" type="submit" value="Créer le compte">
			<a class="button button-cancel small" href="/restaurant/index.php">Annuler</a>
		</li>
	</ul>
</form>

