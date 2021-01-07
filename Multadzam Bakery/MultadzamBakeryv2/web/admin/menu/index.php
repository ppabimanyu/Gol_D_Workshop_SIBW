<?php
require '../functions.php';
$ftmenus = query("SELECT * FROM featured_menu");
$produks = query("SELECT * FROM produk");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Material Design for Bootstrap</title>
  <!-- MDB icon -->
  <link rel="icon" href="../../img/mdb-favicon.ico" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="../../css/mdb.min.css" />

  <!-- My Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Upright&display=swap" rel="stylesheet">
  <!-- My CSS -->
  <link rel="stylesheet" href="../../css/navbar.css">

</head>

<body>
  <!-- Start your project here-->
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <!-- Container wrapper -->
      <div class="container-fluid">

        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Navbar brand -->
          <a class="navbar-brand" href="#">Admin</a>
          <!-- Left links -->
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <!-- Links -->
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pesanan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../pesan/pesan.php">Pesan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../mitra/mitra.php">Mitra</a>
            </li>
            <!-- Navbar dropdown -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                Informasi Web
              </a>
              <!-- Dropdown menu -->
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Testimoni</a></li>
                <li><a class="dropdown-item" href="#">About Us</a></li>
                <li><a class="dropdown-item" href="#">Contact Us</a></li>
              </ul>
          </ul>
          <!-- Left links -->

          <!-- Login -->
          <div class="d-flex input-group w-auto">
            <!-- Avatar -->
            <div class="nav-item dropdown">
              <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                <img src="https://mdbootstrap.com/img/Photos/Avatars/img (31).jpg" class="rounded-circle" height="30" alt="" loading="lazy" />
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">My profile</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Logout</a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- Collapsible wrapper -->
      </div>
      <!-- Container wrapper -->
    </div>
  </nav>
  <!-- End Navbar -->

  <!-- Featured Menu -->
  <div class="container mt-5">
    <div class="mx-auto" style="width: 120px;font-family: 'Cormorant Upright', serif;
  font-size: 18px;">Featured Menu</div><br>
    <table border="1" cellpadding="10" cellspacing="0">

      <tr>
        <th>Action</th>
        <th>ID Produk</th>
        <th>Produk</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Deskripsi</th>
      </tr>

      <?php foreach ($ftmenus as $ftmenu) : ?>
        <tr>
          <td>
            <a href="../hapus.php?id_fm=<?= $ftmenu['id_fm']; ?>" onclick="return confirm('yakin?');" class="link-danger"><i class=" fas fa-trash"></i></a>
          </td>
          <td width="100"><?= $ftmenu['id_fm']; ?> </td>
          <td width="100"><img src="../../img/foto_produk/<?= $ftmenu['gambar_fm']; ?>" width="50"></td>
          <td width="300"><?= $ftmenu['nama_fm']; ?></td>
          <td width="100">Rp<?= number_format($ftmenu['harga_fm']); ?></td>
          <td width=max><?= $ftmenu['deskripsi_fm']; ?></td>
        </tr>
      <?php endforeach; ?>


    </table>
    <br><br>

    <div class="mx-auto" style="width: 100px;font-family: 'Cormorant Upright', serif;
  font-size: 18px;">Our Produk</div><br>
    <table border="1" cellpadding="10" cellspacing="0">

      <tr>
        <th>Action</th>
        <th>ID Produk</th>
        <th>Produk</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Deskripsi</th>
      </tr>

      <?php foreach ($produks as $produk) : ?>
        <tr>
          <td>
            <a href="../hapus.php?id_produk=<?= $produk['id_produk']; ?>" onclick="return confirm('yakin?');" class="link-danger"><i class=" fas fa-trash"></i></a>
            <a href="ftmenu.php?id_produk=<?= $produk['id_produk']; ?>" class="link-success"><i class="fas fa-shopping-bag"></i></a>
          </td>
          <td width="100"><?= $produk['id_produk']; ?> </td>
          <td width="100"><img src="../../img/foto_produk/<?= $produk['gambar_produk']; ?>" width="50"></td>
          <td width="300"><?= $produk['nama_produk']; ?></td>
          <td width="100">Rp<?= number_format($produk['harga_produk']); ?></td>
          <td width="max"><?= $produk['deskripsi_produk']; ?></td>
        </tr>
      <?php endforeach; ?>


    </table>
    <br><br>
    <h4>Tambah Produk</h4>

    <form action="tambah.php" method="post" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="namaProduk" class="form-label">Nama Produk</label>
        <input type="text" class="form-control" id="namaProduk" name="namaProduk">

        <label for="hargaProduk" class="form-label">Harga</label>
        <input type="text" class="form-control" id="hargaProduk" name="hargaProduk">

        <label for="deskripsiProduk" class="form-label">Deskripsi</label>
        <input type="text" class="form-control" id="deskripsiProduk" name="deskripsiProduk">

        <label for="formFile" class="form-label">Default file input example</label>
        <input class="form-control" type="file" id="formFile" name="fotoProduk">
        <br> <button type="submit" name="submit" class="btn btn-warning">Submit</button>
    </form>

  </div>


  <!-- End your project here-->
</body>

<!-- MDB -->
<script type="text/javascript" src="../../js/mdb.min.js"></script>
<!-- Custom scripts -->
<script type="text/javascript"></script>

</html>