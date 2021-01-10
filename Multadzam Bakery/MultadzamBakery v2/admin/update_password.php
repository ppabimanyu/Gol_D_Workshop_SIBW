<?php
require 'functions.php';

if (isset($_POST["submit"])) {
    # code...
    $password = ($_POST["password"]);
    $password1 = ($_POST["password1"]);
    $password2 = ($_POST["password2"]);


    $data = query("SELECT sandi FROM user WHERE id = 1")[0];


    if (password_verify($password, $data["sandi"])) {
        // cek konfirmasi password
        if ($password1 !== $password2) {
            header('Location: setting.php?pesan=gagal');
            exit;
        }
        // enkripsi password
        $password1 = password_hash($password1, PASSWORD_DEFAULT);
        // var_dump($password1);
        // die;

        // tambahkan userbaru ke database
        $query = "UPDATE user SET sandi = '$password1' WHERE id = 1";

        mysqli_query($conn, $query);
        header('Location: setting.php?pesan=berhasil');
        exit;
    }
    header('Location: setting.php?pesan=salah');
    exit;
}
header('location: setting.php');
exit;
