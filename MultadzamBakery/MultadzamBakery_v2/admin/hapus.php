<?php
require 'functions.php';

$id_fm = $_GET['id_fm'];
$id_produk = $_GET['id_produk'];
$id_pesan = $_GET['id_pesan'];
$id_mitra = $_GET['id_mitra'];
$id_riwayat = $_GET['id_riwayat'];


if (isset($_GET['id_fm']) > 0) {
    mysqli_query($conn, "DELETE FROM featured_menu WHERE id_fm = $id_fm");
    header('Location: produk.php');
} elseif (isset($_GET['id_produk']) > 0) {
    mysqli_query($conn, "DELETE FROM produk WHERE id_produk = $id_produk");
    header('Location: produk.php');
} elseif (isset($_GET['id_pesan']) > 0) {
    mysqli_query($conn, "DELETE FROM contact_us WHERE id_pesan = $id_pesan");
    header('Location: contact.php');
} elseif (isset($_GET['id_riwayat']) > 0) {
    mysqli_query($conn, "DELETE FROM riwayat WHERE id_checkout = $id_riwayat");
    header('Location: riwayat.php');
} else {
    mysqli_query($conn, "DELETE FROM mitra WHERE id_mitra = $id_mitra");
    header('Location: mitra.php');
}
