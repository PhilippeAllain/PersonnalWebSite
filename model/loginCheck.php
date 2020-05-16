<?php
//Initialisation de la session
session_start();

//Si on a reçu les données d'un formulaire
if(isset($_POST['name']) && isset($_POST['password'])){
  //On les récupère
  $name = htmlspecialchars($_POST['name']);
  $password = $_POST['password'];

  //On teste si le mot passe est valide:
  if(verification($name, $password)){
    //Le mot de passe est valide, l'utilisateur est identifié
    // On change d'identifiant de session
    session_regenerate_id();

    //On sauvegarde donc son nom dans la session
    $_SESSION['name'] = $name;
    $message = 'Vous êtes correctement identifié';
    header('Location:../view/home.php');
  } else {
    //Sinon on avertit l'utilisateur:
    $message = 'Mauvais mot de passe';
    $message .= '<a href="../view/loginForm.php">Retour</a>';
  }
} else {
  //Un des champs n'est pas rempli
  $message='Le login ou le mot de passe est vide';
  $message .= '<a href="../view/loginForm.php">Retour</a>';
}
?>
<html>
<head><title>Identification</title></head>
<body><p>
  <?php echo $message; ?>
</p></body>
</html>

<?php

function verification($name, $password) {

  //Connection SQL
  try{
    $db = new PDO('mysql:host=localhost; dbname=personnalwebsite', 'root', '');
  }
  catch(Exception $e)
  {
    die('Erreur : '.$e->getMessage());
  }
  //Requete SQL de chargement des information du compte
  $req = $db->query(sprintf("SELECT id, name, password FROM visitors WHERE name = %s",$db->quote($name)));
  $row = $req->fetch(PDO::FETCH_ASSOC);
  if (empty($row)) {
    //Aucun urilisateur trouvé en BDD avec ce login
    return false;
  }
  if (!password_verify($password, $row['password'])) {
    //la fonction password_verify() indique false
    //Cela signifie que le mot de passe saisi n'est pas identique à celui en BDD
    return false;
  }
  return true;
}
