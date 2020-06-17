<?php $title = 'Formulaire d\'inscription'; ?>
<?php $css ='href="css/index.css" rel="stylesheet"'; ?>
<?php $js ='<script type="text/javascript" src="js/index.js"></script>'; ?>
<?php require_once('navbarView.php'); ?>

<?php ob_start(); ?>
<!-- Le formulaire-->
<div class="container">
  <div class="row">
    <div class="col">
  <h1 class="card-text">Inscription</h1>

  <form method="post" action="model/registrationCheck.php">

    <div class="form-group row">
      <label class="col col-form-label" for="name">Votre Nom/Pseudo</label>
      <div class="col">
        <input type="text" class="form-control champ required" id="name" name="name" placeholder="Nom/Pseudo" autofocus="autofocus" required="required"/>
      </div>
    </div>

    <div class="form-group row">
      <label class="col col-form-label" for="mail">Votre Email</label>
      <div class="col">
        <input type="text" class="form-control champ required email" id="mail" name="mail" placeholder="Votre Email" />
      </div>
    </div>

    <div class="form-group row">
      <label class="col col-form-label" for="password">Mot de passe</label>
      <div class="col">
        <input type="password" class="form-control champ required" id="password" name="password" placeholder="Mot de passe" />
      </div>
    </div>

    <div class="form-group row">
      <div class="col">
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
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
