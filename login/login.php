<?php
session_start();

if(isset($_SESSION["login"])) {
    header("location: ../landingCoffee/index.php");
    exit;
}

require "../functions.php";

if (isset($_POST["login"])) {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");

    // cek email
    if (mysqli_num_rows($result) === 1) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            // set session
            $_SESSION["login"] = true;

            header("location: ../landingCoffee/index.php");
            exit;
        }
    }

    $error = true;

    if (isset($error)) {
        echo "
            <script>
                alert('Username / Password salah')
                document.location.href = 'login.php'
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
    <link href="https://fonts.googleapis.com/css2?family=Belanosima&family=Caveat:wght@500&family=Jost:wght@500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <title>Sign Up</title>
</head>

<body>

    <?php if (isset($error)) {
        echo "
            <script>
                alert('Username / Password salah')
                document.location.href = 'login.php'
            </script>
        ";  
    }
    ?>

    <div class="box">
        <span class="borderLine"></span>
        <form action="" method="post">
            <h2>Login</h2>

            <div class="inputbox">
                <input type="text" name="email" id="email" required="required">
                <span>Email :</span>
                <i></i>
            </div>

            <div class="inputbox">
                <input type="password" name="password" id="password" required="required">
                <span>password :</span>
                <i></i>
            </div>

            <div class="links">
                <a href="#">Forget Password</a>
                <a href="../signup/signup.php">Sign Up</a>
            </div>

            <button type="submit" name="login">Login</button>
        </form>
    </div>

    <!-- <script src="script.js"></script> -->

</body>

</html>