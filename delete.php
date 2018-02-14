<?php
try {
    $conn = new PDO('mysql:dbname=semaine_intensive;host=localhost', 'root', 'root');
} catch (PDOException $exception) {
    die($exception->getMessage());
}

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