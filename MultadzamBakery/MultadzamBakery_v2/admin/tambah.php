<?php
require 'functions.php';

if (isset($_POST["submit"])) {
	$namaProduk = htmlspecialchars($_POST["namaProduk"]);
	$hargaProduk = htmlspecialchars($_POST["hargaProduk"]);
	$deskripsiProduk = htmlspecialchars($_POST["deskripsiProduk"]);
	$nama = $_FILES['fotoProduk']['name'];
	$lokasi = $_FILES['fotoProduk']['tmp_name'];
	move_uploaded_file($lokasi, "../web/img/foto_produk/" . $nama);

	$query = "INSERT INTO produk
				VALUES
			  ('', '$namaProduk', '$hargaProduk', '$deskripsiProduk', '$nama')
			";
	mysqli_query($conn, $query);
}
if (isset($_POST["submit"]) > 0) {
	echo "
		<script>
			alert('data berhasil ditambahkan!');
			document.location.href = 'produk.php';
		</script>
	";
} else {
	echo "
		<script>
			alert('data gagal ditambahkan!');
			document.location.href = 'produk.php';
		</script>
	";
}
