<?php
$koneksi = mysqli_connect("localhost","root","","db_crud_web");

if(mysqli_connect_error()) {
    echo "koneksi databse gagal : " . mysqli_connect_error();
}
?>