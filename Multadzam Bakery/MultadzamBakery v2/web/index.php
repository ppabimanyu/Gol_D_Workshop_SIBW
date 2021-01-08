<?php
require 'functions.php';
$fms = query("SELECT * FROM featured_menu");
$produks = query("SELECT * FROM produk");
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
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item me-4">
                            <a class="nav-link" href="menu.php">Menu</a>
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

    <!-- Featured Menu -->
    <div class="container" style="margin-top: 100px;">
        <div class="container">
            <div class="mx-auto" style="text-align: center; font-family: 'Cormorant Upright', serif; font-size: 22px;">Featured Menu</div><br>
            <div id="carouselExampleControls" class="carousel slide" data-mdb-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/page.jpeg" class="d-block w-100" alt="..." />
                    </div>
                    <?php foreach ($fms as $fm) : ?>
                        <div class="carousel-item">
                            <div class="container m-5">
                                <div class="row">
                                    <div class="col-xl-6" style="min-height: 400px; background-color: white;"> <a href="">
                                            <div class="bg-image hover-zoom">
                                                <img style="width: 600px; border-radius: 20px;" src="img/foto_produk/<?= $fm['gambar_fm']; ?>" class="w-100" />
                                            </div>
                                        </a></div>
                                    <div class="col-xl-6">
                                        <a href="" style="color:#707070">
                                            <h4><?= $fm['nama_fm']; ?></h4>
                                        </a>
                                        <p style=" font-family: 'Cormorant Upright', serif; font-size: 16px;"><?= $fm['deskripsi_fm']; ?></p>
                                        <h5 style="color:#DABC81 ;">Rp<?= number_format($fm['harga_fm']); ?></h5>
                                        <a class="btn btn-warning" href="produk.php?id_produk=<?= $fm['id_produk']; ?>">BUY NOW</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-mdb-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-mdb-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div><br><br><br>
        <!-- End Fetured Menu -->

        <!-- Produk -->
        <div class="container" style="width:68%; background-color:white; margin-left:17%">
            <div class="mx-auto" style="text-align: center; font-family: 'Cormorant Upright', serif; font-size: 22px;">
                Our Product
            </div>
            <div class="row">
                <?php foreach ($produks as $produk) : ?>
                    <div class="col-md-4 " style="text-align: center;">
                        <div class="row mt-5 mx-2" style="height: 150px;">
                            <div class="col-md-12">
                                <a href="produk.php?id_produk=<?= $produk['id_produk']; ?>">
                                    <div class="bg-image hover-zoom">
                                        <img style="border-radius: 10px" src="img/foto_produk/<?= $produk['gambar_produk']; ?>" alt="" class="w-100" />
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-12 mt-2">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="produk.php?id_produk=<?= $produk['id_produk']; ?>">
                                            <h5 class="text-dark" style="font-size: 14px; text-align:start; margin-left:10px;"><?= $produk['nama_produk']; ?></h5>
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="produk.php?id_produk=<?= $produk['id_produk']; ?>">
                                            <h5 style="font-size: 13px; text-align:end; color:#DABC81; margin-right:10px;">Rp<?= number_format($produk['harga_produk']); ?></h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br><br>
                    </div>
                <?php endforeach; ?>
            </div>
        </div><br><br><br><br>

        <!-- End Produk -->

        <!-- Testimoni -->
        <div class="container" style="width:66%; background-color:white; margin-left:17%">
            <div class="mx-auto" style="text-align: center; font-family: 'Cormorant Upright', serif; font-size: 22px;">
                Testimoni
            </div><br><br>

            <!-- End Testimoni -->
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body" style="text-align: center; height:200px">
                            <i class="fas fa-quote-left fa-2x"></i>
                            <p class="card-text" style="font-family: 'Cormorant Upright', serif; font-size: 16px;">
                                Rasa dan desain nya oke banget.
                                Beli di web juga sangat gampang dan praktis.
                            </p>
                            <h5 class="card-title">Nicolous D</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body" style="text-align: center; height:200px">
                            <i class="fas fa-quote-left fa-2x"></i>
                            <p class="card-text" style="font-family: 'Cormorant Upright', serif; font-size: 16px;">
                                Rasa dan desain nya oke banget.
                                Beli di web juga sangat gampang dan praktis.
                            </p>
                            <h5 class="card-title">Nicolous D</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body" style="text-align: center; height:200px">
                            <i class="fas fa-quote-left fa-2x"></i>
                            <p class="card-text" style="font-family: 'Cormorant Upright', serif; font-size: 16px;">
                                Rasa dan desain nya oke banget.
                                Beli di web juga sangat gampang dan praktis.
                            </p>
                            <h5 class="card-title">Nicolous D</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><br><br><br><br>

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