<?php
try {
    $conn = new PDO('mysql:dbname=semaine_intensive;host=localhost', 'root', 'root');
} catch (PDOException $exception) {
    die($exception->getMessage());
}

?>


    <html>
    <head>
        <meta charset="utf-8">
        <title>Intranet v12</title>
    </head>
    <body>
    <h1> Connection </h1>

    <form action="renvoie.php" method="post">
        <input type="text" name="username" placeholder="identifiant"></br>
        <input type="password" name="password" placeholder="mot de passe"></br>
        <input type="submit" value="Se connecter" name="submit">
    </form>

    </body>
    </html>


<?php

session_start();


if(isset($_POST['submit']))  // Si le bouton s'inscrire est cliquer.


?>