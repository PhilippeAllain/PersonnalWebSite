<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon super site</title>
    </head>
<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
if (!isset($_COOKIE['pseudo'])) {
	$cookiePseudo = '';
}
else {
	$cookiePseudo = $_COOKIE['pseudo'];
}


$messagesParPage=10;
$TotalMessagesReq=$bdd->query('SELECT id FROM chat');
$TotalMessages = $TotalMessagesReq -> rowCount();
$pagesTotales  = ceil($TotalMessages/$messagesParPage);

if (isset($_GET['page']) AND (!empty($_GET['page'])) AND $_GET['page'] > 0 AND $_GET['page'] <= $pagesTotales){
	$_GET['page']= intval($_GET['page']);
	$pageCourante=$_GET['page'];
}
else
{
	$pageCourante=1;
}

$depart = ($pageCourante-1)*$messagesParPage;

?>
    <body>
        <form action="minichat.php" method="post" onsubmit="setTimeout(function () { window.location.reload(); }, 10)">
            <p>
            <label for ='pseudo'>Pseudo : <input type="text" name="pseudo" id="pseudo" value = <?php echo $cookiePseudo; ?>></label><br />
            <label for = 'message_chat'>Message : <input type="text" name="message_chat" id="message_chat"/></label><br />
            <input type="submit" value="Envoyer" />
            </p>
        </form>
<?php 
$req = $bdd->prepare('SELECT pseudo, message, DATE_FORMAT(date_message, "%H:%i") AS heure FROM chat order by id desc limit '.$depart.' , ' .$messagesParPage) or die(print_r($bdd->errorInfo()));
$req->execute(array('pseudo', 'message', 'heure'));   

while ($donnees = $req->fetch())
{
    echo  '<p> '. htmlspecialchars($donnees['heure']).' <strong>'. htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
}

$req->closeCursor();

if (isset($_POST["pseudo"]) && isset($_POST["message_chat"])) {
$pseudo = $_POST["pseudo"];
$message_chat = $_POST["message_chat"];
$post = $bdd->prepare('INSERT INTO chat(pseudo, message, date_message) VALUES(:pseudo, :message, NOW())')or die(print_r($bdd->errorInfo()));
$post->execute(array(
	'pseudo' => $pseudo,
	'message' => $message_chat,
	)) ;
setcookie('pseudo', $_POST['pseudo'], time() + 365*24*3600, null, null, false, true);
}
else
{
}

for ($i=1; $i<=$pagesTotales; $i++)
if ($i == $pageCourante)
{
	echo $i.' ';
}
else
{
	echo '<a href=minichat.php?page=' .$i.'>'.$i.'</a> ';
}
?>
</body>
</html>