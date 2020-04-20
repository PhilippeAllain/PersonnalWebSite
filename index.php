 <!DOCTYPE html>
 <html>
 	<head>
 		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
 		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link href="assets/css/bootstrap.css" rel="stylesheet">
     <link href="css/form.css" rel="stylesheet" />

 		<title>Formulaire d'inscription</title>

 	</head>

 	<body>

 		<div class="container">
 			<div class="row">
 				<div class="col">
 					<nav class="navbar navbar-expand-lg navbar-light bg-light">

 						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuprincipal" aria-controls="menuprincipal" aria-expanded="false" aria-label="Toggle navigation">
 							<span class="navbar-toggler-icon"></span>
 						</button>

 						<a class="navbar-brand"><img src="img/moi_petit.jpg" id="philippe" alt="Philippe"></a>

 						<div class="collapse navbar-collapse" id="menuprincipal">
 							<ul class="navbar-nav mr-auto">

 								<li class="nav-item">
 									<a class="nav-link" href="img/CV_2020.pdf">Mon C.V.</a>
 								</li>

 								<li class="nav-item">
 									<a class="nav-link" id="a" href="https://www.linkedin.com/in/philippe-frager-538383108/">Linkedin</a>
 								</li>

 								<li class="nav-item">
 									<a class="nav-link" href="https://www.facebook.com/">Facebook</a>
 								</li>

 								<li class="nav-item">
 									<a class="nav-link" href="chat/minichat.php">Chat</a>
 								</li>

 								<li class="nav-item">
 									<a class="nav-link" href="blog.php">Blog</a>
 								</li>

 								<li class="nav-item dropdown">
 									<a class="nav-link dropdown-toggle" href="#" id="menuderoulant" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
 										Mes actualités
 									</a>
 								<div class="dropdown-menu" aria-labelledby="menuderoulant">
 									<a class="dropdown-item" href="#">Livres</a>
 									<a class="dropdown-item" href="#">Films</a>
 									<a class="dropdown-item" href="#">Jeux</a>
 								</div>
 								</li>

 								<li class="nav-item">
 									<a class="nav-link" id="login" href="loginForm.php">Connection</a>
 								</li>
 								</ul>
 							</div>
 					</nav>
 				</div>
 			</div>
 		</div>
  </div>


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

  <script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/jquery.validate.min.js"></script>
	<script src="js/index.js"></script>

</body>
</html>
