<?php
require 'functions.php';

if (isset($_POST["submit"])) {
	# code...
	$username = $_POST["username"];
	$query = "UPDATE user SET username = '$username' WHERE id = 1";

	mysqli_query($conn, $query);
	header('Location: setting.php?usr=berhasil');
	exit;
}
header('Location: setting.php?usr=gagal');
