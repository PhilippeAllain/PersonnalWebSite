<?php
echo $_POST['firstName'];

if (isset($_POST['firstName']) AND $_POST['firstName'] !="" AND isset($_POST['name']) AND $_POST['name'] !=""  AND isset($_POST['password1']) AND $_POST['password1'] !=""
 AND isset($_POST['password2']) AND $_POST['password2'] !=""
 AND isset($_POST['email']) AND $_POST['email'] !="")
{
  if($_POST['password1'] !== $_POST['password2'])
    {
      echo "Les mots de passe ne sont pas identiques !";
    }
        else
          {
            $_POST['firstName'] = htmlspecialchars($_POST['firstName']);
            $_POST['name'] = htmlspecialchars($_POST['name']);
            $_POST['password1'] = htmlspecialchars($_POST['password1']);
            $password =sha1('gz'.$_POST['password1']);
            $_POST['password2'] = htmlspecialchars($_POST['password2']);
            $_post['email']= htmlspecialchars($_POST['email']);
            if(preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email']))
            {
            echo 'l\'adresse '.$_POST['email'].' est <strong>valide</strong> !';

            try{
              $db = new PDO('mysql:host=localhost; dbname=test', 'root', '');
            }
            catch(Exception $e)
            {
              die('Erreur : '.$e->getMessage());
            }
            $req = $db->prepare('INSERT INTO members (firstName, name, password, email) VALUES(?, ?, ?,?)');
            $req->execute(array($_POST['firstName'], $_POST['name'], $password, $_POST['email']));
            echo "Le formulaire a été enregistré";
          }
          else
          {
            echo 'l\'adresse '.$_POST['email'].' n\'est pas valide, recommencez !';
            header('Location: form.php');
          }
        }
  }
else
{
  echo "Il faut renseigner un pseudo, un mot de passe et une adresse mail !";
  header('Location: form.php');
};
*/
