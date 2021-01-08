<?php
// koneksi
require 'functions.php';

// cek submit sudah ditekan atau belum 
if (isset($_POST["submit"])) {
  // ambil data dari tiap elemen dalam form
  $name = $_POST["name"];
  $email = $_POST["email"];
  $subject = $_POST["subject"];
  $message = $_POST["message"];
  $tgl = date("Y-m-d");

  // query insert data
  $query = "INSERT INTO contact_us
            VALUES
            ('','$tgl','$name', '$email', '$subject', ' $message')";
  mysqli_query($conn, $query);
}
if (isset($_POST["submit"]) > 0) {
  echo "
		<script>
			alert('pesan berhasil terkirim!');
			document.location.href = 'contact.php';
		</script>
	";
} else {
  echo "
		<script>
			alert('pesan gagal terkirim!');
			document.location.href = 'contact.php';
		</script>
	";
}
