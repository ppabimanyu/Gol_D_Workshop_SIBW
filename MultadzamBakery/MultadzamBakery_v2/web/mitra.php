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
                            <a class="nav-link dropdown-toggle  active" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
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
        <div class="mx-auto" style="text-align: center; font-family: 'Cormorant Upright', serif; font-size: 22px;">Mitra</div><br>
        <hr>
        <div class="bg-image">
            <img src="img/mitra.jpeg" class="img-fluid" alt="Sample" />
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
                <div class="d-flex justify-content-center align-items-center h-100">
                    <p class="text-white mb-0">Can you see me?</p>
                </div>
            </div>
        </div>
        <p style="text-align: center;">We are committed to providing quality products and a relaxing environment within our stores.<br>
            If you are interested in becoming a part of Multadzam Bakery and in sharing our passion for excellence,<br>
            please submit the franchise inquiry form below.</p>
        <br><br><br>
        <h4 style="text-align: center; font-family: 'Jomolhari', serif; color:#A31414;">INQUIRY FORM</h4><br><br>
        <h5>CONTACT INFORMATION</h5>
        <form action="mitra_proses.php" method="POST">
            <!-- Text input -->
            <div class="form-outline mb-4">
                <input type="text" id="form6Example4" class="form-control" name="name" />
                <label class="form-label" for="form6Example4">Name</label>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" id="form6Example5" class="form-control" name="email" />
                <label class="form-label" for="form6Example5">Email</label>
            </div>

            <!-- Number input -->
            <div class="form-outline mb-4">
                <input type="number" id="form6Example6" class="form-control" name="phone" />
                <label class="form-label" for="form6Example6">Phone</label>
            </div>

            <!-- Text input -->
            <div class="form-outline mb-4">
                <input type="text" id="form6Example4" class="form-control" name="address" />
                <label class="form-label" for="form6Example4">Address</label>
            </div>

            <!-- Message input -->
            <div class="form-outline mb-4">
                <textarea class="form-control" id="form6Example7" rows="4" name="add_information"></textarea>
                <label class="form-label" for="form6Example7">Additional information</label>
            </div>

            <!-- Submit button -->
            <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">submit</button>
        </form>

    </div><br><br>
    <!-- End Mitra -->

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