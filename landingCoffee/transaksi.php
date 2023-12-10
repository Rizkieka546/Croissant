<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("location: ../login/login.php");
    exit;
}

// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "web_penjualan");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

if (isset($_POST['buy'])) {
    $itemId = $_POST['item_id'];
    $selectedItem = query("SELECT * FROM croissant WHERE id = $itemId")[0];

    // Inisialisasi keranjang belanja jika belum disetel
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Periksa apakah barang sudah ada di keranjang
    $itemIndex = array_search($itemId, array_column($_SESSION['cart'], 'id'));

    if ($itemIndex !== false) {
        // Jika barang sudah ada di keranjang, tambah jumlahnya
        $_SESSION['cart'][$itemIndex]['quantity'] += 1;
    } else {
        // Jika tidak, tambahkan item ke keranjang dengan kuantitas 1
        $selectedItem['quantity'] = 1;
        $_SESSION['cart'][] = $selectedItem;
    }

    // Simpan data pembelian ke database
    $itemName = $selectedItem['nama'];
    $itemPrice = $selectedItem['harga'];
    $itemQty = $selectedItem['quantity'];

    $insertQuery = "INSERT INTO pembelian (nama, harga, qty) VALUES ('$itemName', $itemPrice, $itemQty)";
    mysqli_query($conn, $insertQuery);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <style>
        img {
            border-radius: 50%;
        }

        .pri-btn {
            background-color: #65451F;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 5px;
        }

        .minus,
        .plus {
            cursor: pointer;
        }
    </style>

</head>

<body>
    <main>
        <form action="" method="post">
            <?php if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) : ?>
                <?php foreach ($_SESSION['cart'] as $item) : ?>
                    <div id="order" class="p-3 mx-auto align-self-center">
                        <div class="wrapper text-center d-flex my-auto flex-column align-items-center shadow p-4">
                            <img src="assets/<?= $item["gambar"] ?>" alt="" name="gambar" id="gambar">
                            <h1 name="nama" id="nama" class="title fw-bold"><?= $item["nama"] ?></h1>
                            <div class="line"></div>
                            <div class="qty my-2">
                                <span class="minus fw-bold decrease">&minus;</span>
                                <input type="text" inputmode="numeric" value="<?= $item["quantity"] ?>" id="qty" name="qty" class="text-center fw-bold" disabled>
                                <span class="plus fw-bold increase">&plus;</span>
                            </div>
                            <input type="text" value="<?= $item["harga"] ?>" class="text-center fw-bold mb-2" id="harga" name="harga" disabled>
                            <button class="pri-btn mb-3" type="submit" name="submit">Buy</button>
                        </div>

                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <a class="pesan" href="menu.php">Pesan Lagi</a>
            <?php endif; ?>
        </form>
    </main>

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $('.qty').on('click', '.decrease', function() {
                updateQuantity(-1);
            });

            $('.qty').on('click', '.increase', function() {
                updateQuantity(1);
            });

            function updateQuantity(value) {
                var currentQty = parseInt($('#qty').val());
                var newQty = currentQty + value;

                if (newQty >= 1) {
                    $('#qty').val(newQty);
                    updatePrice(newQty);
                }
            }

            function updatePrice(qty) {
                var price = <?= $item["harga"] ?>;
                var total = (qty * price).toFixed(2);
                $('#harga').val(total);
            }

            // Tambahkan kode berikut
            $('form').submit(function() {

                // Mengosongkan keranjang belanja
                <?php unset($_SESSION['cart']); ?>

                // Mengarahkan ke halaman menu.php
                window.location.href = 'menu.php';
                return true;
            });
        });
    </script>


</body>

</html>