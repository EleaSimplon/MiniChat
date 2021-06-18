<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="unicode">
    <!----- ***** BOOTSTRAP LINKS ******------>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!----- ***** GOOGLE LINKS ******------>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css">
    <!----- ***** CSS LINK ******------>
    <link rel="stylesheet" href="/CSS/main.css">
    <!----- ***** EMOJI CSS LINK ******------>
    <link href="emoji/emojione.picker.css" rel="stylesheet">
    <!-- ********* FONT AWESOME LINK ********* -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!----- ***** URL ICON LINK ******------>
    <link rel="icon" type="papillon" href="/img/papillon.png" />

    <title>Mini Chat </title>

    

</head>
<body>

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
                        <a class="nav-link active" aria-current="page" href="/index.php?id=<?=$_GET['id']?>">Home</a>
                    <li class="nav-item">
                        <a class="nav-link" href="/Sign/signup.php?id=<?=$_GET['id']?>">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Sign/signin.php?id=<?=$_GET['id']?>">Log In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Sign/logout.php?id=<?=$_GET['id']?>">Log Out</a>
                    </li>
                    

                    <?php }
                    else{
                    ?>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Sign/signup.php">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Sign/signin.php">Log In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Sign/logout.php">Log Out</a>
                    </li>

                    <?php } ?>
    
                </ul>
            </div>
        </div>
    </nav>



    <!--SECTION 1 HEADER-->
    <!-- Bootstrap Static Header -->
    <div style="background: url(https://images.pexels.com/photos/1376201/pexels-photo-1376201.jpeg?cs=srgb&dl=pexels-daria-shevtsova-1376201.jpg&fm=jpg)" class="jumbotron bg-cover text-white">
        <div class="py-5 text-center">
            <h1 class="display-4 font-weight-bold">WELCOME TO MINI CHAT</h1>
            <p class="font-italic mb-0">Chatting with your friends never been that easy !</p>
        </div>
    </div>