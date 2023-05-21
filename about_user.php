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
					<li><a href="rules_user.php">Rules</a></li>
					<li><a href="book_user.php">Book</a></li>
					<li><a href="listbukupinjam.php">Book List</a></li>
					<li class="colorlib-active"><a href="about.php">About</a></li>
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

			<div class="colorlib-about">
				<div class="colorlib-narrow-content">
					<div class="row row-bottom-padded-md">
						<div class="col-md-6">
							<div class="about-img animate-box" data-animate-effect="fadeInLeft"
								style="background-image: url(images/8.jpg);">
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="about-desc">
								<span class="heading-meta">Welcome</span>
								<h2 class="colorlib-heading">What we are</h2>
								<p>E-Library merupakan aplikasi berbasis web yang memberikan layanan perpustakaan digital untuk
									memudahkan Anda meminjam buku secara online.</p>
								<p>Perpustakaan digital ini diharapkan menjadi referensi dalam bidang pendidikan dan kebudayaan dengan
									menyediakan akses informasi dan pengetahuan yang lengkap dalam bentuk koleksi digital.</p>
							</div>
							<div class="row padding">
								<div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
									<a href="#" class="steps active">
										<p class="icon"><span><i class="icon-check"></i></span></p>
										<h3>We are <br>trusted</h3>
									</a>
								</div>
								<div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
									<a href="#" class="steps">
										<p class="icon"><span><i class="icon-check"></i></span></p>
										<h3>Honest <br>Dependable</h3>
									</a>
								</div>
								<div class="col-md-4 no-gutters animate-box" data-animate-effect="fadeInLeft">
									<a href="#" class="steps">
										<p class="icon"><span><i class="icon-check"></i></span></p>
										<h3>Always <br>Improving</h3>
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
							<h2 class="colorlib-heading">Member</h2>
							<p>Aplikasi E-Library merupakan perpustakaan berbasis digital yang memiliki fungsi mendukung dan melayani
								masyarakat dalam mencari informasi buku. Keanggotaan aplikasi E-Library terbuka bagi masyarakat umum
								dengan persyaratan khusus.</p>
						</div>
						<div class="col-md-8 animate-box" data-animate-effect="fadeInRight">
							<div class="fancy-collapse-panel">
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingOne">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true"
													aria-controls="collapseOne">Persyaratan Member
												</a>
											</h4>
										</div>
										<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
											aria-labelledby="headingOne">
											<div class="panel-body">
												<div class="row">
													<div class="col-md-6">
														<p>1. Keanggotaan berlaku selamanya selama akun masih ada dan tidak dihapus.</p>
													</div>
													<div class="col-md-6">
														<p>2. Anggota wajib mematuhi tata tertib dan ketentuan layanan perpustakaan.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingTwo">
											<h4 class="panel-title">
												<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
													aria-expanded="false" aria-controls="collapseTwo">Proses Menjadi Member
												</a>
											</h4>
										</div>
										<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
											aria-labelledby="headingTwo">
											<div class="panel-body">
												<p>Untuk menjadi member aplikasi E-Library dapat dilakukan dengan melalukan <a
														href="signup.php">Sign Up</a> akun.</p>
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingThree">
											<h4 class="panel-title">
												<a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"
													aria-expanded="false" aria-controls="collapseThree">Keuntungan Menjadi Member
												</a>
											</h4>
										</div>
										<div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
											aria-labelledby="headingThree">
											<div class="panel-body">
												<p>Bisa meminjam buku sesuai dengan ketentuan yang berlaku.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div id="colorlib-counter" class="colorlib-counters" style="background-image: url(images/13.png);"
				data-stellar-background-ratio="0.5">
				<div class="overlay"></div>
				<div class="colorlib-narrow-content">
					<div class="row">
						<p class="colorlib-counter-label">“If you only read the books that everyone else is reading, you can only
							think what everyone else is thinking.”</p>
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
							<p class="colorlib-lead">Separated they live in Bookmarksgrove right at the coast of the Semantics, a
								large language ocean.</p>
							<p><a href="#" class="btn btn-primary btn-learn">Contact me!</a></p>
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


	<!-- MAIN JS -->
	<script src="js/main.js"></script>

</body>

</html>