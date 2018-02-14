<?php
try {
    $conn = new PDO('mysql:dbname=semaine_intensive;host=localhost', 'root', 'root');
} catch (PDOException $exception) {
    die($exception->getMessage());
}

?>
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
