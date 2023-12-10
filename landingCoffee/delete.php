<?php
session_start();

$id = $_GET["id"];

function deleteItem($id)
{
    if (isset($_SESSION['cart'])) {
        $itemIndex = array_search($id, array_column($_SESSION['cart'], 'id'));
        if ($itemIndex !== false) {
            unset($_SESSION['cart'][$itemIndex]);
            return true; // Deletion successful
        }
    }
    return false; // Deletion failed
}

if (deleteItem($id)) {
    echo "
        <script>
            alert('Data berhasil dihapus!');
            document.location.href = 'transaksi.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Data gagal dihapus!');
            document.location.href = 'transaksi.php';
        </script>
    ";
}
?>