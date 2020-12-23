<?php
// koneksi
require 'functions.php';


// cek submit sudah ditekan atau belum 
if (!isset($_POST["pesan"])) {
    header("Location: produk.php");
    exit;
}

// cek submit sudah ditekan atau belum 
if (isset($_POST["pesan"])) {
    // ambil data dari tiap elemen

    // var_dump($_POST);
    // die;

    $brg = query("SELECT * FROM tbl_barang WHERE id = id")[0];
    $foto_roti = ($brg["foto_roti"]);
    $nama_roti = ($brg["nama_roti"]);
    $harga_roti = ($brg["harga_roti"]);
    $qty = ($_POST["quantity"]);

    $id_produk = $_POST['id'];

    session_start();

    if (isset($_SESSION['keranjang'][$id_produk])) {
        $_SESSION['keranjang'][$id_produk] += $qty;
    } else {
        $_SESSION['keranjang'][$id_produk] = $qty;
    }
    $_SESSION['subharga'][$id_produk] = $brg["harga_roti"] * $_SESSION['keranjang'][$id_produk];

    if (isset($_SESSION['total'])) {
        $_SESSION['total'] += $_SESSION['subharga'][$id_produk];
    } else {
        $_SESSION['total'] = $_SESSION['subharga'][$id_produk];
    }
    var_dump($_SESSION['total']);

    // query insert data
    // $query = "INSERT INTO cart
    //             VALUES
    //             ('', '$nama_roti', '$foto_roti', '$harga_roti', '$qty', '$subharga')";
    // mysqli_query($conn, $query);

    // $carts = query("SELECT * FROM cart");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Multadzam Bakery</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/style.css">
    <!-- My CSS -->
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/menu.css">
</head>

<body>

    <!-- Start your project here-->
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Multadzam Bakery</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mr-2">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-2 active" href="menu.php">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mr-2" href="#">Promo</a>
                    </li>
                    <li class="nav-item dropdown mr-2">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About
                        </a>
                        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                            <a class="dropdown-item" href="#">About Us</a>
                            <a class="dropdown-item" href="contact.php">Contact Us</a>
                            <a class="dropdown-item" href="mitra.php">Mitra/Partner</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#"><i class="fas fa-cart-plus fa-2x "></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Menu -->
    <div class="menu">
        <div class="container"><br><br><br><br><br>
            <h3>Keranjang</h3><br><br>
            <hr>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-2">
                    <h3>Produk</h3>
                </div>
                <div class="col-md-2">
                    <h3>Nama</h3>
                </div>
                <div class="col-md-2">
                    <h3>Harga</h3>
                </div>
                <div class="col-md-2">
                    <h3>Jumlah</h3>
                </div>
                <div class="col-md-2">
                    <h3>Subtotal</h3>
                </div>
            </div>
            <hr><br>
            <?php foreach ($_SESSION["keranjang"] as $id_produk => $qty) : ?>
                <div class="row">
                    <div class="col-md-2"><a href="">hapus</a></div>

                    <div class="col-md-2"><img src="<?= $foto_roti; ?>" alt="" width="100px"> </div>

                    <div class="col-md-2"><?= $nama_roti; ?></div>

                    <div class="col-md-2"><?= $harga_roti; ?></div>

                    <div class="col-md-2"><?= $qty; ?></div>

                    <div class="col-md-2"><?= $_SESSION['subharga'][$id_produk]; ?></div>
                </div>

                <br><br>
                <hr><br><br>
            <?php endforeach; ?>
            <div class="row">
                <div class="col-md-9"></div>
                <div class="col-md-3">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Total Harga</h4>
                        </div>
                        <div class="col-md-6"><input type="text" value="<?= $_SESSION['total']; ?>"></div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-7">
                        </div>
                        <div class="col-md-5"><a href="checkout.php" class="btn btn-primary">Checkout</a></div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
    </div>
    </div>
    </div>
    <!-- Akhir Menu -->

    <!-- Footer -->
    <footer class="page-footer font-small mdb-color pt-4 ">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">

            <!-- Footer links -->
            <div class="row text-center text-md-left mt-3 pb-3">

                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Multadzam Bakery</h6>
                    <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
                        consectetur
                        adipisicing elit.</p>
                </div>
                <!-- Grid column -->

                <hr class="w-100 clearfix d-md-none">

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
                    <p>
                        <a href="#!">Menu</a>
                    </p>
                    <p>
                        <a href="#!">Promo</a>
                    </p>
                    <p>
                        <a href="#!">Mitra/Partner</a>
                    </p>
                    <p>
                        <a href="#!">About Us</a>
                    </p>
                    <p>
                        <a href="#!">Contact Us</a>
                    </p>
                </div>

                <!-- Grid column -->
                <hr class="w-100 clearfix d-md-none">

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                    <p>
                        <i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                    <p>
                        <i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
                    <p>
                        <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                    <p>
                        <i class="fab fa-whatsapp mr-3"></i> + 01 234 567 89</p>
                </div>
                <!-- Grid column -->

            </div>
            <!-- Footer links -->

            <hr>

            <!-- Grid row -->
            <div class="row d-flex align-items-center">

                <!-- Grid column -->
                <div class="col-md-7 col-lg-8">

                    <!--Copyright-->
                    <p class="text-center text-md-left">© 2020 Copyright:
                        <a href="https://mdbootstrap.com/">
                            <strong> MDBootstrap.com</strong>
                        </a>
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-5 col-lg-4 ml-lg-0">

                    <!-- Social buttons -->
                    <div class="text-center text-md-right">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item">
                                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

    </footer>
    <!-- Akhir Footer -->
    <!-- End your project here-->

    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Your custom scripts (optional) -->
    <script type="text/javascript"></script>

</body>

</html>