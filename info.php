<?php
session_start();
echo "Votre adresse IP " . ' '  . $_SERVER['REMOTE_ADDR'] . '<br>';
echo "Nom du serveur " . ' : ' . $_SERVER['SERVER_NAME'] . '<br>';
?>

<a href="index.php">Accueil</a>


