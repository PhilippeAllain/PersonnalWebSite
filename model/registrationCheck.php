<?php

if (isset($_POST['name']) AND $_POST['name'] !=""
  AND isset($_POST['mail']) AND $_POST['mail'] !=""
  AND isset($_POST['password']) AND $_POST['password'] !=""

  )
    {
      $name = htmlspecialchars($_POST['name']);

      $_POST['password'] = htmlspecialchars($_POST['password']);
      $password =password_hash($_POST['password'], PASSWORD_DEFAULT);

      $mail= htmlspecialchars($_POST['mail']);

        if(preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['mail']))
            {
            echo 'l\'adresse '.$_POST['mail'].' est <strong>valide</strong> !';
            $mail = $_POST['mail'];
              if (verification($name, $mail)){
            $db = dbConnect();
            $req = $db->prepare('INSERT INTO visitors (name, mail, password, date) VALUES(?, ?, ?, NOW())');
            $req->execute(array($name, $mail, $password));
            header('Location: ../view/loginForm.php');
          }
          else
          {
            echo 'l\'adresse '.$_POST['mail'].' n\'est pas valide, recommencez !';
            header('Location: ../index.php');
          }
        }
      }

function dbConnect() {
  try{
    $db = new PDO('mysql:host=localhost; dbname=personnalwebsite', 'root', '');
    return $db;
  }
  catch(Exception $e)
  {
    die('Erreur : '.$e->getMessage());
  }
}

function verification($name, $mail){
  $db = dbConnect();

  //Requete SQL de chargement des informations du compte
  $req = $db->query(sprintf("SELECT id, name, mail FROM visitors WHERE name=%s", $db->quote($name)));
  $row = $req->fetch(PDO::FETCH_ASSOC);
  if(empty($row)){
      //Si aucun utilisateur trouvé en BDD
      return true;
  }
  if($mail == $row['mail']){
    header('Location: ../index.php');
  }
}
