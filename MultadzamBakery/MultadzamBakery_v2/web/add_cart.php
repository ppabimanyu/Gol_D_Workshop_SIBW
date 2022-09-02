<?php
// koneksi
require 'functions.php';
session_start();

$id_produk = $_POST['id_produk'];
global $qty;
$qty = ($_POST["quantity"]);
// cek submit sudah ditekan atau belum 
if (!isset($_POST["pesan"])) {
    header("Location: produk.php");
    exit;
}

// cek submit sudah ditekan atau belum 
if (isset($_POST["pesan"])) {



    if (isset($_SESSION['keranjang'][$id_produk])) {
        $_SESSION['keranjang'][$id_produk] += $qty;
    } else {
        $_SESSION['keranjang'][$id_produk] = $qty;
    }

    header('Location: cart.php');
}
