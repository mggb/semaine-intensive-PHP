<?php
try {
    $conn = new PDO('mysql:dbname=semaine_intensive;host=localhost', 'root', 'root');
} catch (PDOException $exception) {
    die($exception->getMessage());
}

?>

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
            <table>
                <?php while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
                <tr>
                    <td><?=$row["id"]?></td>
                    <td><?=$row["competence"]?></td>
                    <td><?=$row["intitule"]?></td>
                    <td><?=$row["resume"]?></td>
                    <td><?=$row["dateStart"]?></td>
                    <td><?=$row["datefinish"]?></td>
                    <form action="modifie.php" method="post">
                        <button type="submit" name="button_modifie" value="<?=$row["id"]?>">modifie</button>

                    </form>
                    <form action="delete.php" method="post">
                        <button type="submit" name="delete" value="<?=$row["id"]?>">delete</button>
                    </form>

                </tr>
                <?php endwhile;?>
            </table>
<!-- a design page d'affichage des message --><!-- a design page des message afficher -->