<?php
session_start();
require_once 'Conect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/formulaire.css">
    <title>Poster un message</title>
</head>





<html>
    <head>
        <meta charset="utf-8">
        <title>Intranet v12</title>
        <link rel="stylesheet" href="css/connexion.css">
        <link rel="stylesheet" href="css/reset.css">
    </head>
    <body>
    <div class="logo">
      <img class="logo" src="imgs/logogrand.png" alt="Logo FIND DEVS">
   </div>

  <div class="container-form">

    <h1 class="titre">Connexion</h1>


       <form class="formulaire-connexion" action="renvoie.php" method="post">
          <input class="e-mail" type="email" name="username"  placeholder="Adresse E-mail">
          <input class="password" type="password" name="password"  placeholder="Mot de passe">
          <input class="login"type="submit" name="submit" value="Se connecter">
      </form>


</div>

    </body>
    </html>


<?php

session_start();


if(isset($_POST['submit']))  // Si le bouton s'inscrire est cliquer.


?>



<!-- a design page d'conection --><!-- a design page d'conection -->
<!-- a design page d'conection --><!-- a design page d'conection -->
<!-- a design page d'conection --><!-- a design page d'conection -->
