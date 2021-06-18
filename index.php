<?php

require_once(__DIR__."/connexionBdd.php");

include 'Sign/login.php';

include 'View/header.php';

if (isset($_GET['message'])){
    echo '<div style="padding: 17px; width: 35vw; margin-left: 30vw; background-color: #87d1d1; text-align: center; color: white;">'.$_GET['message'].'</div>'; }

?>

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
                    <div id="overflowTest">
                        <div type="text" class="users-list">
                            
                            <?php
                                $result = $pdo->prepare('SELECT * FROM users');
                                $result->execute();
                                $users = $result->fetchAll(PDO::FETCH_ASSOC);

                                foreach($users as $friend){
                                    $id = $friend['id'];
                                    echo "<p><span style='font-weight:bold;color:".$friend['avatar'].";'>".$friend['nickname']."</span></p><br>";
                                }  
                            ?>

                        </div>
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
    
                            <input type="hidden" id="idUser" style="border-radius: 20px" value="<?=$_GET['id']?>">
                            <?php } ?>
                            <div class="form-group">
                                <label for="content">Start Chatting !</label>
                                <!--- EMOJI ---->
                               
                                <textarea class="form-control" id="content" rows="3"></textarea>
                            </div>
                            <button type="submit" id="sendMsg" class="btn btn-outline-success">Send !</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php

include 'View/footer.php';

?>