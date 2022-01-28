<?php
session_start();
?>

<form action="stockage.php" method="post">
    <label for="username">Nom d'utilisateur</label>
    <input type="text" name="username" id="username">

    <label for="password">Mot de passe</label>
    <input type="password" name="password" id="password">

    <input type="submit" name="submit">
</form>
