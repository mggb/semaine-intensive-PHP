<?php
try {
    $conn = new PDO('mysql:dbname=semaine_intensive;host=localhost', 'root', 'root');
} catch (PDOException $exception) {
    die($exception->getMessage());
}

?>






<?php
$username = $_POST['username']; // On stock dans une variable ce qui est saisi dans le champ username.
$password = $_POST['password'];


if ((isset($_POST['username']) && !empty($_POST['username'])) && (isset($_POST['password']) && !empty($_POST['password']))) {

    $profilSql = "SELECT
              id,
              nom,
              prenom,
              email,
              ville,
              password
              FROM
              profil
              ;
              ";

    $stmt = $conn->prepare($profilSql);
    $stmt->execute();
while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    if ($row['email'] === $username && $row['password'] === $password) {
        echo "ca match fraté";
        exit;
    }
}
hearder("Location: read.php");
}

?>