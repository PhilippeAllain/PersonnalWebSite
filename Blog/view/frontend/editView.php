<?php $title = 'Modifier un commentaire.'; ?>

<?php ob_start(); ?>

<h1>Mon super blog !</h1>
<p><a href="index.php">Retour à la liste des billets</a></p>

	<h2>Voici le commentaire que vous voulez modifier.</h2>
	<div class = news>
	<h3>Auteur : <?= $comment['author'] ?> le <?= $comment['comment_date_fr'] ?></h3>
	<p>Commentaire : <?= $comment['comment'] ?></p>
	<?php $id = $comment['id']; ?>
	</div>

<form action="index.php?action=editComment&amp;id=<?= $comment['id'] ?>" method = "post">
	<div class = "news">

		<p>
		<label for="comment">Nouveau commentaire</label><br />
		<textarea name="comment" rows = "5" cols = "50"></textarea><br />
		<input type="submit" name="Modifier" />
		</p>

	</div>
</form>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>