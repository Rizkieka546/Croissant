<?php  
require "../functions.php";

if (isset($_POST["signup"])) {

    if (signup($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil ditambahkan!')
                document.location.href = '../landingCoffee/index.php'
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal ditambahkan!')
                document.location.href = 'signup.php'
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Belanosima&family=Caveat:wght@500&family=Jost:wght@500&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="signup.css">
    <title>Sign Up</title>
</head>

<body>

    <div class="box">
        <span class="borderLine"></span>
        <form action="" method="post">
            <h2>Sign Up</h2>
            <div class="inputbox">
                <input type="text" name="username" id="username" required="required">
                <span>Username :</span>
                <i></i>
            </div>

            <div class="inputbox">
                <input type="text" name="email" id="email" required="required">
                <span>Email :</span>
                <i></i>
            </div>

            <div class="inputbox">
                <input type="text" name="password" id="password" required="required">
                <span>password :</span>
                <i></i>
            </div><br>

            <!-- <div class="links">
                <a href="#">Forget Password</a>
                <a href="#">Sign Up</a>
            </div> -->

            <button type="submit" name="signup">Sign Up</button>
        </form>
    </div>

    <!-- <script src="script.js"></script> -->

</body>

</html>