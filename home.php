<?php
session_start();
require_once  'header_conect.php';
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



<div class="formulaire">
    <h2 class="title">Poster une annonce :</h2>

    <form  action="home.php" method="post">
        <input type="text" name="intitule" placeholder="Titre" class="annonceTitle">
        <textarea name="resume" placeholder="Description de l'annonce" rows="8" cols="60" class="annonceResume"></textarea>
        <input type="text" name="dateStart"  placeholder="Début : jj/mm/aaaa" class="dateDebut">
        <input type="text" name="datefinish" placeholder="Fin : jj/mm/aaaa" class="dateFin">
        <input type="text" name="competence" size="12" placeholder="competence">


        <input type="submit" name="submit" value="Envoyer" class="envoie">
    </form>
</div>

    <?php

    // var_dump($_POST);

    if (!empty($_POST['submit'])) {
        $esaie = "INSERT INTO annonce (resume, intitule, competence, dateStart, datefinish) VALUES (?, ?, ?, ?, ?);";

        $stmt = $conn->prepare($esaie);
        $stmt->execute([
            $_POST['resume'],
            $_POST['intitule'],
            $_POST['competence'],
            $_POST['dateStart'],
            $_POST['datefinish']
        ]);

        var_dump($stmt);
        var_dump($esaie);
        header('Location: annonce.php?id='.$conn->lastInsertId());
    }

    ?>



<!-- a design page d'message a poster --><!-- a design page d'message a poster -->
<!-- a design page d'message a poster --><!-- a design page d'message a poster -->
<!-- a design page d'message a poster --><!-- a design page d'message a poster -->
<!-- a design page d'message a poster --><!-- a design page d'message a poster -->
