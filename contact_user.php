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
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>
  <div id="colorlib-page">
    <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
    <aside id="colorlib-aside" role="complementary" class="border js-fullheight">
      <h1 id="colorlib-logo"><a href="index.php">E-Library</a></h1>
      <nav id="colorlib-main-menu" role="navigation">
        <ul>
          <li><a href="home_user.php">Home</a></li>
          <li><a href="rules_user.php">Rules</a></li>
          <li><a href="book_user.php">Book</a></li>
          <li><a href="listbukupinjam.php">Book List</a></li>
          <li><a href="about_user.php">About</a></li>
          <li><a href="blog_user.php">Blog</a></li>
          <li class="colorlib-active"><a href="contact_user.php">Contact</a></li>
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

      <div class="colorlib-contact">
        <div class="colorlib-narrow-content">
          <div class="row">
            <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
              <span class="heading-meta">Read</span>
              <h2 class="colorlib-heading">Get in Touch</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-5">
              <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                <div class="colorlib-icon">
                  <i class="icon-globe-outline"></i>
                </div>
                <div class="colorlib-text">
                  <p><a href="mailto:elibrary@gmail.com?subject=Hello!&body=Please send me a message!">elibrary@gmail.com</a></p>
                </div>
              </div>

              <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                <div class="colorlib-icon">
                  <i class="icon-map"></i>
                </div>
                <div class="colorlib-text">
                  <p>Blackpink Street, Suite 17 Semarang, Jawa Tengah 10017</p>
                </div>
              </div>

              <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                <div class="colorlib-icon">
                  <i class="icon-phone"></i>
                </div>
                <div class="colorlib-text">
                  <p><a href="tel://">+62 8123 4567 890</a></p>
                </div>
              </div>
            </div>
            <div class="col-md-7 col-md-push-1">
              <div class="row">
                <div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInLeft">
                  <form action="">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                      <textarea name="" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-primary btn-send-message" value="Send Message">
                    </div>
                  </form>
                </div>
              </div>
            </div>
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
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
  <script src="js/google_map.js"></script>


  <!-- MAIN JS -->
  <script src="js/main.js"></script>

</body>

</html>