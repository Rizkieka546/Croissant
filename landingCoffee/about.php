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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@100&family=Exo+2:ital,wght@0,400;1,300&family=Familjen+Grotesk:wght@500&family=Galindo&family=Inknut+Antiqua:wght@600&family=Inter&family=Irish+Grover&family=Istok+Web&family=Jomolhari&family=Merriweather+Sans:wght@500&family=Merriweather:wght@700&family=Outfit&family=Poppins:wght@100;400;500&family=REM:wght@300&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar fixed-top">
        <img src="assets/Group 1.png" alt="instagram">
        <div class="nav-menu">
            <a href="index.php">Home</a>
            <a href="menu.php">Menu</a>
            <a href="contact.php">Contact us</a>
            <a href="../signup/signup.php">Sign up</a>
            <a href="../logout.php">Logout</a>
        </div>
    </nav>

    <div class="break"></div>
    <div class="card text-center container">
        <div class="card-header">
            Heavenly CroissBrew
        </div>
        <div class="card-body "> 
          <h5 class="card-title" style="font-size: 50px; font-family: poppins; text-shadow: 1px 2px 4px;">About</h5>
          <p class="card-text" style="font-family: poppins; color: black;">Taste and See Coffee Shop and Gallery offers a unique coffee house environment unlike any other in Macon. We are not only a place to drop in and get your morning cup of coffee (although you are more than welcome to do that), we are a place where you can sit down and enjoy that tailor-made cup of coffee. If you need to work, we have a seating area created specifically for you. If you need to rest, we have a soft-seating area in front of a stone fire place that is perfect for your weary mind and body. We offer a delicious variety of coffee roasted in house made by our professionally trained baristas. We have everything from classic coffee to our house made specialty beverages. All of our sauces & syrups are made in-house with all natural ingredients (no chemicals or preservatives) ensuring you the highest quality in taste & health. You can complete your coffee with one of our delicious sweet treats made by our very own baker. We look forward to serving you at Taste & See Coffee Shop and Gallery!</p>

        </div>
        <div class="card-footer text-body-secondary">

        </div>
      </div>

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




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>