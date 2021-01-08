<?php
session_start();
require 'functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Multadzam Bakery</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />

    <!-- My Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Upright&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jomolhari&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ibarra+Real+Nova&display=swap" rel="stylesheet">
    <!-- My CSS -->
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/index.css">

</head>

<body>
    <!-- Start your project here-->
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
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
                    <a class="navbar-brand" href="#">Multadzam</a>
                    <!-- Left links -->
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <!-- Links -->
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link" href="menu.php">Menu</a>
                        </li>

                        <!-- Navbar dropdown -->
                        <li class="nav-item dropdown me-4">
                            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
                                About
                            </a>
                            <!-- Dropdown menu -->
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="about.php">About Us</a></li>
                                <li><a class="dropdown-item" href="mitra.php">Mitra/Partner</a></li>
                                <li><a class="dropdown-item" href="contact.php">Contact Us</a></li>
                            </ul>
                        </li>
                        <li><a href="cart.php" class="link-dark"><i class=" fas fa-shopping-bag fa-2x"></i></a></li>
                    </ul>
                </div>
                <!-- Collapsible wrapper -->
            </div>
            <!-- Container wrapper -->
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Mitra -->
    <div class="container" style=" margin-top: 100px; width:66%; background-color:white; margin-left:17%; min-height:620px;">
        <!--Section: Contact v.2-->
        <section class="mb-4">

            <!--Section heading-->
            <h2 class="h1-responsive font-weight-bold text-center my-4" style="font-family: 'Cormorant Upright', serif; font-size: 22px;">Checkout</h2>
            <!--Section description-->
            <div class="alert alert-success" role="alert">
                Semua pesanan akan diproses setelah melakukan pemesanan. Mengenai metode pembayaran dan biaya pengiriman mohon tunggu konfirmasi dari staff kami.
            </div><br>
            <h5>Checkout</h5>
            <hr style="color: red;">

            <form id="contact-form" name="contact-form" action="checkout_proses.php" method="POST">
                <div class="row mb-5">

                    <!--Grid column-->
                    <div class="col-md-6 mb-md-0 mb-5">
                        <h5 style="color:#DC4C47;">Billing Details</h5><br>

                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12 mb-5">
                                <div class="md-form mb-0">
                                    <label for="nama" class="">Nama Penerima</label>
                                    <input type="text" id="nama" name="nama" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-6 mb-5">
                                <div class="md-form mb-0">
                                    <label for="phone" class="">Telepon</label>
                                    <input type="text" id="phone" name="phone" class="form-control" required>
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6 mb-5">
                                <div class="md-form mb-0">
                                    <label for="email" class="">No. Whatsapp / Email</label>
                                    <input type="text" id="email" name="wa_email" class="form-control" required>
                                </div>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid row-->
                            <div class="col-md-12 mb-5">
                                <div class="md-form mb-0">
                                    <label for="alamat" class="">Alamat</label>
                                    <input type="text" id="alamat" name="alamat" class="form-control" required>
                                </div>
                            </div>
                            <!--Grid row-->

                            <!--Grid column-->
                            <div class="col-md-12 mb-5">

                                <div class="md-form">
                                    <label for="catatan">Catatan</label>
                                    <textarea type="text" id="catatan" name="catatan" rows="5" class="form-control md-textarea"></textarea>
                                </div>

                            </div>
                        </div>
                        <!--Grid row-->
                    </div>
                    <!--Grid column-->
                    <div class="col-md-6 mb-md-0 mb-5">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-10">
                                <h5 style="color:#DC4C47;">Your Order</h5>
                            </div>
                        </div><br>
                        <?php $total = 0; ?>
                        <?php foreach ($_SESSION['keranjang'] as $id_produk => $qty) : ?>
                            <?php
                            $brg = query("SELECT * FROM produk WHERE id_produk = $id_produk")[0];
                            $gambar_produk = ($brg["gambar_produk"]);
                            $nama_produk = ($brg["nama_produk"]);
                            $harga_produk = ($brg["harga_produk"]);
                            $_SESSION['subharga'][$id_produk] = $brg["harga_produk"] * $qty;
                            ?>

                            <div class="row">
                                <div class="col-md-2" style="text-align: center;"></div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="bg-image hover-zoom">
                                                <img style="border-radius: 10px" src="img/foto_produk/<?= $gambar_produk; ?>" alt="" class="w-100" />
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="col-md-12">
                                                <h5><?= $nama_produk; ?></h5>
                                            </div>
                                            <h5 style="font-family: 'Jomolhari', serif; font-size: 13px; color:#DABC81;">Rp<?= number_format($harga_produk); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2" style="font-family: 'Jomolhari', serif; margin-top:-30px;"><br><br>x<?= $_SESSION['keranjang'][$id_produk] ?></div>
                                <div class="col-md-2" style="font-family: 'Jomolhari', serif; margin-top:-30px;"><br><br>Rp<?= $_SESSION['subharga'][$id_produk]; ?></div>
                            </div>
                            <br>
                            <?php
                            $total += $_SESSION['subharga'][$id_produk]; ?>
                        <?php endforeach; ?>

                        <input type="hidden" name="total" value="<?= $total; ?>">

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
                                <h5>Rp<?= $total; ?></h5><br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-10">
                                <div class="border rounded-3 mb-5">
                                    <h5 class="m-2 ms-4">Shipping <br>
                                        <hr>
                                    </h5>
                                    <div class="form-check m-2 ms-4">
                                        <input class="form-check-input" type="radio" name="shipping" value="Kirim Dengan Minimal Order; Staff Kami Akan Verifikasi Melalui Telepon." id="shipping1">
                                        <label class="form-check-label" for="shipping1">
                                            Kirim Dengan Minimal Order; Staff Kami Akan Verifikasi Melalui Telepon.
                                        </label>
                                    </div>
                                    <div class="form-check m-2 ms-4">
                                        <input class="form-check-input" type="radio" name="shipping" value="Ambil di Outlet Multadzam" id="shipping2" checked>
                                        <label class="form-check-label" for="shipping2">
                                            Ambil di Outlet Multadzam
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <!-- Submit Button -->
                                        <button type="submit" name="submit" class="btn btn-lg btn-warning">
                                            KIRIM PESANAN
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </section>
        <!--Section: Contact v.2-->
    </div><br><br>
    <!-- End Checkout -->

    <!-- Footer -->
    <footer class="bg-light text-center text-lg-start">
        <!-- Grid container -->
        <div class="container p-4" style="width:60%; text-align:center">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h5 style="font-family: 'Jomolhari', serif;">Multadzam Bakery</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                            <a href="menu.php" class="text-dark" style="font-family: 'Ibarra Real Nova', serif;">Menu</a>
                        </li>
                        <li>
                            <a href="about.php" class="text-dark" style="font-family: 'Ibarra Real Nova', serif;">About Us</a>
                        </li>
                        <li>
                            <a href="mitra.php" class="text-dark" style="font-family: 'Ibarra Real Nova', serif;">Mitra/Partner</a>
                        </li>
                        <li>
                            <a href="contact.php" class="text-dark" style="font-family: 'Ibarra Real Nova', serif;">Contact Us</a>
                        </li>

                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h5 style="font-family: 'Jomolhari', serif;">Contact Us</h5>

                    <ul class="list-unstyled mb-0">
                        <li>
                            <p>Phone : 08123456789</p>
                        </li>
                        <li>
                            <p>Whatsapp : 08123456789</p>
                        </li>
                        <li>
                            <p>Email : Multadzam@gmail.com</p>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h5 style="font-family: 'Jomolhari', serif;">Follow</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!" class="text-dark"><i class="fab fa-facebook-square"> Facebook</i></a>
                        </li>
                        <li>
                            <a href="#!" class="text-dark"><i class="fab fa-instagram"></i> Instagram</a>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2020 Copyright:
            <a class="text-dark" href="index.php">MultadzamBakery</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- End Footer -->




    <!-- End your project here-->
</body>

<!-- MDB -->
<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- Custom scripts -->
<script type="text/javascript"></script>

</html>