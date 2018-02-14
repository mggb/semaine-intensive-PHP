<?php
session_start();
require_once 'Conect.php';
?>




<?php
var_dump($_POST);

$delete = "DELETE FROM
`annonce`
WHERE
`id` = ?
;";
$stmt = $conn->prepare($delete);

$stmt->execute([
    $_POST['delete']
]);
header("Location: test.php");
exit;


?>