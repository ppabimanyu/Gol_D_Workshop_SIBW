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
  <link rel="stylesheet" href="css/mitra.css">
  <link rel="stylesheet" href="css/navbar.css">
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Multadzam Bakery</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mr-2 active">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mr-2" href="#">Menu</a>
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

  <!-- Form -->
  <form action="mitra-next.php" method="POST"><br><br><br><br><br><br>
    <div class="judul text-center">
      <h1>Inquery Form</h1>
    </div>
    <div class="container">
      <h5>CONTACT INFORMATION</h5>
      <hr color="red">
      <!-- 2 column grid layout with text inputs for the first and last names -->
      <div class="row mb-4 mt-4">
        <div class="col">
          <div class="form-outline">
            <label class="form-label" for="form6Example1">First name</label>
            <input type="text" id="form6Example1" class="form-control" name="first_name" placeholder="Enter Your First Name" />
          </div>
        </div>
        <div class="col">
          <div class="form-outline">
            <label class="form-label" for="form6Example2">Last name</label>
            <input type="text" id="form6Example2" class="form-control" name="last_name" placeholder="Enter Your Last Name" />
          </div>
        </div>
      </div>

      <!-- Text input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form6Example4">Address</label>
        <input type="text" id="form6Example4" class="form-control" name="address" placeholder="1234 Main St" />
      </div>

      <!-- Email input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form6Example5">Email</label>
        <input type="email" id="form6Example5" class="form-control" name="email" placeholder="Enter Your Email" />
      </div>

      <!-- Number input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form6Example6">Phone</label>
        <input type="number" id="form6Example6" class="form-control" name="phone" placeholder="Enter Your Number Phone" />
      </div>

      <!-- Message input -->
      <div class="form-outline mb-4">
        <label class="form-label" for="form6Example7">Additional information</label>
        <textarea class="form-control" id="form6Example7" rows="4" name="add_information" placeholder="Enter Additional Information Here"></textarea>
      </div>

      <!-- Submit button -->
      <button type="submit" name="submit" class="btn btn-success btn-block">
        Submit
      </button><br><br><br>
    </div>
  </form>
  <!-- Akhir Form -->

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