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
          <li class="colorlib-active"><a href="index.php">Home</a></li>
          <li><a href="rules_user.php">Rules</a></li>
          <li><a href="book_user.php">Book</a></li>
          <li><a href="listbukupinjam.php">Book List</a></li>
          <li><a href="about_user.php">About</a></li>
          <li><a href="blog_user.php">Blog</a></li>
          <li><a href="contact_user.php">Contact</a></li>
        </ul>
      </nav>

      <div class="colorlib-footer">
        <a href="logout.php" style="color: grey;">Log Out</a>
        <p><small>&copy; Copyright &copy;<script>
              document.write(new Date().getFullYear());
            </script> Made by Margareta Valencia</small></p>
      </div>

    </aside>

    <div id="colorlib-main">

      <div class="colorlib-about">
        <div class="colorlib-narrow-content">
          <div class="row">
            <div class="col-md-6">
              <div class="about-img animate-box" data-animate-effect="fadeInLeft" style="background-image: url(images/8.jpg);">
              </div>
            </div>
            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
              <div class="about-desc">
                <span class="heading-meta">Welcome <?php echo $_SESSION['username']; ?></span>
                <h2 class="colorlib-heading">What we are</h2>
                <p>E-Library merupakan aplikasi berbasis web yang memberikan layanan perpustakaan digital untuk memudahkan Anda meminjam buku secara online.</p>
                <p>Perpustakaan digital ini diharapkan menjadi referensi dalam bidang pendidikan dan kebudayaan dengan menyediakan akses informasi dan pengetahuan yang lengkap dalam bentuk koleksi digital.</p>
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
        </div>
      </div>

      <div class="colorlib-services">
        <div class="colorlib-narrow-content">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
              <span class="heading-meta">Search</span>
              <h2 class="colorlib-heading">You can search book here</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="tabelbuku">
                <div class="card">
                  <div class="card-body">
                    <form method="GET">
                      <input type="text" name="search_title" id="search_title" placeholder="Cari Buku" class="form-control" value="" onkeyup="forIndex()">
                    </form>
                    <br>
                    <div id="hasil">
                      <table class="table table-striped">
                        <tr>
                          <th>Gambar</th>
                          <th>ISBN</th>
                          <th>Kategori</th>
                          <th>Judul</th>
                          <th>Pengarang</th>
                          <th>Penerbit</th>
                          <th>Sinopsis</th>
                        </tr>
                        <?php
                        require_once('koneksi.php');
                        $query = "SELECT *, kategori.nama AS kategori FROM buku JOIN kategori ON buku.idkategori = kategori.idkategori order by idbuku";
                        $result = $db->query($query);
                        if (!$result) {
                          die("Could not query the database: <br />" . $db->error . "<br />Query: " . $query);
                        }
                        // Fetch and display the results
                        while ($row = $result->fetch_object()) {
                          echo '<tr>';
                          $image = $row->file_gambar;
                          echo '<td>' . '<a href="book_user.php"><img src="' . $image . '" width="100">' . '</a></td>';
                          echo '<td>' . $row->isbn . '</td>';
                          echo '<td>' . $row->kategori . '</td>';
                          echo '<td>' . $row->judul . '</td>';
                          echo '<td>' . $row->pengarang . '</td>';
                          echo '<td>' . $row->penerbit . '</td>';
                          echo '<td>' . $row->sinopsis . '</td>';
                          echo '</tr>';
                          $data[] = clone ($row);
                        }
                        $data = json_encode($data);
                        echo '</table>';
                        $result->free();
                        $db->close();
                        ?>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="colorlib-work">
        <div class="colorlib-narrow-content">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
              <span class="heading-meta">Recommendation</span>
              <h2 class="colorlib-heading animate-box">Our recommendation for you</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
              <div class="project" style="background-image: url(images/sherlock-holmes.jpg);">
                <div class="desc">
                  <div class="con">
                    <h3><a href="book.php">Sherlock Holmes</a></h3>
                    <span>By Sir Arthur Conan</span>
                    <p class="icon">Sherlock Holmes adalah orang yang sangat pintar yang memakai fakta-fakta kecil untuk menyelesaikan misteri-misteri besar.</p>
                    <a href="login.php">Pinjam</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
              <div class="project" style="background-image: url(images/Critical-Eleven.jpg);">
                <div class="desc">
                  <div class="con">
                    <h3><a href="book.php">Critical Eleven</a></h3>
                    <span>By Ika Natassa</span>
                    <p class="icon">Istilah critical eleven, sebelas menit paling kritis di dalam pesawat—tiga menit setelah take off dan delapan menit sebelum landing.</p>
                    <a href="login.php">Pinjam</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
              <div class="project" style="background-image: url(images/jingga_dan_senja.jpg);">
                <div class="desc">
                  <div class="con">
                    <h3><a href="book.php">Jingga dan Senja</a></h3>
                    <span>By Esti Kinasih</span>
                    <p class="icon">Jingga dan Senja diterbitkan pertama kali pada tahun 2010, menceritakan kehidupan remaja SMA bernama Tari dan Ari.</p>
                    <a href="login.php">Pinjam</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
              <div class="project" style="background-image: url(images/The_Song_of_Achilles.jpg);">
                <div class="desc">
                  <div class="con">
                    <h3><a href="book.php">The Song of Archilles</a></h3>
                    <span>By Madeline Miller</span>
                    <p class="icon">Patroclus, seorang pangeran muda yang kikuk, diasingkan ke istana Raja Peleus dan putranya yang sempurna, Achilles.</p>
                    <a href="login.php">Pinjam</a>
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
						<p class="colorlib-counter-label">“Whenever you read a good book, somewhere in the world a door opens to allow in more light.”</p>
					</div>
				</div>
			</div>

      <div class="colorlib-blog">
        <div class="colorlib-narrow-content">
          <div class="row">
            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
              <span class="heading-meta">Read</span>
              <h2 class="colorlib-heading">About Writer</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
              <div class="blog-entry">
                <a href="blog_user.php#blog1" class="blog-img"><img src="images/percyjackson.jpg" class="img-responsive" alt="picture"></a>
                <div class="desc">
                  <span><small>May 06, 2023 </small> | <small> Fantasy </small> </span>
                  <h3><a href="blog_user.php#blog1">Rick Riordan Penulis Novel Percy Jackson and The Olympians</a></h3>
                  <p>Rick memang penulis yang dekat dengan anak-anak. Suatu hari dia pun memutuskan menulis untuk anak-anak...</p>
                  <a href="blog_user.php#blog1">Selengkapnya</a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
              <div class="blog-entry">
                <a href="blog_user.php#blog2" class="blog-img"><img src="images/sherlockholmes.jpeg" class="img-responsive" alt="picture"></a>
                <div class="desc">
                  <span><small>May 07, 2023 </small> | <small> Action </small></span>
                  <h3><a href="blog_user.php#blog2">Arthur Conan Doyle, sosok penulis dibalik novel Sherlock Holmes</a></h3>
                  <p>Saat kekurangan uang inilah, ia pun berinisiatif untuk menulis sebuah cerita yang lebih baik daripada cerita-cerita yang pernah ia buat sebelumnya...</p>
                  <a href="blog_user.php#blog2">Selengkapnya</a>
                </div>
              </div>
            </div>
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
  <script src="js/ajax.js"></script>

</body>

</html>