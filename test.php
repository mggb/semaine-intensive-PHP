

<?php
session_start();
require_once 'Conect.php';
require_once  'header_conect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/formulaire.css">
    <link rel="stylesheet" href="css/test1.css">
    <title>Poster un message</title>
</head>
<body>


<?php

$increment =" SELECT
           id,
           competence,
           intitule,
           resume,
           dateStart,
           datefinish
           FROM
            annonce
            ;";
$stmt = $conn->prepare($increment);
$stmt->execute();
?>

<h1 class="title-annonce>Toutes les annonces</h1>
<section class="container-annonce">
    <?php while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>

        <div class="header">

            <p class="licorne2"><?=$row["intitule"]?></p>
            <p class="licorne1"><?=$row["resume"]?></p>
            <p class="licorne"><?=$row["competence"]?></p>
        </div>
        <div class="footer-annonce">
            <p><?=$row["dateStart"]?></p>
            <p><?=$row["datefinish"]?></p>
        </div>
        <div class="bouton">

            <form action="modifie.php" method="post">
                <button class="edit" type="submit" name="button_modifie" value="<?=$row["id"]?>">modifie</button>

            </form>
            <form action="delete.php" method="post">
                <button class="delete" type="submit" name="delete" value="<?=$row["id"]?>">delete</button>
            </form>
        </div>
    <?php endwhile;?>
</section>
</body>
</html>
