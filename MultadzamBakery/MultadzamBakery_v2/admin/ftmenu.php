<?php
require 'functions.php';
$id_produk = $_GET['id_produk'];
$ft = query("SELECT * FROM produk WHERE id_produk = $id_produk")[0];


$namaProduk = $ft["nama_produk"];
$hargaProduk = $ft["harga_produk"];
$deskripsiProduk = $ft["deskripsi_produk"];
$gambarProduk = $ft["gambar_produk"];
mysqli_query($conn, "INSERT INTO featured_menu VALUES  ('','$id_produk', '$namaProduk', '$hargaProduk', '$deskripsiProduk', '$gambarProduk')");


header('Location: produk.php');
