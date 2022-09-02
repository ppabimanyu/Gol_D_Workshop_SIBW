<?php
require 'functions.php';
$stat = $_GET['status'];
$id = $_GET['id'];
$finish = query("SELECT * FROM checkout WHERE id_checkout = $id")[0];
$nama = $finish["nama"];
$phone = $finish["phone"];
$wa_email = $finish["wa-email"];
$alamat = $finish["alamat"];
$catatan = $finish["catatan"];
$shipping = $finish["shipping"];
$total = $finish["total"];
$tgl = $finish["tgl"];
$status = $finish["status"];

// var_dump($stat);
// die;

if ($stat == '1') {
    # code...

    $query = "UPDATE checkout SET status = 'Proses' WHERE id_checkout = $id";

    mysqli_query($conn, $query);
    header('Location:index.php');
    exit;
}
if ($stat == '2') {
    # code...
    mysqli_query($conn, "INSERT INTO riwayat VALUES  ('$id',' $nama', '$phone', '$wa_email', '$alamat', '$catatan', '$shipping', '$total', '$tgl', 'Finish')");
    mysqli_query($conn, "DELETE FROM checkout WHERE id_checkout = $id");
    header('Location:index.php');
    exit;
}
if ($stat == '3') {
    # code...
    mysqli_query($conn, "INSERT INTO riwayat VALUES  ('$id',' $nama', '$phone', '$wa_email', '$alamat', '$catatan', '$shipping', '$total', '$tgl', 'Canceled')");
    mysqli_query($conn, "DELETE FROM checkout WHERE id_checkout = $id");
    header('Location:index.php');
    exit;
}
header('Location:index.php');
exit;
