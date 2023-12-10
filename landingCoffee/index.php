<?php

session_start();

if(!isset($_SESSION["login"])) {
    header("location: ../login/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heavenly CroissBrew</title>

        <!-- Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@100&family=Exo+2:ital,wght@0,400;1,300&family=Familjen+Grotesk:wght@500&family=Galindo&family=Inknut+Antiqua:wght@600&family=Inter&family=Irish+Grover&family=Istok+Web&family=Jomolhari&family=Merriweather+Sans:wght@500&family=Merriweather:wght@700&family=Outfit&family=Poppins:wght@100;400;500&family=REM:wght@300&display=swap" rel="stylesheet">

        <!-- bootstrap -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>


    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar fixed-top">
        <img src="assets/Group 1.png" alt="instagram">
        <div class="nav-menu">
            <a href="index.php">Home</a>
            <a href="menu.php">Menu</a>
            <a href="about.php">About us</a>
            <a href="contact.php">Contact us</a>
            <a href="../signup/signup.php">Sign up</a>
            <a href="../logout.php">Logout</a>
        </div>
    </nav>
    <section class="hero-container" style="margin-bottom: 200px; padding-top: 200px;">
        <div>
            <div>
                <h1 class="heading">Heavenly CroissBrew
                </h1>
                <a href="menu.php" class="btn-1">Search menu</a>
            </div>
        </div>
        <img src="assets/roticoff.jpg" alt="coffee">
    </section>
    <section class="description-container">
        <div class="card-body2">
            <div>
                <h2> What is a Croissant?</h2>
                <p>A Croissant is a laminated, yeast-leavened bakery product that contains dough/roll-in fat layers to create a flaky, crispy texture.
                </p>
            </div>
            <div class="description-left-footer">
                <p class="gpl" style="color: white;">May 20th 2020</p>
                <p class="font-weight-bold" style="font-weight: bolder;">Read more</p>
            </div>
        </div>
        <img src="assets/croissant.png" alt="desc" style="box-shadow: 0 4px 6px #61481C;">
    </section> 
    

    <section class="content-container">
            <div class="card" style="width: 21rem;">
                <img src="assets/black.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h4 class="card-title" style="font-family: poppins; font-weight: bolder;">Pistachio Black </br>Croissant</h4>
                  <p class="card-text" style="font-family: poppins; font-size: 18px; color: black; font-weight: 600;">$0.224</p>
                  <a href="#" class="btn btn-primary" style="background-color: #65451F; color: white;">Order now!!</a>
                </div>
              </div>
        <div class="card" style="width: 21rem;">
                <img src="assets/cheese.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h4 class="card-title" style="font-family: poppins; font-weight: 700;">Cheese </br>Croissant</h4>
                  <p class="card-text" style="font-family: poppins; font-size: 18px; color: black; font-weight: 600;">$2.176</p>
                  <a href="#" class="btn btn-primary" style="background-color: #65451F; color: white;">Order now!!</a>
                </div>
              </div>
              <div class="card" style="width: 21rem;">
                <img src="assets/black.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h4 class="card-title" style="font-family: poppins; font-weight: bolder;">Pistachio Black </br>Croissant</h4>
                  <p class="card-text" style="font-family: poppins; font-size: 18px; color: black; font-weight: 600;">$2.176</p>
                  <a href="#" class="btn btn-primary" style="background-color: #65451F; color: white; ">Order now!!</a>
                </div>
              </div>
    </section>

    <section class="button-menu">
        <center>  <a href="menu.php" class="btn btn-primary" style="background-color: #65451F;  box-shadow: 6px 10px 20px #65451F; font-size: 25px; 
            width: 436px; height: 60px; color: white;" >Explore our menu >></a></center>
    </section>



    <section class="button-container">
        <button class="btn">See More Now</button>
    </section>
    <footer>
        <p><b>Heavenly CroissBrew</b> © 2023 copyright all rights reserved</p>
        <div>
            <img src="assets/twitter.png" alt="instagram">
            <img src="assets/instagram.png" alt="twitter">
            <img src="assets/facebook.png" alt="linkedin">
        </div>
    </footer>




    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>