<?php
//session start
session_start();
//panggil statik variabel username dan password
require 'functions.php';
$login = query("SELECT * FROM masuk")[0];
$username = $login["username"];
$password = md5($login["password"]);
//get post
$user = $_POST["username"];
$pass = $_POST["password"];

// var_dump($username);
// var_dump($password);
// var_dump($user);
// var_dump($pass);
// die;

//untuk menentukan expire cookie, dihtung dri waktu server + waktu umur cookie          
$time = time();
//cek jika setcookie di cek set cookie jika tidak ''
$check = isset($_POST['setcookie']) ? $_POST['setcookie'] : '';

if (($username == $user) && ($password == md5($pass))) {
    //jika valid set session 1
    $_SESSION['logged'] = 1;
    //jika remembere me, set cookie
    if ($check) {
        setcookie("cookielogin[user]", $user, $time + 3600);
        setcookie("cookielogin[pass]", $pass, $time + 3600);
    }
    //redirect member_area
    header('Location: index.php');
    exit();
} else {
    header('Location: sign-in.php?pesan=gagal');
    exit();
}
