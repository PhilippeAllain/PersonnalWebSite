<?php
session_start();

if (isset($_SESSION['id']) AND isset($_SESSION['name']))
{
    echo 'Bonjour ' . $_SESSION['name'];
}
require('viewNavBar.php');

?>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.js"></script>

<script src="js/home.js"></script>
