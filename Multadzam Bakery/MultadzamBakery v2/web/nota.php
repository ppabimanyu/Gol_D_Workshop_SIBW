<?php
require 'functions.php';
$orders = query("SELECT * FROM detail_checkout WHERE id_checkout IN( SELECT MAX(id_checkout) FROM detail_checkout )");
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
    <div class="container" style=" margin-top: 100px; width:66%; background-color:white; margin-left:17%">
        <!--Section: Contact v.2-->
        <section class="mb-4">

            <h2 class="h1-responsive font-weight-bold text-center my-4" style="font-family: 'Cormorant Upright', serif; font-size: 22px;">Checkout</h2>
            <h5>Order Details</h5>
            <hr style="color: red;">
            <div class="alert alert-success" role="alert">
                Thank you. Your order has been received.
            </div><br>
            <div class="row">

                <!--Grid column-->
                <div class="col-md-6 mb-md-0 mb-5">
                    <h5 style="color:#DC4C47;">Billing Details</h5><br>

                    <?php
                    $order = query("SELECT * FROM detail_checkout WHERE id_checkout IN( SELECT MAX(id_checkout) FROM detail_checkout )")[0];
                    $id = $order['id_checkout'];
                    $checkout = query("SELECT * FROM checkout WHERE id_checkout = $id")[0];
                    ?>

                    <div class="row border" style="border-radius: 10px;">
                        <div class="col-md-12 mb-5 mt-5">
                            <div class="row">
                                <div class="col-md-3 m-2">
                                    <h5 style="font-family: 'Jomolhari', serif; margin-top:-30px;">Nama :</h5>
                                </div>
                                <div class="col-md-8 m-2">
                                    <h5 style="font-family: 'Jomolhari', serif; margin-top:-30px; text-align:right"><?= $checkout['nama']; ?></h5>
                                </div>
                                <hr>
                            </div>
                        </div>
                        <div class="col-md-12 mb-5">
                            <div class="row">
                                <div class="col-md-3  m-2">
                                    <h5 style="font-family: 'Jomolhari', serif; margin-top:-30px;">Contact :</h5>
                                </div>
                                <div class="col-md-8 m-2">
                                    <h5 style="font-family: 'Jomolhari', serif; margin-top:-30px; text-align:right"><?= $checkout['wa-email']; ?></h5>
                                </div>
                                <hr>
                            </div>
                        </div>
                        <div class="col-md-12 mb-5">
                            <div class="row">
                                <div class="col-md-3  m-2">
                                    <h5 style="font-family: 'Jomolhari', serif; margin-top:-30px;">Alamat :</h5>
                                </div>
                                <div class="col-md-8 m-2">
                                    <h5 style="font-family: 'Jomolhari', serif; margin-top:-30px; text-align:right"><?= $checkout['alamat']; ?></h5>
                                </div>
                                <hr>
                            </div>
                        </div>
                        <div class="col-md-12 mb-5">
                            <div class="row">
                                <div class="col-md-3  m-2">
                                    <h5 style="font-family: 'Jomolhari', serif; margin-top:-30px;">Catatan :</h5>
                                </div>
                                <div class="col-md-8 m-2">
                                    <h5 style="font-family: 'Jomolhari', serif; margin-top:-30px; text-align:right"><?= $checkout['catatan']; ?></h5>
                                </div>
                                <hr>
                            </div>
                        </div>
                        <div class="col-md-12 mb-5">
                            <div class="row">
                                <div class="col-md-3  m-2">
                                    <h5 style="font-family: 'Jomolhari', serif; margin-top:-30px;">Shipping :</h5>
                                </div>
                                <div class="col-md-8 m-2">
                                    <h5 style="font-family: 'Jomolhari', serif; margin-top:-30px; text-align:right"><?= $checkout['shipping']; ?></h5>
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
                                            <h5 style="font-family: 'Jomolhari', serif; font-size: 13px; color:#DABC81;">Rp<?= number_format($order['harga']); ?></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2" style="font-family: 'Jomolhari', serif; margin-top:-30px;"><br><br>x<?= $order['qty']; ?></div>
                            <div class="col-md-2" style="font-family: 'Jomolhari', serif; margin-top:-30px;"><br><br>Rp<?= number_format($order['sub_harga']); ?></div>
                        </div>
                        <br>
                    <?php endforeach; ?>
                    <?php
                    $id = $order['id_checkout'];
                    $total = query("SELECT * FROM checkout WHERE id_checkout = $id")[0];
                    ?>
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-10">
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8"></div>
                        <div class="col-md-1">
                            <h5 style="font-family: 'Jomolhari', serif;">Total</h5>
                        </div>
                        <div class="col-md-3">
                            <h5 style="font-family: 'Jomolhari', serif; text-align:right;">Rp<?= number_format($total['total']); ?></h5><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-9"></div>
                        <div class="col-md-3">
                            <div class="col-md-12"><a href="menu.php" class=" btn btn-warning">Lanjut Belanja</a></div>
                        </div>
                    </div>
                </div>
            </div>
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