<?php


      $firstname = htmlspecialchars($_POST['firstname']);

            try{
              $db = new PDO('mysql:host=localhost; dbname=personnalwebsite', 'root', '');
            }
            catch(Exception $e)
            {
              die('Erreur : '.$e->getMessage());
            }

            $req = $db->prepare('INSERT INTO visitors (firstname) VALUES($firstname)');


            header('Location: loginForm.php');
