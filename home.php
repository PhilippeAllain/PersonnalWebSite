<?php
session_start();

if (isset($_SESSION['id']) AND isset($_SESSION['name']))
{
    echo 'Bonjour ' . $_SESSION['name'];
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="css/form.css" rel="stylesheet" />

		<title>Accueil</title>

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


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>
    <script src="js/home.js"></script>

</body>
</html>
