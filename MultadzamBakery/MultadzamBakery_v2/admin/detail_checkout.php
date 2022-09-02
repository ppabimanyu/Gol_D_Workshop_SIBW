<?php
require 'functions.php';
session_start();

if (!isset($_SESSION["login"])) {
	header("Location: sign-in.php");
	exit;
}
$id = $_GET['id'];
$orders = query("SELECT * FROM detail_checkout WHERE id_checkout = $id");
$checkout = query("SELECT * FROM checkout WHERE id_checkout = $id")[0];
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
							<div class="card card-body border-light shadow-sm table-wrapper table-responsive pt-0 p-5">
								<section class="mb-4">

									<h2 class="h1-responsive font-weight-bold text-center my-4" style="font-family: 'Cormorant Upright', serif; font-size: 22px;">Checkout</h2>
									<h5>Order Details</h5>
									<hr style="color: red;">
									<div class="row">

										<!--Grid column-->
										<div class="col-md-6 mb-md-0 mb-5">
											<h5 style="color:#DC4C47;">Billing Details</h5><br>
											<div class="row border" style="border-radius: 5px;">
												<div class="col-md-12 mb-5 mt-5">
													<div class="row">
														<div class="col-md-3 m-2">
															<h5 style="margin-top:-30px;">ID</h5>
														</div>
														<div class="col-md-8 m-2">
															<h5 style="margin-top:-30px; text-align:right"><?= $checkout['id_checkout']; ?></h5>
														</div>
														<hr>
													</div>
												</div>
												<div class="col-md-12 mb-5">
													<div class="row">
														<div class="col-md-3 m-2">
															<h5 style="margin-top:-30px;">Tanggal :</h5>
														</div>
														<div class="col-md-8 m-2">
															<h5 style="margin-top:-30px; text-align:right"><?= $checkout['tgl']; ?></h5>
														</div>
														<hr>
													</div>
												</div>
												<div class="col-md-12 mb-5">
													<div class="row">
														<div class="col-md-3 m-2">
															<h5 style="margin-top:-30px;">Nama :</h5>
														</div>
														<div class="col-md-8 m-2">
															<h5 style="margin-top:-30px; text-align:right"><?= $checkout['nama']; ?></h5>
														</div>
														<hr>
													</div>
												</div>
												<div class="col-md-12 mb-5">
													<div class="row">
														<div class="col-md-3 m-2">
															<h5 style="margin-top:-30px;">Telepon :</h5>
														</div>
														<div class="col-md-8 m-2">
															<h5 style="margin-top:-30px; text-align:right"><?= $checkout['phone']; ?></h5>
														</div>
														<hr>
													</div>
												</div>
												<div class="col-md-12 mb-5">
													<div class="row">
														<div class="col-md-3  m-2">
															<h5 style="margin-top:-30px;">Contact :</h5>
														</div>
														<div class="col-md-8 m-2">
															<h5 style="margin-top:-30px; text-align:right"><?= $checkout['wa-email']; ?></h5>
														</div>
														<hr>
													</div>
												</div>
												<div class="col-md-12 mb-5">
													<div class="row">
														<div class="col-md-3  m-2">
															<h5 style="margin-top:-30px;">Alamat :</h5>
														</div>
														<div class="col-md-8 m-2">
															<h5 style="margin-top:-30px; text-align:right"><?= $checkout['alamat']; ?></h5>
														</div>
														<hr>
													</div>
												</div>
												<div class="col-md-12 mb-5">
													<div class="row">
														<div class="col-md-3  m-2">
															<h5 style="margin-top:-30px;">Catatan :</h5>
														</div>
														<div class="col-md-8 m-2">
															<h5 style="margin-top:-30px; text-align:right"><?= $checkout['catatan']; ?></h5>
														</div>
														<hr>
													</div>
												</div>
												<div class="col-md-12 mb-5">
													<div class="row">
														<div class="col-md-3  m-2">
															<h5 style="margin-top:-30px;">Shipping :</h5>
														</div>
														<div class="col-md-8 m-2">
															<h5 style="margin-top:-30px; text-align:right"><?= $checkout['shipping']; ?></h5>
														</div>
														<hr>
													</div>
												</div>
												<div class="col-md-12 mb-5">
													<div class="row">
														<div class="col-md-3 m-2">
															<h5 style="margin-top:-30px;">Status :</h5>
														</div>
														<div class="col-md-8 m-2">
															<?php
															if ($checkout['status'] === "Due") : ?>
																<h5 style="margin-top:-30px; text-align:right" class="font-weight-normal"><?= $checkout['status']; ?></h5>

															<?php endif; ?>

															<?php
															if ($checkout['status'] === "Proses") : ?>
																<h5 style="margin-top:-30px; text-align:right" class="font-weight-normal text-warning"><?= $checkout['status']; ?></h5>

															<?php endif; ?>

															<?php
															if ($checkout['status'] === "Finish") : ?>
																<h5 style="margin-top:-30px; text-align:right" class="font-weight-normal text-success"><?= $checkout['status']; ?></h5>

															<?php endif; ?>

															<?php
															if ($checkout['status'] === "Canceled") : ?>
																<h5 style="margin-top:-30px; text-align:right" class="font-weight-normal text-danger"><?= $checkout['status']; ?></h5>

															<?php endif; ?>
															<!-- End Status -->
														</div>
													</div>
												</div>
											</div>
										</div>

										<!-- Grid column -->
										<!-- skjhfdjsdaklldsfkjgjbbjbfnd -->
										<div class="col-md-6 mb-md-0 mb-5">
											<div class="row">
												<div class="col-md-2"></div>
												<div class="col-md-10">
													<h5 style="color:#DC4C47;">Your Order</h5>
												</div>
											</div><br>
											<?php foreach ($orders as $order) : ?>
												<div class="row">
													<div class="col-md-2"></div>
													<div class="col-md-6">
														<div class="row">
															<div class="col-md-12">
																<div class="col-md-12">
																	<h5><?= $order['nama_produk']; ?></h5>
																</div>
																<div class="col-md-12">
																	<h5 style="font-size: 13px; color:#DABC81;">Rp<?= number_format($order['harga']); ?></h5>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-2" style="margin-top:-30px;"><br><br>x<?= $order['qty']; ?></div>
													<div class="col-md-2" style="margin-top:-30px;"><br><br>Rp<?= number_format($order['sub_harga']); ?></div>
												</div>
												<br>
											<?php endforeach; ?>
											<?php
											?>
											<div class="row">
												<div class="col-md-2"></div>
												<div class="col-md-10">
													<hr>
												</div>
											</div>
											<div class="row">
												<div class="col-md-8"></div>
												<div class="col-md-2">
													<h5>Total</h5>
												</div>
												<div class="col-md-2">
													<h5>Rp<?= number_format($checkout['total']); ?></h5><br>
												</div>
											</div>
										</div>
									</div>
								</section>
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