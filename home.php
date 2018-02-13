<?php
try {
    $conn = new PDO('mysql:dbname=semaine_intensive;host=localhost', 'root', 'root');
} catch (PDOException $exception) {
    die($exception->getMessage());
}

?>
    <form  action="home.php" method="post">
        <input type="text" name="resumé" size="12" placeholder="resume">
        <input type="text" name="intitulé" size="12" placeholder="intulé">
        <input type="text" name="competence" size="12" placeholder="competence">
        <input type="text" name="dateStart" size="12" placeholder="dateStart">
        <input type="text" name="datefinish" size="12" placeholder="datefinish">


        <input type="submit" name="submit" value="OK">
    </form>
    <?php

    // var_dump($_POST);

    if (!empty($_POST['submit'])) {
        $esaie = "INSERT INTO annonce (resumé, intitulé, competence, dateStart, datefinish) VALUES (?, ?, ?, ?, ?);";

        $stmt = $conn->prepare($esaie);
        $stmt->execute([
            $_POST['resumé'],
            $_POST['intitulé'],
            $_POST['competence'],
            $_POST['dateStart'],
            $_POST['datefinish']
        ]);

        var_dump($stmt);
        var_dump($esaie);
    }
    ?>
