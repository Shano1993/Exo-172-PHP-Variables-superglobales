<?php
session_start();

echo "Votre nom est :" . ' ' . $_SESSION['name'] .'<br>';
echo "Votre prénom est :" . ' ' . $_SESSION['firstname'] .'<br>';
echo "Vous avez :" . ' ' . $_SESSION['age'] . ' ' . 'ans' .'<br>';

?>

<a href="index.php">Acceuil</a>
