<?php
try {
    $conn = new PDO('mysql:dbname=semaine_intensive;host=localhost', 'root', 'root');
} catch (PDOException $exception) {
    die($exception->getMessage());
}

?>
    <form  action="home.php" method="post">
        <input type="text" name="resume" size="12" placeholder="resume">
        <input type="text" name="intitule" size="12" placeholder="intule">
        <input type="text" name="competence" size="12" placeholder="competence">
        <input type="text" name="dateStart" size="12" placeholder="dateStart">
        <input type="text" name="datefinish" size="12" placeholder="datefinish">


        <input type="submit" name="submit" value="OK">
    </form>
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
    }
    ?>


<!-- a design page d'message a poster --><!-- a design page d'message a poster -->
<!-- a design page d'message a poster --><!-- a design page d'message a poster -->
<!-- a design page d'message a poster --><!-- a design page d'message a poster -->
<!-- a design page d'message a poster --><!-- a design page d'message a poster -->
