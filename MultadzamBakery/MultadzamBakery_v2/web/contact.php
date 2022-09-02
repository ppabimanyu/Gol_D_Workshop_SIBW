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

            <!--Section heading-->
            <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
            <!--Section description-->
            <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
                a matter of hours to help you.</p>

            <div class="row">

                <!--Grid column-->
                <div class="col-md-9 mb-md-0 mb-5">
                    <form id="contact-form" name="contact-form" action="contact_proses.php" method="POST">

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <label for="name" class="">Your name</label>
                                    <input type="text" id="name" name="name" class="form-control" required>
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <label for="email" class="">Your email</label>
                                    <input type="text" id="email" name="email" class="form-control" required>
                                </div>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <label for="subject" class="">Subject</label>
                                    <input type="text" id="subject" name="subject" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-12">

                                <div class="md-form">
                                    <label for="message">Your message</label>
                                    <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" required></textarea>
                                </div>

                            </div>
                        </div><br>
                        <!--Grid row-->

                        <!-- Submit Button -->
                        <button type="submit" name="submit" class="btn btn-primary">
                            Submit
                        </button>

                    </form><br>

                    <div class="status"></div>
                    <?php
                    if (isset($_POST["submit"])) : ?>
                        <div class="alert alert-success" role="alert">
                            Thank you for your message. It has been sent.
                        </div>
                    <?php endif; ?>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-3 text-center">
                    <ul class="list-unstyled mb-0">
                        <li><i class="fas fa-map-marker-alt fa-2x"></i>
                            <p>Jember</p>
                        </li>

                        <li><i class="fas fa-phone mt-4 fa-2x"></i>
                            <p>08123456789</p>
                        </li>

                        <li><i class="fab fa-whatsapp mt-4 fa-2x"></i>
                            <p>08123456789</p>
                        </li>

                        <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                            <p>multadzam@gmail.com</p>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

            </div>

        </section>
        <!--Section: Contact v.2-->

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