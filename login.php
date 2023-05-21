<?php 
 
session_start();
require_once('koneksi.php');

//cek user sudah submit form
if (isset($_POST["submit"])){
  $valid = TRUE; //flag validasi

  //cek validasi username
  $username = test_input($_POST['username']);
  if ($username == ''){
    $error_username = "Username is required";
    $valid = FALSE;
  }

  //cek validasi password
  $password = test_input($_POST['password']);
  if ($password == ''){
    $error_password = "Password is required";
    $valid = FALSE;
  }

  //cek validasi
  if ($valid){
    //asign a query
    $query = " SELECT * FROM users WHERE username='".$username."' AND password='".$password."' ";
    $query2 = " SELECT * FROM petugas WHERE username='".$username."' AND password='".$password."' ";
    
    //excute the query
    $result = $db->query($query);
    $result2 = $db->query($query2);
    
    if (!$result){
      die ("Could not query the database: <br />". $db->error);
    } 
    else if($result && $result->num_rows>0){
      if ($result->num_rows>0){ //login berhasil
        if ( !isset($_POST['username'], $_POST['password']) ) {
          // Could not get the data that should have been sent.
          echo ('Kolom Username dan Password harus diisi!');
        } else {
          // $_SESSION['username'] = $username;
          $_SESSION['id'] = $result->fetch_object()->id;
          $_SESSION['username'] = $username;
          header('Location: home_user.php');
        }
      } else{  //login gagal
        var_dump($result);
        var_dump($result2);
        echo '<div class="alert alert-danger">Combination of name and password incorrect. </div>';
      }
    } 
    else if($result2 && $result2->num_rows>0){
      if ($result2->num_rows>0){ //login berhasil
        $_SESSION['username'] = $username;
        // $_SESSION['username'] = $result->fetch_object()->id;
        header('Location: home_admin.php');
        exit;
      } else{  //login gagal
        echo '<div class="alert alert-danger"> Combination of name and password incorrect. </div>';
      }
    }
    //close db connection
    $db->close();
  }
}

?> 

<!DOCTYPE html>
<html>
    <head>
        <title>E-Library</title>
        <link rel="icon" href="images/logo.png" type="image/png">
        <link rel="stylesheet" type="text/css" href="css/login.css">
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
                    <h3 class="login-heading mb-4">Welcome back!</h3>
      
                    <!-- Sign In Form -->
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                      <div class="form-floating mb-3">
                        <input type="username" class="form-control" id="floatingInput" placeholder="Username" name="username">
                        <label for="floatingInput">Username<?php if(isset($error_username)) echo $error_username;?></label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                        <label for="floatingPassword">Password<?php if(isset($error_password)) echo $error_password;?></label>
                      </div>
                      <div class="d-grid">
                        <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit" name="submit">Log in</button>
                        <p class="text-center text-muted mt-5 mb-0">Anda belum punya akun? <a href="signup.php" class="fw-bold text-body"><u>Sign Up disini</u></a></p>
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
</html>

