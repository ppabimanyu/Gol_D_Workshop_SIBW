<?php
    include 'koneksi.php';

    if(isset($_GET["NIM"])){
        $query = $db->prepare("DELETE FROM `pdo` WHERE NIM=:NIM");
        $query->bindParam(":NIM", $_GET["NIM"]);
        $query->execute();
        header("location: index.php");
    }
?>