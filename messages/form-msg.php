<?php

require_once(__DIR__."/../connexionBdd.php");

// TABLEAU DATE HEURE W/ SEC

/*
$time = getdate();
    $date = $time['mday'];
    $month = $time['mon'];
    $hour = $time['hours'];
    $minute = $time['minutes'];
    $seconde = $time['seconds'];
    $datefinal = $date.'/'.$month.' '.$hour.':'.$minute.':'.$seconde;
*/

    

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



header('Location: /index.php?id='.$_GET['id'].'');