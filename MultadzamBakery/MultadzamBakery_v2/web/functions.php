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


function hapus($id_fm)
{
	global $conn;
	mysqli_query($conn, "DELETE FROM featured_menu WHERE id_fm = $id_fm");
	return mysqli_affected_rows($conn);
}
