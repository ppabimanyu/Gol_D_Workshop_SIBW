<?php
// koneksi
require 'functions.php';

// cek submit sudah ditekan atau belum 
if (isset($_POST["submit"])) {
  // ambil data dari tiap elemen dalam form
  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $phone = htmlspecialchars($_POST["phone"]);
  $address = htmlspecialchars($_POST["address"]);
  $add_information = htmlspecialchars($_POST["add_information"]);

  // query insert data
  $query = "INSERT INTO mitra
            VALUES
            ('', '$name', '$email', '$phone', '$address', '$add_information')";
  mysqli_query($conn, $query);
}
if (isset($_POST["submit"]) > 0) {
  echo "
		<script>
			alert('data berhasil terkirim!');
			document.location.href = 'mitra.php';
		</script>
	";
} else {
  echo "
		<script>
			alert('data gagal terkirim!');
			document.location.href = 'mitra.php';
		</script>
	";
}
