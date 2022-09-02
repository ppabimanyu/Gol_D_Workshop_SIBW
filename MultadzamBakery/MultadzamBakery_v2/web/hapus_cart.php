<?php
session_start();
$id = $_GET['id'];
unset($_SESSION['keranjang'][$id]);
unset($_SESSION['subharga'][$id]);
header('Location: cart.php');
