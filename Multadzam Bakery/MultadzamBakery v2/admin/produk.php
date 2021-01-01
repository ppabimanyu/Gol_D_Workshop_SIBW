<?php
require 'functions.php';
$ftmenus = query("SELECT * FROM featured_menu");
$produks = query("SELECT * FROM produk");
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<title>AdminKit Demo - Bootstrap 5 Admin Template</title>

	<link href="css/app.css" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.html">
					<span class="align-middle">Admin</span>
				</a>

				<ul class="sidebar-nav">
					<li class="sidebar-item">
						<a class="sidebar-link" href="index.php">
							<i class="align-middle" data-feather="shopping-cart"></i> <span class="align-middle">Pesanan</span>
						</a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="riwayat.php">
							<i class="align-middle" data-feather="trending-up"></i> <span class="align-middle">Riwayat</span>
						</a>
					</li>
					<li class="sidebar-item active">
						<a class="sidebar-link" href="produk.php">
							<i class="align-middle" data-feather="tag"></i> <span class="align-middle">Produk</span>
						</a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="contact.php">
							<i class="align-middle" data-feather="mail"></i> <span class="align-middle">Pesan</span>
						</a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="mitra.php">
							<i class="align-middle" data-feather="users"></i> <span class="align-middle">Mitra/Partner</span>
						</a>
					</li>
			</div>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle d-flex">
					<i class="hamburger align-self-center"></i>
				</a>

				<form class="d-none d-sm-inline-block">
					<div class="input-group input-group-navbar">
						<input type="text" class="form-control" placeholder="Search…" aria-label="Search">
						<button class="btn" type="button">
							<i class="align-middle" data-feather="search"></i>
						</button>
					</div>
				</form>

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-toggle="dropdown">
								<i class="align-middle" data-feather="settings"></i>
							</a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-toggle="dropdown">
								<img src="img/avatars/avatar.jpg" class="avatar img-fluid rounded mr-1" alt="Charles Hall" /> <span class="text-dark">Charles Hall</span>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="setting.php"><i class="align-middle mr-1" data-feather="settings"></i> Settings</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#"><i class="align-middle mr-1" data-feather="user"></i> Log out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0">

					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-body">
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
												<td width="100"><img src="../web/img/foto_produk/<?= $ftmenu['gambar_fm']; ?>" width="50"></td>
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
													<a href="hapus.php?id_produk=<?= $produk['id_produk']; ?>" onclick="return confirm('yakin?');" class="link-danger"><i class=" fas fa-trash"></i></a>
													<a href="ftmenu.php?id_produk=<?= $produk['id_produk']; ?>" class="link-success"><i class="fas fa-shopping-bag"></i></a>
												</td>
												<td width="100"><?= $produk['id_produk']; ?> </td>
												<td width="100"><img src="../web/img/foto_produk/<?= $produk['gambar_produk']; ?>" width="50"></td>
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
							</div>
						</div>
					</div>
				</div>
			</main>
		</div>
	</div>

	<script src="js/app.js"></script>

</body>

</html>