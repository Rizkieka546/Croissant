<?php

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

function signup($data)
{
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $email = strtolower(stripslashes($data["email"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    $password = password_hash($password, PASSWORD_DEFAULT);


    $query = "INSERT INTO user 
                VALUES
              ('', '$username', '$email', '$password')
            ";


    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function buy($data) {
    global $conn;
    
    $nama = htmlspecialchars($data["nama"]);
    $harga = htmlspecialchars($data["harga"]);
    $qty = htmlspecialchars($data["qty"]);

    $query = "INSERT INTO pembelian 
                VALUES
              ('', '$nama', '$harga', '$qty')
            ";


    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}