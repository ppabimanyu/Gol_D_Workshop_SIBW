<?php
//session start
session_start();
//panggil statik variabel username dan password
require 'functions.php';
if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    // cek username
    if (mysqli_num_rows($result) === 1) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["sandi"])) {
            // set session
            $_SESSION["login"] = true;

            // cek remember me
            if (isset($_POST['remember'])) {
                // buat cookie
                setcookie('id', $row['id'], time() + 3600);
                setcookie('key', hash('sha256', $row['username']), time() + 3600);
            }

            header("Location: index.php");
            exit;
        };
    }

    header("Location: sign-in.php?pesan=gagal");
}
