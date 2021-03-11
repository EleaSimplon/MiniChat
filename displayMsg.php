<?php

    require_once(__DIR__."/connexionBdd.php");

    $result = $pdo->prepare('SELECT nickName, avatar,
        users.id,
        messages.content,
        messages.dateHour 
        FROM users 
        JOIN messages
        ON messages.idUser = users.id
        ORDER BY messages.dateHour');

    $result->execute();
    $messages = $result->fetchAll(PDO::FETCH_ASSOC);
                            

    foreach($messages as $message){
        echo "<p><span style='font-weight:bold;color:".$message['avatar'].";'>".$message['nickName']."</span>".' ('.$message['dateHour'].') '.$message['content'].'</p><br>';
    }