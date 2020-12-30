<?php
    include 'koneksi.php';
    if(!isset($_GET['NIM'])){
        die("Error: NIM Tidak Dimasukkan");
    }
    $query = $db->prepare("SELECT * FROM `pdo` WHERE NIM = :NIM");
    $query->bindParam(":NIM", $_GET['NIM']);
    $query->execute();
    if($query->rowCount() == 0){
        die("Error: NIM Tidak Ditemukan");
    }else{
        $data = $query->fetch();
    }
    if(isset($_POST['submit'])){
        $nama = htmlentities($_POST['Nama']);
        $alamat = htmlentities($_POST['Alamat']);
        $kelas = htmlentities($_POST['Kelas']);
        $query = $db->prepare("UPDATE `pdo` SET `nama`=:nama,`alamat`=:alamat,`kelas`=:kelas WHERE NIM=:NIM");
        $query->bindParam(":nama", $nama);
        $query->bindParam(":alamat", $alamat);
        $query->bindParam(":kelas", $kelas);
        $query->bindParam(":NIM", $_GET['NIM']);
        $query->execute();
        header("location: index.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
 <title>CRUD PDO </title>
    <meta charset="utf-8">
    </head>
 <body bgcolor="cyan">
    <h2><p align="center">EDIT DATA</p></h2>
    <form method="post">
 <table width="546" border="0" cellpadding="0" cellspacing="0" bgcolor="cyan" align="center">
  <tr>
    <td width="189" height="20"> </td>
    <td width="26"> </td>
    <td width="331"> </td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">NIM</td>
    <td align="center" valign="top">:</td>
    <td valign="middle">
      <input type="text" name="NIM" value="<?php echo $data['NIM'] ?>" readonly="readonly"> 
    </td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Nama</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input type="text" name="Nama" value="<?php echo $data['Nama'] ?>">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Alamat</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
      <input name="Alamat" type="text" size="50" value="<?php echo $data['Alamat'] ?>">
    </label></td>
  </tr>
  <tr>
    <td height="27" align="right" valign="middle">Kelas</td>
    <td align="center" valign="top">:</td>
    <td valign="middle"><label>
  <input name="Kelas" type="text" size="50" value="<?php echo $data['Kelas'] ?>">
    </label></td>
  </tr>
  <tr>
    <td height="42"> </td>
    <td> </td>
    <td><input type="submit" name="submit" value="EDIT"></td>
  </tr>
  </table>
  
  </body>
</html>