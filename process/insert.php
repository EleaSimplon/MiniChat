<?php

/* ALLER CHERCHER FICHIER PDO avec CHEMIN ABSOLUT ONCE = appeler 1 seule fois */

require_once(__DIR__."/../connexionBdd.php");

/* AVATARS */
include '../RandomColor.php/src/RandomColor.php';

use \Colors\RandomColor;

$color = RandomColor::one(array('format'=>'hex'));

if (empty($_POST["nickname"])) {
    die("Missing data");
}

/* Requête préparée pour la sécuruté */

$insertStatement = $pdo-> prepare("INSERT INTO users
(mail, nickname, `password`, avatar)
VALUES
(?, ?, ?, ?);
");

$insertStatement -> execute ([
    $_POST["mail"],
    $_POST["nickname"],
    $_POST["password"],
    $color
]);

/* Chemin rediriger vers INDEX.PHP */

header('Location: /index.php?message=Your account has been created ! Please connect to chat.');