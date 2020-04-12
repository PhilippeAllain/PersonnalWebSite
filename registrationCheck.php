<?php

if (isset($_POST['name']) AND $_POST['name'] !=""
  AND isset($_POST['password']) AND $_POST['password'] !=""
  AND isset($_POST['mail']) AND $_POST['mail'] !="")
    {
      $_POST['name'] = htmlspecialchars($_POST['name']);
      $_POST['password'] = htmlspecialchars($_POST['password']);
      $password =password_hash($_POST['password'], PASSWORD_DEFAULT);

      $_POST['mail']= htmlspecialchars($_POST['mail']);
        if(preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['mail']))
            {
            echo 'l\'adresse '.$_POST['mail'].' est <strong>valide</strong> !';

            try{
              $db = new PDO('mysql:host=localhost; dbname=personnalwebsite', 'root', '');
            }
            catch(Exception $e)
            {
              die('Erreur : '.$e->getMessage());
            }
            $req = $db->prepare('INSERT INTO visitors (name, mail, password, date) VALUES(?, ?, ?, NOW())');
            $req->execute(array($_POST['name'], $_POST['mail'], $password));
            header('Location: loginForm.php');
          }
          else
          {
            echo 'l\'adresse '.$_POST['mail'].' n\'est pas valide, recommencez !';
            header('Location: index.php');
          }
        }

else
{
  echo "Il faut renseigner un pseudo, un mot de passe et une adresse mail !";
  header('Location: index.php');
};
