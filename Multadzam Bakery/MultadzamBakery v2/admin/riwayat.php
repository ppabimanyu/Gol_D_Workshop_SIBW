<?php
require 'functions.php';
session_start();

if (!isset($_SESSION["login"])) {
	header("Location: sign-in.php");
	exit;
}
$jumlahDataPerHalaman = 20;
$jumlahData = count(query("SELECT * FROM riwayat"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

$details = query("SELECT * FROM riwayat ORDER BY 1 DESC LIMIT $awalData, $jumlahDataPerHalaman");
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
					<li class="sidebar-item active">
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
							<div class="card card-body border-light shadow-sm table-wrapper table-responsive pt-0">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>ID</th>
											<th>Tanggal</th>
											<th>Nama</th>
											<th>Telepon</th>
											<th>Whatsapp / Email</th>
											<th style="max-width: 200px;">Alamat</th>
											<th style="width: 200px;">Shipping</th>
											<th>Status</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<!-- Item -->
										<?php foreach ($details as $detail) : ?>
											<tr>
												<td>
													<a href="detail_checkout.php?id=<?= $detail['id_checkout']; ?>" class="font-weight-bold">
														<?= $detail['id_checkout']; ?>
													</a>
												</td>
												<td>
													<span class="font-weight-normal"><?= $detail['tgl']; ?></span>
												</td>
												<td><span class="font-weight-normal"><?= $detail['nama']; ?></span></td>
												<td><span class="font-weight-normal"><?= $detail['phone']; ?></span></td>
												<td><span class="font-weight-normal"><?= $detail['wa-email']; ?></span></td>
												<td><span class="font-weight-normal"><?= $detail['alamat']; ?></span></td>
												<td><span class="font-weight-normal"><?= $detail['shipping']; ?>
													</span></td>

												<!-- Status -->
												<?php
												if ($detail['status'] === "Due") : ?>
													<td><span class="font-weight-normal"><?= $detail['status']; ?></span></td>
													<td>
													<?php endif; ?>

													<?php
													if ($detail['status'] === "Proses") : ?>
													<td><span class="font-weight-normal text-warning"><?= $detail['status']; ?></span></td>
													<td>
													<?php endif; ?>

													<?php
													if ($detail['status'] === "Finish") : ?>
													<td><span class="font-weight-normal text-success"><?= $detail['status']; ?></span></td>
													<td>
													<?php endif; ?>

													<?php
													if ($detail['status'] === "Canceled") : ?>
													<td><span class="font-weight-normal text-danger"><?= $detail['status']; ?></span></td>
													<td>
													<?php endif; ?>
													<!-- End Status -->
													<a class="text-danger" href="hapus.php?id_riwayat=<?= $detail['id_checkout']; ?>" onclick="return confirm('yakin?');"><span class="fas fa-trash-alt mr-2"></span>Remove</a>
													</td>
											</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
								<div class="card-footer px-3 border-0 d-flex align-items-center justify-content-between">
									<nav aria-label="Page navigation example">
										<ul class="pagination mb-0">
											<?php if ($halamanAktif > 1) : ?>
												<li class="page-item">
													<a class="page-link" href="?halaman=<?= $halamanAktif - 1; ?>">Previous</a>
												</li>
											<?php endif; ?>
											<?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
												<?php if ($i == $halamanAktif) : ?>
													<li class="page-item active">
														<a class="page-link" href="?halaman=<?= $i; ?>"><?= $i; ?></a>
													</li>
												<?php else : ?>
													<li class="page-item">
														<a class="page-link" href="?halaman=<?= $i; ?>"><?= $i; ?></a>
													</li>
												<?php endif; ?>
											<?php endfor; ?>
											<?php if ($halamanAktif < $jumlahHalaman) : ?>
												<li class="page-item">
													<a class="page-link" href="?halaman=<?= $halamanAktif + 1; ?>">Next</a>
												</li>
											<?php endif; ?>
										</ul>
									</nav>
									<div class="font-weight-bold small">Showing <b><?= $halamanAktif; ?></b> out of <b><?= $jumlahHalaman; ?></b> entries</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">

						</div>
					</div>
					<div class="row">
						<div class="col-12">

						</div>
					</div>
				</div>
			</main>
		</div>
	</div>

	<script src="js/app.js"></script>

</body>

</html>