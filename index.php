<?php
require_once(__DIR__."/connexionBdd.php");

include 'Sign/login.php';

if (isset($_GET['message'])){
    echo '<div style="padding: 17px; width: 35vw; margin-left: 30vw; background-color: #87d1d1; text-align: center; color: white;">'.$_GET['message'].'</div>'; }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!----- ***** BOOTSTRAP LINKS ******------>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!----- ***** GOOGLE LINKS ******------>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <!----- ***** CSS LINKS ******------>
    <link rel="stylesheet" href="/main4.css">

    <!----- ***** URL ICON LINK ******------>
    <link rel="icon" type="papillon" href="/img/papillon.png" />

    <title>Mini Chat</title>

    <!-----*** NAV BAR ***----->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">MINI CHAT</a>
            <img src="/img/papillon.png" width="40vw">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"   aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <?php 
                        if(isset($_GET['id'])){
                    ?>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php?id=<?=$_GET['id']?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about.php?id=<?=$_GET['id']?>">About🦋</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Sign/signup.php?id=<?=$_GET['id']?>">Sign Up🦋</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Sign/signin.php?id=<?=$_GET['id']?>">Log In🦋</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Sign/logout.php?id=<?=$_GET['id']?>">Log Out🦋</a>
                    </li>
                    

                    <?php }
                    else{
                    ?>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about.php">About🦋</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Sign/signup.php">Sign Up🦋</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Sign/signin.php">Log In🦋</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Sign/logout.php">Log Out🦋</a>
                    </li>

                    <?php } ?>
    
                </ul>
            </div>
        </div>
    </nav>

</head>
<body>

<!--SECTION 1 HEADER-->
<section id="header">
    <img src="/img/header2.gif" id="header">
</section>

<!--SECTION 2 CHAT-->
    <section class="chat">
        <div class="container" id="chat">
            <div class="row">
                

                <!---*** MESSAGES DU CHAT***--->
                <div class="col-8" id="messages">
                    <div class="message" id="overflowTest">

                        <?php
                            include 'displayMsg.php';
                        ?>

                    </div>
                </div>


                <!---*** USERS LIST***--->
                <div class="col-4" id="users">
    
                    <img class="img-users" src="/img/users2.png">
                    <div type="text" class="users-list">
                        
                        <?php
                            $result = $pdo->prepare('SELECT * FROM users');
                            $result->execute();
                            $users = $result->fetchAll(PDO::FETCH_ASSOC);

                            foreach($users as $friend){
                                $id = $friend['id'];
                                echo $friend['nickname']."<br>";
                            }  
                        ?>
                    </div>
                </div>

            </div>

            <!-- ENVOIE MESSAGES-->
            <div class="row align-items-center">
                <div class="col-8" id="send-content">

                    <div class="users-input">
                        <form method="POST">
                            <?php
                                if(isset($_COOKIE['cookieNickName'])){
                            ?>
                            <input type="text" style="background-color:<?=$_COOKIE['cookieColor']?>;color: black" name="nick" value="<?=$_COOKIE['cookieNickName']." "."(".$_COOKIE['cookieIp'].") "?>" disabled>

                            <?php } else{ ?>
                                <input type="text" name="nickname">
                                <?php } ?>

                            <?php 
                                if(isset($_GET['id'])){
                            ?>
                            <input type="hidden" id="idUser" value="<?=$_GET['id']?>">
                            <?php } ?>
                            <div class="form-group">
                                <label for="content">Start Chatting !🦋</label>
                                <textarea class="form-control" id="content" rows="3"></textarea>
                            </div>
                            <button type="submit" id="sendMsg" class="btn btn-outline-success">Send !</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <footer class="footer">
    <img src="img/papillon.png" width="60vw">
        <h3>Thanks for using MINI CHAT</h3>
    </footer>

    <!----- ***** BOOTSTRAP SCRIPTS ******------>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <!----- ***** JS SCRIPTS ******------>
    <script src="/main.js"></script>
</body>
</html>