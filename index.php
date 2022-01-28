<?php
session_start();
$name = $_SESSION['name'] = "Doe";
$firstname = $_SESSION['firstname'] = "John";
$age = $_SESSION['age'] = 48;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exo 172</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <a href="info.php">Info serveur</a> <br>
    <a href="info_utilisateur.php">Info Utilisateur</a> <br>
    <a href="form.php">Formulaire</a> <br>
    <a href="stockage.php">Stockage</a>

</body>
</html>