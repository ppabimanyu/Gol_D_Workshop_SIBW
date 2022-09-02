<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "multadzambakery");


function query($query)
{
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}
// function registrasi($data)
// {
// 	global $conn;

// 	$password = mysqli_real_escape_string($conn, $data["password"]);
// 	$password1 = mysqli_real_escape_string($conn, $data["password1"]);
// 	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

// 	$result = mysqli_query($conn, "SELECT password FROM user WHERE id = 1");
// 	$row = mysqli_fetch_assoc($result);

// 	if (password_verify($password, $row["password"])) {
// 		// cek konfirmasi password
// 		if ($password1 !== $password2) {
// 			echo "<script>
// 				alert('konfirmasi password tidak sesuai!');
// 		      </script>";
// 			return false;
// 		}


// 		// enkripsi password
// 		$password1 = password_hash($password1, PASSWORD_DEFAULT);

// 		// tambahkan userbaru ke database
// 		mysqli_query($conn, "UPDATE user SET password = '$password1' WHERE id = 1");

// 		return mysqli_affected_rows($conn);
// 	}
// }
