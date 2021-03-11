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
    <title>About🦋</title>


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

    
<ul class="slider">
    <li>
        <input type="radio" id="slide1" name="slide" checked>
        <label for="slide1"></label>
        <img src="/img/Welcome.gif" alt="Panel 1">
    </li>
    <li>
        <input type="radio" id="slide2" name="slide">
        <label for="slide2"></label>
        <img src="/img/Welcome2.gif" alt="Panel 2">
    </li>
    <li>
        <input type="radio" id="slide3" name="slide">
        <label for="slide3"></label>
        <img src="/img/Welcome3.gif" alt="Panel 3">
    </li>
    <li>
        <input type="radio" id="slide4" name="slide">
        <label for="slide4"></label>
        <img src="/img/Welcome4.gif" alt="Panel 4">
    </li>
</ul>



</body>
</html>