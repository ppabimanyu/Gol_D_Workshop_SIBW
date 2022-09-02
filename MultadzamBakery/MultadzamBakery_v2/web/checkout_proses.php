<?php
session_start();
require 'functions.php';

if (isset($_POST["submit"])) {
	$nama = htmlspecialchars($_POST["nama"]);
	$phone = htmlspecialchars($_POST["phone"]);
	$wa_email = htmlspecialchars($_POST["wa_email"]);
	$alamat = htmlspecialchars($_POST["alamat"]);
	$catatan = htmlspecialchars($_POST["catatan"]);
	$shipping = ($_POST["shipping"]);
	$tgl = date("Y-m-d");
	$total = $_POST['total'];

	$query = "INSERT INTO checkout
				VALUES
			  ('', '$nama', '$phone', '$wa_email', '$alamat', '$catatan', '$shipping', '$total', '$tgl', 'Due')
			";
	mysqli_query($conn, $query);
}
$order = query("SELECT * FROM checkout WHERE id_checkout IN( SELECT MAX(id_checkout) FROM checkout )")[0];
$id_checkout = $order['id_checkout'];
?>
<?php foreach ($_SESSION['keranjang'] as $id_produk => $qty) : ?>
<?php


	$brg = query("SELECT * FROM produk WHERE id_produk = $id_produk")[0];
	$gambar_produk = ($brg["gambar_produk"]);
	$nama_produk = ($brg["nama_produk"]);
	$harga_produk = ($brg["harga_produk"]);
	$_SESSION['subharga'][$id_produk] = $brg["harga_produk"] * $qty;
	$jumlah = $_SESSION['keranjang'][$id_produk];
	$subharga = $_SESSION['subharga'][$id_produk];

	$query = "INSERT INTO detail_checkout
	VALUES
  ('', '$id_checkout', '$id_produk', '$nama_produk', '$harga_produk', '$jumlah', '$subharga')
";
	mysqli_query($conn, $query);

endforeach;
unset($_SESSION['keranjang']);
unset($_SESSION['subharga']);
header('Location: nota.php'); ?>

