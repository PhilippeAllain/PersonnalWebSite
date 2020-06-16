<?php $title = 'Formulaire d\'inscription'; ?>
<?php $css ='href="css/form.css" rel="stylesheet"'; ?>

<?php ob_start(); ?>
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
              <a class="nav-link hidden" href="img/CV_2020.pdf">Mon C.V.</a>
            </li>

            <li class="nav-item">
              <a class="nav-link hidden" id="a" href="https://www.linkedin.com/in/philippe-frager-538383108/">Linkedin</a>
            </li>

            <li class="nav-item">
              <a class="nav-link hidden" href="https://www.facebook.com/">Facebook</a>
            </li>

            <li class="nav-item">
              <a class="nav-link hidden" href="../chat/minichat.php">Chat</a>
            </li>

            <li class="nav-item">
              <a class="nav-link hidden" href="Blog/index.php">Blog</a>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle hidden" href="#" id="menuderoulant" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Mes actualités
              </a>
            <div class="dropdown-menu" aria-labelledby="menuderoulant">
              <a class="dropdown-item hidden" href="#">Livres</a>
              <a class="dropdown-item hidden" href="#">Films</a>
              <a class="dropdown-item hidden" href="#">Jeux</a>
            </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" id="login" href="view/loginForm.php">Connection</a>
            </li>
            </ul>
          </div>
      </nav>
    </div>
  </div>
</div>

<!-- Le formulaire-->
<div class="container">
  <div class="row">
    <div class="col">

<div class="card" id="cardForm">
<div class="card-header">
  <h1 class="card-text">Inscription</h1>
</div>
<div class="card-body">
  <form id="signupForm" method="post" class="form-horizontal" role="form" action="model/registrationCheck.php">

    <div class="form-group row">
      <label class="col-sm-4 col-form-label" for="name">Votre Nom/Pseudo</label>
      <div class="col-sm-6">
        <input type="text" class="form-control champ required" id="name" name="name" placeholder="Nom/Pseudo" autofocus="autofocus" required="required"/>
      </div>
    </div>

    <div class="form-group row">
      <label class="col-sm-4 col-form-label" for="mail">Votre Email</label>
      <div class="col-sm-6">
        <input type="text" class="form-control champ required email" id="mail" name="mail" placeholder="Votre Email" />
      </div>
    </div>

    <div class="form-group row">
      <label class="col-sm-4 col-form-label" for="password">Mot de passe</label>
      <div class="col-sm-6">
        <input type="password" class="form-control champ required" id="password" name="password" placeholder="Mot de passe" />
      </div>
    </div>

    <div class="form-group row">
      <div class="col-sm-9 offset-sm-4">
        <button type="submit" class="btn btn-primary" name="signup" value="signup">Validez</button>
        <button type="reset" id="raz" class="btn btn-primary" name="rafraichir" value="rafraichir">Rafraîchir</button>
      </div>
    </div>
        </form>
</div>
</div>
</div>
</div>
</div>

<script src="https://code.jquery.com/jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/index.js"></script>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
