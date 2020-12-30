<?php
include 'koneksi.php';
if (!isset($_GET['nim'])) {
    die("Error: NIM Tidak Dimasukkan");
}
$query = $db->prepare("SELECT * FROM `tbl_mahasiswa` WHERE nim = :nim");
$query->bindParam(":nim", $_GET['nim']);
$query->execute();
if ($query->rowCount() == 0) {
    die("Error: NIM Tidak Ditemukan");
} else {
    $data = $query->fetch();
}
if (isset($_POST['submit'])) {
    $nama = htmlentities($_POST['nama']);
    $alamat = htmlentities($_POST['alamat']);
    $golongan = htmlentities($_POST['golongan']);
    $query = $db->prepare("UPDATE `tbl_mahasiswa` SET `nama`=:nama,`alamat`=:alamat,`golongan`=:golongan WHERE nim=:nim");
    $query->bindParam(":nama", $nama);
    $query->bindParam(":alamat", $alamat);
    $query->bindParam(":golongan", $golongan);
    $query->bindParam(":nim", $_GET['nim']);
    $query->execute();
    header("location: index.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>CRUD PDO Javanet Media </title>
    <meta charset="utf-8">
</head>

<body bgcolor="#CCCCCC">
    <h2>
        <p align="center">EDIT DATA</p>
    </h2>
    <form method="post">
        <table width="546" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" align="center">
            <tr>
                <td width="189" height="20"> </td>
                <td width="26"> </td>
                <td width="331"> </td>
            </tr>
            <tr>
                <td height="27" align="right" valign="middle">NIM</td>
                <td align="center" valign="top">:</td>
                <td valign="middle">
                    <input type="text" name="nim" value="<?php echo $data['nim'] ?>" readonly="readonly">
                </td>
            </tr>
            <tr>
                <td height="27" align="right" valign="middle">Nama</td>
                <td align="center" valign="top">:</td>
                <td valign="middle"><label>
                        <input type="text" name="nama" value="<?php echo $data['nama'] ?>">
                    </label></td>
            </tr>
            <tr>
                <td height="27" align="right" valign="middle">Alamat</td>
                <td align="center" valign="top">:</td>
                <td valign="middle"><label>
                        <input name="alamat" type="text" size="50" value="<?php echo $data['alamat'] ?>">
                    </label></td>
            </tr>
            <tr>
                <td height="27" align="right" valign="middle">Golongan</td>
                <td align="center" valign="top">:</td>
                <td valign="middle"><label>
                        <input name="golongan" type="text" size="50" value="<?php echo $data['golongan'] ?>">
                    </label></td>
            </tr>
            <tr>
                <td height="42"> </td>
                <td> </td>
                <td><input type="submit" name="submit" value="EDIT"></td>
            </tr>
        </table>
    </form>
    <p align="center"><a href=http://www.javanetmedia.com>www.javanetmedia.com </a> </p> </body> </html>