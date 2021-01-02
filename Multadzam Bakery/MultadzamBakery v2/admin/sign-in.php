<?php
//masukkan variabel statik, variabel ini merupakan variabel yang username & password, untuk sistem pada realnya
//username dan password dapat di cek dari database.
require 'functions.php';
$login = query("SELECT * FROM masuk")[0];
$username = $login["username"];
$password = md5($login["password"]);
//mulai session
session_start();
//cek cookie, dalam sistem login sederhana ini, cookie diberinama "cookielogin"
if (isset($_COOKIE['cookielogin'])) {
	//cek cookie login dengan password dan username yang valid
	//$user = $_COOKIE['cookielogin']['username'];
	//print_r($user);
	if (($_COOKIE['cookielogin']['user'] == $username) && ($_COOKIE['cookielogin']['pass'] == $password)) {
		print_r($_COOKIE);
		//jika valid set status login 1
		$_SESSION['logged'] = 1;
		//redirect ke halaman member area
		header('Location: index.php');
	}
}
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
	<link type="text/css" href="css/volt.css" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<div class="main">
			<main>

				<!-- Section -->
				<section class="d-flex align-items-center my-5 mt-lg-10 mb-lg-10">
					<div class="container">
						<div class="row justify-content-center form-bg-image" data-background-lg="img/illustrations/signin.svg">
							<div class="col-12 d-flex align-items-center justify-content-center">
								<div class="bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
									<div class="text-center text-md-center mb-4 mt-md-0">
										<h1 class="mb-0 h3">Sign in</h1><br>
										<?php
										if (isset($_GET['pesan'])) {
											if ($_GET['pesan'] == "gagal") {
										?><div class="alert alert-danger" role="alert">
													Username/Password Salah!
												</div><?php
													}
												};
														?>
									</div>
									<form action="login-proses.php" method="POST" class="mt-4">
										<!-- Form -->
										<div class="form-group mb-4">
											<label for="email">Username</label>
											<div class="input-group">
												<span class="input-group-text" id="basic-addon1"><span class="fas fa-envelope"></span></span>
												<input type="text" class="form-control" placeholder="Username" id="email" name="username" autofocus required>
											</div>
										</div>
										<!-- End of Form -->
										<div class="form-group mb-4">
											<label for="password">Password</label>
											<div class="input-group">
												<span class="input-group-text" id="basic-addon2"><span class="fas fa-unlock-alt"></span></span>
												<input type="password" placeholder="Password" class="form-control" id="password" name="password" required>
											</div>
										</div>
										<!-- End of Form -->
										<div class="d-flex justify-content-between align-items-top mb-4">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" value="true" id="setcookie" name="setcookie">
												<label class="form-check-label mb-0" for="setcookie">
													Remember me
												</label>
											</div>
										</div>
										<button type="submit" name="submit" value="true" class="btn btn-block btn-primary">Sign in</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</section>
			</main>
		</div>
	</div>

	<script src="js/app.js"></script>


</body>

</html>