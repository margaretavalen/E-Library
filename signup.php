<?php

session_start();
 
if (isset($_SESSION["users"])) {
  header("Location: index.php");
  exit;
}
 
require_once("koneksi.php");
 
if (isset($_POST['submit'])) {
  // filter data yang diinputkan
  $name = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
  $usernama = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
  $pass = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
  $mail = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
   
  // bind parameter ke query
  $params = array(
    ":username" => $usernama,
    ":password" => $pass,
    ":nama" => $name,
    ":email" => $mail
  );

  $sql = "SELECT * FROM users WHERE email='$mail'";
  $result = mysqli_query($db, $sql);
  if (!$result->num_rows > 0) {
    // insert data ke database
    $sql = "INSERT INTO users (username, password, nama, email) VALUES ( '$usernama', '$pass', '$name', '$mail')";
    $result = mysqli_query($db, $sql);
    if ($result) { // insert data berhasil
      $_SESSION['username'] = $usernama;
      header("Location: login.php");
    } else {// insert data gagal
        echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
    }
  } else { // email sudah terdaftar
      echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
  } 
  //close db connection
  $db->close();  
} 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>E-Library</title>
        <link rel="icon" href="images/logo.png" type="image/png">
        <link rel="stylesheet" type="text/css" href="css/signup.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>
      <div class="container-fluid ps-md-0">
        <div class="row g-0">
          <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
          <div class="col-md-8 col-lg-6">
            <div class="login d-flex align-items-center py-5">
              <div class="container">
                <div class="row">
                  <div class="col-md-9 col-lg-8 mx-auto">
                    <h3 class="login-heading mb-4">Welcome!</h3>
      
                    <!-- Sign In Form -->
                    <form method="post">
                      <div class="form-floating mb-3">
                        <input type="text" name="nama" class="form-control" id="floatingNama" placeholder="Nama Lengkap">
                        <label for="floatingNama">Nama Lengkap</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="text" name="username" class="form-control" id="floatingUsername" placeholder="Username">
                        <label for="floatingUsername">Username</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control" id="floatingEmail" placeholder="nama@gmail.com">
                        <label for="floatingEmail">Email</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                      </div>
      
                      <div class="d-grid">
                        <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit" name="submit">Sign Up</button>
                        <p class="text-center text-muted mt-5 mb-0">Anda sudah punya akun? <a href="login.php" class="fw-bold text-body"><u>Log In disini</u></a></p>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
    </body>
    <?php
      session_destroy();
    ?>
</html>

