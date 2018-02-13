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
           intitulé,
           resumé,
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
                    <td><?=$row["intitulé"]?></td>
                    <td><?=$row["dateStart"]?></td>
                    <td><?=$row["datefinish"]?></td>
                </tr>
                <?php endwhile;?>
            </table>
