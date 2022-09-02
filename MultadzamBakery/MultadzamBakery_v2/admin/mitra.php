<?php
require 'functions.php';
session_start();

if (!isset($_SESSION["login"])) {
	header("Location: sign-in.php");
	exit;
}
$mitras = query("SELECT * FROM mitra");
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
					<li class="sidebar-item">
						<a class="sidebar-link" href="produk.php">
							<i class="align-middle" data-feather="tag"></i> <span class="align-middle">Produk</span>
						</a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="contact.php">
							<i class="align-middle" data-feather="mail"></i> <span class="align-middle">Pesan</span>
						</a>
					</li>
					<li class="sidebar-item active">
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
								<img src="img/icons/icon.png" class="avatar img-fluid rounded-circle mr-1" alt="Charles Hall" /> <span class="text-dark"><?= $akun['username'] ?>l</span>
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

					<h1 class="h3 mb-3">Pesan</h1>

					<div class="row">
						<?php foreach ($mitras as $mitra) : ?>
							<div class="col-md-12 ">
								<div class="card">
									<div class="card-header">
										<div class="card-body h-100">
											<div class="d-flex align-items-start">
												<img src="img/avatars/avatar.jpg" width="36" height="36" class="rounded-circle mr-2" alt="Charles Hall">
												<div class="flex-grow-1">
													<small class="float-right text-navy"><?= $mitra['tgl_mitra']; ?></small>
													<strong><?= $mitra['name_mitra']; ?></strong><br />
													<div class="border text-md text-muted p-2 mt-1">
														<strong>Nama : </strong> <?= $mitra['name_mitra']; ?><br>
														<strong>Email : </strong> <?= $mitra['email_mitra']; ?><br>
														<strong>Phone : </strong> <?= $mitra['phone_mitra']; ?><br>
														<strong>Address : </strong> <?= $mitra['address_mitra']; ?><br>
														<strong>Additional Information : </strong> <?= $mitra['add_information_mitra']; ?><br>

													</div><br>
													<a href="hapus.php?id_mitra=<?= $mitra['id_mitra']; ?>" onclick="return confirm('yakin?');" class="btn btn-sm btn-danger mt-1"><i class="feather-sm"></i>Delete</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
			</main>
		</div>
	</div>

	<script src="js/app.js"></script>

</body>

</html>