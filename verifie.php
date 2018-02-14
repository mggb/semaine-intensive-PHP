<?php
session_start();
require_once 'Conect.php';
require_once  'header_conect.php';
?>






<?php
var_dump($_POST);
$change = "UPDATE
`annonce`
SET
`competence` = ?,
`intitule` = ?,
`resume`= ?,
`dateStart`= ?,
`datefinish`= ?
WHERE
`id` = ?
;";
$stmt = $conn->prepare($change);
$stmt->execute([
    $_POST['resume'],
    $_POST['intitule'],
    $_POST['competence'],
    $_POST['dateStart'],
    $_POST['datefinish'],
    $_POST['id']
]);

header('Location: test.php?id='.$conn->lastInsertId());
