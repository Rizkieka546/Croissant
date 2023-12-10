<?php
session_start();

if (!isset($_SESSION["login"])) {
  header("location: ../login/login.php");
  exit;
}

require "../functions.php";

$kopis = query("SELECT * FROM kopi");

// Periksa apakah tombol 'beli' diklik
if (isset($_POST['buy'])) {
  $itemId = $_POST['item_id'];
  $selectedItem = query("SELECT * FROM kopi WHERE id = $itemId")[0];

  // Inisialisasi keranjang belanja jika belum disetel
  if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
  }

  // Tambahkan item yang dipilih ke keranjang belanja
  $_SESSION['cart'][] = $selectedItem;
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
      <a href="about.php">About us</a>
      <a href="contact.php">Contact us</a>
      <a href="../signup/signup.php">Sign up</a>
      <a href="../logout.php">Logout</a>
    </div>
  </nav>


  <div class="break"></div>
  <section class="button-container">
    <button class="btn m-1"><a href="menu.php" style="font-size: 18px; font-family: poppins;">croissant</a></button>
    <button class="btn m-1"><a href="menucof.php" style="font-size: 18px; font-family: poppins;">coffee</a></button>
  </section>
  <section class="content-container row">
    <?php foreach ($kopis as $kopi) : ?>
      <div class="card" style="width: 21rem;">
        <img src="assets/<?= $kopi["gambar"] ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h4 class="card-title" style="font-family: poppins; font-weight: bolder;"><?= $kopi["nama"] ?></h4>
          <p class="card-text" style="font-family: poppins; font-size: 18px; color: black; font-weight: 500;">Danish</p>
          <p class="card-text" style="font-family: poppins; font-size: 18px; color: #61481C; font-weight: 600;">$<?= $kopi["harga"] ?></p>
          <form action="transaksi.php" method="post">
            <input type="hidden" name="item_id" value="<?= $kopi["id"] ?>">
            <button type="submit" name="buy" class="btn btn-primary" style="background-color: #65451F; color: white;">Buy</button>
          </form>
        </div>
      </div>
    <?php endforeach; ?>
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




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>