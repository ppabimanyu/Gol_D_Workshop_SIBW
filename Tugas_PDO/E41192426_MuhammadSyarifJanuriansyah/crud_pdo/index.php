<?php
include 'koneksi.php';
$query = $db->prepare("SELECT * FROM tbl_mahasiswa");
$query->execute();
$data = $query->fetchAll();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>CRUD PDO Javanet Media</title>
</head>

<body bgcolor="#808000">
    <h2><strong>
            <p align="center">Data Mahasiswa JavaNet Media</p>
        </strong></h2>
    <table width="807" border="1" cellpadding="0" cellspacing="0" align="center">
        <tr>
            <td width="115" height="30" align="center" valign="middle" bgcolor="#FFFF66">NIM</td>
            <td width="175" align="center" valign="middle" bgcolor="#FFFF66">Nama</td>
            <td width="250" align="center" valign="middle" bgcolor="#FFFF66">Alamat</td>
            <td width="100" align="center" valign="middle" bgcolor="#FFFF66">Golongan</td>
            <td width="135" align="center" valign="middle" bgcolor="#FFFF66"><a href="create.php">TAMBAH</a></td>
        </tr>
        <?php foreach ($data as $value) : ?>
            <tr>
                <td p align="center" bgcolor="#FFFFFF"><?php echo $value['nim'] ?></td>
                <td p align="left" bgcolor="#FFFFFF"><?php echo $value['nama'] ?></td>
                <td p align="left" bgcolor="#FFFFFF"><?php echo $value['alamat'] ?></td>
                <td p align="center" bgcolor="#FFFFFF"><?php echo $value['golongan'] ?></td>
                <td p align="center" bgcolor="#FFFFFF">
                    <a href="edit.php?nim=<?php echo $value['nim'] ?>">Edit</a>
                    <a href="delete.php?nim=<?php echo $value['nim'] ?>">Delete</a>
                </td>
            </tr>
            </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <p align="center"><a href=http://www.javanetmedia.com>www.javanetmedia.com </a> </p> 

</body> 
</html>