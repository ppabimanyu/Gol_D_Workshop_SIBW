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
                            <a class="nav-link  active" href="menu.php">Menu</a>
                        </li>

                        <!-- Navbar dropdown -->
                        <li class="nav-item dropdown me-4">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
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

    <!-- Detail Produk -->
    <div class="cart" style="background-color:#F9F9F9; margin-top:-100px;">
        <div class="container" style="background-color:#F9F9F9; padding-top: 200px; width:66%; margin-left:17%; min-height:620px">
            <div class="mx-auto" style="text-align: center; font-family: 'Cormorant Upright', serif; font-size: 22px;">Cart</div><br>
            <div class="container" style="background-color:white; padding-top:60px; padding-bottom: 50px;">
                <?php
                if (empty($_SESSION['keranjang'])) : ?>
                    <h1 style="text-align: center; font-family: 'Cormorant Upright', serif; font-size: 22px; text-align:center">Empty</h1>
            </div>
        <?php endif; ?>
        <?php
        if (!empty($_SESSION['keranjang'])) : ?>

            <?php foreach ($_SESSION['keranjang'] as $id_produk => $qty) : ?>
                <?php
                $brg = query("SELECT * FROM produk WHERE id_produk = $id_produk")[0];
                $gambar_produk = ($brg["gambar_produk"]);
                $nama_produk = ($brg["nama_produk"]);
                $harga_produk = ($brg["harga_produk"]);
                $_SESSION['subharga'][$id_produk] = $brg["harga_produk"] * $qty;
                ?>

                <div class="row">
                    <div class="col-md-2" style="text-align: center;"><br><br><a class="link-danger" href="hapus_cart.php?id=<?= $id_produk ?>"><i class="fas fa-trash-alt fa-2x"></i></a></div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="bg-image hover-zoom">
                                    <a href="produk.php?id_produk=<?= $id_produk; ?>"> <img style="border-radius: 10px" src="img/foto_produk/<?= $gambar_produk; ?>" alt="" class="w-100" /></a>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="col-md-12">
                                    <a style="color: black;" href="produk.php?id_produk=<?= $id_produk; ?>">
                                        <h5><?= $nama_produk; ?></h5>
                                    </a>
                                </div><br>
                                <a style="font-family: 'Jomolhari', serif; font-size: 13px; color:#DABC81;" href="produk.php?id_produk=<?= $id_produk; ?>">
                                    <h5>Rp<?= number_format($harga_produk); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2" style="font-family: 'Jomolhari', serif;"><br><br>x<?= $_SESSION['keranjang'][$id_produk] ?></div>
                    <div class="col-md-2" style="font-family: 'Jomolhari', serif;"><br><br><?= $_SESSION['subharga'][$id_produk]; ?></div>
                    <div class="container">
                        <br>
                        <hr>
                    </div>
                </div>
                <br>
            <?php endforeach; ?>
            <div class="row">
                <div class="col-md-8"></div>
                <div class="col-md-2"><a href="menu.php" class=" btn btn-lg btn-warning">Lanjut Belanja</a></div>
                <div class="col-md-2"><a href="checkout.php" class=" btn btn-lg btn-warning">Checkout</a></div>
            </div>
        <?php endif; ?>


        </div><br><br>
    </div>
    </div>
    <!-- End Detail Produk -->

    <!-- Footer -->
    <footer class=" text-center text-lg-start" style="margin-top: 60px;">
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
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.1)">
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