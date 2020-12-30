<?php
    include 'koneksi.php';
    $query = $db->prepare("SELECT * FROM pdo");
    $query->execute();
    $data = $query->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>COBA PDO  </title>
</head>
<body bgcolor="white">
<h2><strong><p align="center">Data Mahasiswa</p></strong></h2>
<table width="807" border="1" cellpadding="0" cellspacing="0" align="center">
  <tr>
    <td width="115" height="30" align="center" valign="middle" bgcolor="salmon">NIM</td>
    <td width="175" align="center" valign="middle" bgcolor="salmon">Nama</td>
    <td width="250" align="center" valign="middle" bgcolor="salmon">Alamat</td>
    <td width="100" align="center" valign="middle" bgcolor="salmon">Kelas</td>
    <td width="135" align="center" valign="middle" bgcolor="salmon"><a href="create.php">TAMBAH</a></td></tr>
            <?php foreach ($data as $value): ?>
                <tr>
                    <td p align="center" bgcolor="white"><?php echo $value['NIM'] ?></td>
                    <td p align="left" bgcolor="white"><?php echo $value['Nama'] ?></td>
                    <td p align="left" bgcolor="white"><?php echo $value['Alamat'] ?></td>
                    <td p align="center" bgcolor="white"><?php echo $value['Kelas'] ?></td>
                    <td p align="center" bgcolor="white">
                        <a href="edit.php?NIM=<?php echo $value['NIM']?>">Edit</a>
                        <a href="delete.php?NIM=<?php echo $value['NIM']?>">Delete</a>
                    </td>
                </tr>
 </td>
  </tr>
<?php endforeach; ?>
</table>

</body>
</html>