<!DOCTYPE html>
<html>
    <head lang="fr">
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
     		<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link <?= $css ?> />
    </head>

    <body>
        <?= $content ?>
        <hr>

        <footer class="container">
          <p>&copy; Philippe Frager</p>
          <p><a href="mailto:philippe.frager@wanadoo.fr">Envoyez-moi un e-mail</a></p>
        </footer>
    </body>
</html>
