<!DOCTYPE html>
<head>
<title>Tambah Data Barang</title>
<script language="javascript">
function cekform(){
    //ini untuk ngecek formnya (semua form tidak boleh kosong)
    if(document.frmbarang.txtkode.value==""){
        alert('Kode Barang Harus Diisi');
        document.frmbarang.txtkode.focus();
        return false;
    } else if(document.frmbarang.txtnama.value==""){
        alert('Nama Barang Harus Diisi');
        document.frmbarang.txtnama.focus();
        return false;
    } else if(document.frmbarang.txtharga.value==""){
        alert('Harga Barang Harus Diisi');
        document.frmbarang.txtharga.focus();
        return false;
    } else if(document.frmbarang.txtpersediaan.value==""){
        alert('Persediaan Barang Harus Diisi');
        document.frmbarang.txtpersediaan.focus();
        return false;
    } else if(document.frmbarang.txtfoto.value==""){
        alert('Foto Barang Harus Diisi');
        document.frmbarang.txtfoto.focus();
        return false;
    } else {
        return true;
    }
}
</script>
</head>

<body>
<?php
//ini menu yang akan ada di semua halaman
include "menubarang.php";
?>
<form action="" method="post" name="frmbarang" onsubmit="return cekform()">
<table width="500" border="1">
  <tr>
    <td width="163">Kode Barang </td>
    <td width="321"><input name="txtkode" type="text" id="txtkode" size="5" maxlength="5" /></td>
  </tr>
  <tr>
    <td>Nama Barang </td>
    <td><input name="txtnama" type="text" id="txtnama" /></td>
  </tr>
  <tr>
    <td>Harga</td>
    <td><input name="txtharga" type="text" id="txtharga" /></td>
  </tr>
  <tr>
    <td>Persediaan</td>
    <td><input name="txtpersediaan" type="text" id="txtpersediaan" /></td>
  </tr>
  <tr>
    <td>Foto</td>
    <td><input name="txtfoto" type="file" id="txtfoto" type="submit" value="upload" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input name="tblIsi" type="submit" id="tblIsi" value="Tambah Barang" /></td>
  </tr>
</table>

</form>
</body>
</html>
<?php
//include file koneksi ke mysql
include "koneksi.php";
//ini kalo tombol submitnya diklik
//perhatikan nama dari tombol tsb (tblIsi)
if(isset($_POST['tblIsi'])){
    //ini adalah variabel untuk menampung inputan dari form (nama variabel bebas)
    // yang ada di dalam $_POST[''] adalah nama dari masing-masing textbox
    $kode = $_POST['txtkode'];
    $nama = $_POST['txtnama'];
    $harga = $_POST['txtharga'];
    $persediaan = $_POST['txtpersediaan'];
    $foto = $_POST['txtfoto'];
    //siapkan sebuah variabel untuk menampung query mysql
    //yang ada di dalam VALUES harus berurutan sesuai dengan uturan field yang ada dalam tabel
    $sql = "INSERT INTO barang VALUES('$kode','$nama','$harga','$persediaan','$foto')";
    //jalankan kuerynya
    $kueri = mysqli_query($koneksi, $sql);
    //cek apakah variabel $kueri bernilai TRUE atau FALSE
    if($kueri){
    //ini kalo TRUE
    //tampilin alert pake javascript aja deh
        echo "<script>alert('Data barang berhasil dimasukkan ke database')</script>";
    } else {
    //ini kalo FALSE
        echo "<script>alert('Data barang gagal dimasukkan ke database')</script>";
        //tampilkan pesan error mysqlnya
        echo mysqli_error();
    }
}