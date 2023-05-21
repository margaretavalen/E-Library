<?php
session_start(); //inisialisasi session

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
}
?>

<!DOCTYPE HTML>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>E-Library</title>
  <link rel="icon" href="images/logo.png" type="image/png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
  <meta property="og:title" content="" />
  <meta property="og:image" content="" />
  <meta property="og:url" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="" />
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  <link rel="shortcut icon" href="favicon.ico">

  <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

  <!-- Animate.css -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="css/icomoon.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <!-- Flexslider  -->
  <link rel="stylesheet" href="css/flexslider.css">
  <!-- Flaticons  -->
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <!-- Theme style  -->
  <link rel="stylesheet" href="css/style.css">

  <!-- Modernizr JS -->
  <script src="js/modernizr-2.6.2.min.js"></script>


</head>

<body>
  <div id="colorlib-page">
    <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
    <aside id="colorlib-aside" role="complementary" class="border js-fullheight">
      <h1 id="colorlib-logo">
        <a href="index.php">E-Library</a>
      </h1>
      <nav id="colorlib-main-menu" role="navigation">
        <ul>
          <li><a href="home_user.php">Home</a></li>
          <li class="colorlib-active"><a href="rules_user.php">Rules</a></li>
          <li><a href="book_user.php">Book</a></li>
          <li><a href="listbukupinjam.php">Book List</a></li>
          <li><a href="about_user.php">About</a></li>
          <li><a href="blog_user.php">Blog</a></li>
          <li><a href="contact_user.php">Contact</a></li>
        </ul>
      </nav>

      <div class="colorlib-footer">
        <a href="logout.php" style="color: grey;">Log Out</a>
        <p><small>&copy; Copyright &copy;
            <script>
              document.write(new Date().getFullYear());
            </script> Made by Margareta Valencia
          </small></p>
      </div>

    </aside>

    <div id="colorlib-main">
      <div class="colorlib-work">
        <div class="colorlib-narrow-content">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
              <span class="heading-meta">Rules</span>
              <h2 class="colorlib-heading">Aturan Pinjam Buku</h2>
            </div>
          </div>
          <div class="blog-card">
            <div class="card-info">
              <p><b>1. Setiap anggota Perpustakaan hanya diijinkan meminjam 5 buah buku</b></p>
              <p><b>2. Setiap kali peminjaman diberi waktu hanya satu minggu dan harus mengembalikan buku sesuai tanggal pengembalian yang ditetapkan</b></p>
              <p><b>3. Apabila pengembalian melebihi tanggal yang ditetapkan, maka dikategorikan TERLAMBAT, dan setiap keterlambatan dikenakan denda 1000/hari</b></p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
              <div class="blog-entry">
                <a href="blog.html" class="blog-img"><img src="images/book1.jpg" class="img-responsive" alt="picture"></a>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
              <div class="blog-entry">
                <a href="blog.html" class="blog-img"><img src="images/book2.jpg" class="img-responsive" alt="picture"></a>
              </div>
            </div>
            <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
              <div class="blog-entry">
                <a href="blog.html" class="blog-img"><img src="images/book3.jpg" class="img-responsive" alt="picture"></a>
              </div>
            </div>
          </div>

          <div id="get-in-touch" class="colorlib-bg-color">
            <div class="colorlib-narrow-content">
              <div class="row">
                <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                  <h2>Get in Touch!</h2>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                  <p class="colorlib-lead">If you need something, you can contact here</p>
                  <p><a href="contact.html" class="btn btn-primary btn-learn">Contact me!</a></p>
                </div>

              </div>
            </div>
          </div>
        </div>

        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>
        <!-- jQuery Easing -->
        <script src="js/jquery.easing.1.3.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Waypoints -->
        <script src="js/jquery.waypoints.min.js"></script>
        <!-- Flexslider -->
        <script src="js/jquery.flexslider-min.js"></script>
        <!-- Sticky Kit -->
        <script src="js/sticky-kit.min.js"></script>
        <!-- Owl carousel -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- Counters -->
        <script src="js/jquery.countTo.js"></script>


        <!-- MAIN JS -->
        <script src="js/main.js"></script>

</body>

</html>