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
    <title>Poster un message</title>
</head>






<form  action="verifie.php" method="post">

        <input type="text" value="<?=$_POST["button_modifie"]?>" name="id">
<input type="text" name="resume" size="12" placeholder="resume">
<input type="text" name="intitule" size="12" placeholder="intulé">
<input type="text" name="competence" size="12" placeholder="competence">
<input type="text" name="dateStart" size="12" placeholder="dateStart">
<input type="text" name="datefinish" size="12" placeholder="datefinish">
    <input type="submit" name="submit" value="OK">
    </form>




<?php

var_dump($_POST);

?>


<!-- a design page de modificationnnnnnnn de message --><!-- a design page de modification des message -->
