
<div class="card" id="cardForm">
	<div class="card-header">
		<h1 class="card-text">Formulaire d'inscription</h1>
	</div>
	<div class="card-body">
		<form id="signupForm" method="post" class="form-horizontal" role="form" action="registrationCheck.php">

			<div class="form-group row">
				<label class="col-sm-4 col-form-label" for="name">Votre Prénom</label>
				<div class="col-sm-6">
					<input type="text" class="form-control champ" id="name" name="name" placeholder="Nom/Pseudo" required />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-4 col-form-label" for="mail">Votre Email</label>
				<div class="col-sm-6">
					<input type="text" class="form-control champ" id="mail" name="mail" placeholder="Votre Email" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-4 col-form-label" for="password">Mot de passe</label>
				<div class="col-sm-6">
					<input type="password" class="form-control champ" id="password" name="password" placeholder="Mot de passe"/>
				</div>
			</div>

			<div class="form-group row">
				<div class="col-sm-9 offset-sm-4">
					<button type="submit" class="btn btn-primary" name="signup" value="signup">Validez</button>
					<button type="reset" class="btn btn-primary" value="rafraichir">Rafraîchir</button>
				</div>
			</div>
					</form>
	</div>
</div>
