<?php


//  Récupération de l'utilisateur et de son pass hashé
if (isset($_POST['nickname'])) {

    $nickname = $_POST['nickname'];
    
    $req = $pdo->prepare('SELECT * FROM users WHERE nickname = ?');
    
    $req->execute(array(
        $nickname));
        $resultat = $req->fetch();
        
        $id = $resultat['id'];
        
        // Comparaison du pass envoyé via le formulaire avec la base
        
        if ($resultat['nickname'] === $nickname && $resultat['password'] === $_POST['password']) {
            setcookie('cookieNickName', $resultat['nickname'],  time()+3600);
            setcookie('cookieColor', $resultat['avatar']);
            setcookie('cookieIp', $_SERVER['REMOTE_ADDR']);
            header('Location: ../index.php?message=Hello '.$nickname.' Youre connected to your account !&id='.$id.'');
            
        }
        
        else {
            header('Location: ../index.php?message=Nickname or password wrong !');
        }
}