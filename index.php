<?php
require_once 'Conect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/subscribe.css">
  <title>Inscription</title>
</head>
<body>
  <section class="register">

      <img class="image" src="#" alt="c'est le logo">
      <h1 class="title_subscribe"> Inscription</h1>


    <form class=" formone"method="post" action="index.php">
      <li class="input premsligne">
        <input type="text" name="nom" size="12" placeholder="nom">
        <input type="text" name="prenom" size="12" placeholder="prenom">
      </li>
      <li class="input secondligne">
        <input type="text" name="ville" size="12" placeholder="ville">
        <input type="text" name="email" size="12" placeholder="email">
      </li>
        <li class="input threeligne">
          <input type="password" name="password" size="12">
          <input type="password" name="confirmpassword" size="12">
        </li>

        <input type="submit" name="submit" value="OK">
    </form>
    <form class="formtwo" action="index.html" method="post">

    </form>
    <?php

    // var_dump($_POST);

    if (!empty($_POST['submit'])) {
        $requete = "INSERT INTO profil (prenom, nom, ville, email, password) VALUES (?, ?, ?, ?, ?);";

        $stmt = $conn->prepare($requete);
        $stmt->execute([
            $_POST['prenom'],
            $_POST['nom'],
            $_POST['ville'],
            $_POST['email'],
            $_POST['password']
        ]);

        var_dump($stmt);
    }
    ?>

  </section>

<!-- a design page d'inscription -->
  <!-- a design page d'inscription -->
  <!-- a design page d'inscription -->
  <!-- a design page d'inscription -->
  <!-- a design page d'inscription -->
  <!-- a design page d'inscription -->
  <!-- a design page d'inscription -->









</body>
</html>
