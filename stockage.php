<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

setcookie('Username', $username);
setcookie('Passwonrd', $password);

echo "Votre nom d'utilisateur est " . " " . $username . "<br>";
echo "Votre mot de passe est " . " " . $password . "<br>";

?>

<a href="modif.php">Modif</a>
