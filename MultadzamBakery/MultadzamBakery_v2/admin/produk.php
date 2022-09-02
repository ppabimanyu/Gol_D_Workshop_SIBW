<?php
require 'functions.php';
session_start();

if (!isset($_SESSION["login"])) {
	header("Location: sign-in.php");
	exit;
}
$ftmenus = query("SELECT * FROM featured_menu ORDER BY 1 DESC");
$produks = query("SELECT * FROM produk ORDER BY 1 DESC");
$akun = query("SELECT * FROM user WHERE id = 1")[0];
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

	<link rel="shortcut icon" href="img/icons/mdb-favicon.ico" />

	<title>Multadzam Bakery</title>

	<link href="css/app.css" rel="stylesheet">
	<!-- Volt CSS -->
	<link type="text/css" href="../css/volt.css" rel="stylesheet">
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

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<li class="nav-item dropdown">
							<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-toggle="dropdown">
								<i class="align-middle" data-feather="settings"></i>
							</a>

							<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-toggle="dropdown">
								<img src="img/icons/icon.png" class="avatar img-fluid rounded-circle mr-1" alt="Charles Hall" /> <span class="text-dark"><?= $akun['username'] ?></span>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="setting.php"><i class="align-middle mr-1" data-feather="settings"></i> Settings</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="logout.php"><i class="align-middle mr-1" data-feather="user"></i> Log out</a>
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
									<table class="table table-hover">
										<thead>
											<tr>
												<th>ID</th>
												<th>Produk</th>
												<th>Nama</th>
												<th>Harga</th>
												<th>Deskripsi</th>
												<th width="100">Action</th>
											</tr>
										</thead>
										<tbody>
											<!-- Item -->
											<?php foreach ($ftmenus as $ftmenu) : ?>
												<tr>
													<td>
														<a href="../invoice.html" class="font-weight-bold">
															<?= $ftmenu['id_produk']; ?>
														</a>
													</td>
													<td width="200">
														<img class="rounded" src="../web/img/foto_produk/<?= $ftmenu['gambar_fm']; ?>" width="120">
													</td>
													<td width="200"><span class="font-weight-bold"><?= $ftmenu['nama_fm']; ?></span></td>
													<td width="200"><span class="font-weight-bold text-warning">Rp<?= number_format($ftmenu['harga_fm']); ?></span></td>
													<td><span class="font-weight-normal"><?= $ftmenu['deskripsi_fm']; ?></span></td>

													<td>
														<a class="text-danger" href="hapus.php?id_fm=<?= $ftmenu['id_fm']; ?>" onclick="return confirm('yakin?');"><span class="fas fa-trash-alt mr-2"></span>Remove</a>
													</td>
												</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-body">
									<div class="mx-auto " style="width: 100px;font-family: 'Cormorant Upright', serif;
                                font-size: 18px;">Our Produk</div><br>
									<table class="table table-hover">
										<thead>
											<tr>
												<th>ID</th>
												<th>Produk</th>
												<th>Nama</th>
												<th>Harga</th>
												<th>Deskripsi</th>
												<th width="100">Action</th>
											</tr>
										</thead>
										<tbody>
											<!-- Item -->
											<?php foreach ($produks as $produk) : ?>
												<tr>
													<td>
														<a href="../invoice.html" class="font-weight-bold">
															<?= $produk['id_produk']; ?>
														</a>
													</td>
													<td width="200">
														<img class="rounded" src="../web/img/foto_produk/<?= $produk['gambar_produk']; ?>" width="120">
													</td>
													<td width="200"><span class="font-weight-bold"><?= $produk['nama_produk']; ?></span></td>
													<td width="200"><span class="font-weight-bold text-warning">Rp<?= number_format($produk['harga_produk']); ?></span></td>
													<td><span class="font-weight-normal"><?= $produk['deskripsi_produk']; ?></span></td>

													<td>
														<div class="btn-group">
															<button class="btn btn-link text-dark dropdown-toggle dropdown-toggle-split m-0 p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																<span class="icon icon-sm">
																	<span class="fas fa-ellipsis-h icon-dark"></span>
																</span>
																<span class="sr-only">Toggle Dropdown</span>
															</button>
															<div class="dropdown-menu">
																<a class="dropdown-item" href="ftmenu.php?id_produk=<?= $produk['id_produk']; ?>"><span class="fas fa-eye mr-2"></span>Add Featured</a>
																<a class="dropdown-item text-danger" href="hapus.php?id_produk=<?= $produk['id_produk']; ?>" onclick="return confirm('yakin?');"><span class="fas fa-trash-alt mr-2"></span>Remove</a>
															</div>
														</div>
													</td>
												</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-body">
									<h4>Tambah Produk</h4>

									<form action="tambah.php" method="post" enctype="multipart/form-data">
										<div class="mb-3">
											<label for="namaProduk" class="form-label">Nama Produk</label>
											<input type="text" class="form-control" id="namaProduk" name="namaProduk">

											<label for="hargaProduk" class="form-label">Harga</label>
											<input type="text" class="form-control" id="hargaProduk" name="hargaProduk">

											<label for="deskripsiProduk" class="form-label">Deskripsi</label>
											<textarea class="form-control" id="deskripsiProduk" name="deskripsiProduk"></textarea>

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