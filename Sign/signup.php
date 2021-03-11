<!DOCTYPE html>
<html lang="fr">
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
    
    <title>Sign Up !</title>

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
                        <a class="nav-link active" aria-current="page" href="../index.php?id=<?$_GET['id']?>">Home</a>
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
                        <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
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
    <section class="header2">
        <img src="/img/signup.png" id="header">
    </section>

    <!--SECTION 2 FORM-->
    <div class="container">
        <div class="row">
            <div id="form">
                <h1>Sign Up Now !</h1>
                    <form method="post" action="/process/insert.php">
                    

                    <div class="rowTab"> 
                            <div class="labels">
                                <label>* Email :</label>
                            </div>
                            <div class="rightTab">
                                <input type="text" name="mail" class="input-field" required placeholder="LelouT2O@gmail.com">
                            </div>     
                        </div>

                        <div class="rowTab">
                            <div class="labels">
                                <label for="username">* Nickname :</label>
                            </div>
                            <div class="rightTab">
                                <input type="text" name="nickname" class="input-field" required placeholder="Leloudu69">
                            </div>
                        </div>

                        <div class="rowTab"> 
                            <div class="labels">
                               <label>* Password (8 Characters minimum) :</label>
                            </div>
                            <div class="rightTab">
                                <input type="password" name="password" class="input-field" minlength="8">
                            </div>        
                        </div>
                        
                        <input type="submit" id='submit' value='SIGN UP'>
                    </form>
            </div>
        </div>
    </div>
    
    <footer class="footer">
        <img src="/img/papillon.png" width="60vw">
        <h3>Thanks for using MINI CHAT</h3>
    </footer>
</body>

</html>