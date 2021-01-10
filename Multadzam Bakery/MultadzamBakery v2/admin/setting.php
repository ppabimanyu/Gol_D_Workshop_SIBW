<?php
session_start();
require 'functions.php';

if (!isset($_SESSION["login"])) {
	header("Location: sign-in.php");
	exit;
}
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
								<img src="img/icons/icon.png" class="avatar img-fluid rounded-circle mr-1" /> <span class="text-dark"><?= $akun['username'] ?></span>
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
					<main class="content">
						<div class="container-fluid p-0">

							<h1 class="h3 mb-3">Settings</h1>
							<div class="col-md-9 col-xl-6">
								<div class="tab-content">
									<div class="tab-pane fade show active" id="account" role="tabpanel">

										<div class="card">
											<div class="card-header">
											</div>
											<div class="card-body">
												<form action="setting_proses.php" method="post">
													<div class="row">
														<div class="col-md-12">
															<div class="mb-3">
																<label class="form-label font-weight-bold" for="inputUsername">Username</label>
																<?php
																if (isset($_GET['usr'])) {
																	if ($_GET['usr'] == "berhasil") {
																?><div class="alert alert-success" role="alert">
																			Username Berhasil di Update!
																		</div><?php
																			}
																		};
																				?>
																<?php
																if (isset($_GET['usr'])) {
																	if ($_GET['usr'] == "gagal") {
																?><div class="alert alert-danger" role="alert">
																			Username Berhasil di Update!
																		</div><?php
																			}
																		};
																				?>
																<input type="text" name="username" class="form-control" id="inputUsername" placeholder="Username" required>
															</div>
														</div>
													</div>
													<button type="submit" name="submit" class="btn btn-primary">Save changes</button>
												</form>
												<hr><br>
												<h5 class="card-title font-weight-bold">Password</h5>
												<?php
												if (isset($_GET['pesan'])) {
													if ($_GET['pesan'] == "berhasil") {
												?><div class="alert alert-success" role="alert">
															Password Berhasil di Update!
														</div><?php
															}
														};
																?>
												<form action="update_password.php" method="POST">
													<div class="mb-3">
														<label class="form-label" for="inputPasswordCurrent">Current password</label>
														<input type="password" name="password" class="form-control" id="inputPasswordCurrent" required>
														<?php
														if (isset($_GET['pesan'])) {
															if ($_GET['pesan'] == "salah") {
														?><div class="alert alert-danger" role="alert">
																	Password salah!
																</div><?php
																	}
																};
																		?>
													</div>
													<div class="mb-3">
														<label class="form-label" for="inputPasswordNew">New password</label>
														<input type="password" name="password1" class="form-control" id="inputPasswordNew" required>
													</div>
													<div class="mb-3">
														<label class="form-label" for="inputPasswordNew2">Verify password</label>
														<input type="password" name="password2" class="form-control" id="inputPasswordNew2" required>
														<?php
														if (isset($_GET['pesan'])) {
															if ($_GET['pesan'] == "gagal") {
														?><div class="alert alert-danger" role="alert">
																	konfirmasi password tidak sesuai!
																</div><?php
																	}
																};
																		?>
													</div>
													<button type="submit" name="submit" class="btn btn-primary">Save changes</button>
												</form>


											</div>
										</div>

									</div>
									<div class="tab-pane fade" id="password" role="tabpanel">
										<div class="card">
											<div class="card-body">

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

				</div>
			</main>
		</div>
		</main>
	</div>
	</div>

	<script src="js/app.js"></script>

</body>

</html>