
<?php

require_once(__DIR__."/../connexionBdd.php");

// TABLEAU DATE HEURE W/ SEC

print_r($_POST['content']);

$insertMessage = $pdo-> prepare("INSERT INTO messages
(idUser, ipAddress, content)
VALUES
(?, ?, ?);
");

$insertMessage -> execute ([
    $_GET['id'],
    $_SERVER['REMOTE_ADDR'],
    $_POST['content']
]);



