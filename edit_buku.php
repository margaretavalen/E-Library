<link rel="stylesheet" href="css/edit_buku.css">
<?php include ('header_admin.html');
session_start(); //inisialisasi session

if(!isset($_SESSION['username'])){
  header('Location: login.php');
}
?>

<?php
require_once('koneksi.php');
$id = $_GET['id']; //mendapatkan id buku yang dilewatkan ke url

// mengecek apakah user belum menekan tombol submit
if (!isset($_POST["submit"])){
$query = " SELECT *, kategori.nama FROM buku JOIN kategori ON buku.idkategori=kategori.idkategori WHERE idbuku=" .$id. " ";
//execute the query
$result = $db->query($query);
if (!$result){
    die ("Could not the query database: <br />" . $db->error);
} else {
    while ($row = $result->fetch_object()){
      $file_gambar = $row->file_gambar;
      $isbn = $row->isbn;
      $judul = $row->judul;
      $kategori = $row->nama;
      $pengarang = $row->pengarang;
      $penerbit = $row->penerbit;
      $stok_tersedia = $row->stok_tersedia;
    }
  }
} else{
    $valid = TRUE; //flag validasi
    $isbn = test_input($_POST['isbn']);
    if ($isbn == ''){
      $error_isbn = "IBSN harus diisi";
      $valid = FALSE;
    }
    $kategori = $_POST['kategori'];
    if ($kategori == 'none'){
      $error_kategori = "Kategori harus diisi";
      $valid = FALSE;
    }

  $judul = test_input($_POST['judul']);
  if ($judul == ''){
    $error_judul = "Judul harus diisi";
    $valid = FALSE;
  }

  $pengarang = test_input($_POST['pengarang']);
  if ($pengarang == ''){
    $error_pengarang = "Pengarang harus diisi";
    $valid = FALSE;
  }

  $penerbit = test_input($_POST['penerbit']);
  if ($penerbit == ''){
    $error_penerbit = "Penerbit harus diisi";
    $valid = FALSE;
  }

  $stok_tersedia = test_input($_POST['stok_tersedia']);
  if ($stok_tersedia == ''){
    $error_stok_tersedia = "Stok tersedia harus diisi";
    $valid = FALSE;
  }

  // $file_gambar = $_POST['file_gambar'];
  $rand = rand();
  $ekstensi =  array('png','jpg','jpeg');
  $filename = $_FILES['file_gambar']['name'];
  $ukuran = $_FILES['file_gambar']['size'];
  $ext = pathinfo($filename, PATHINFO_EXTENSION);

  if(!in_array($ext,$ekstensi) ) {
    echo 'done';
  ?>
  <br><br><br>
  <div class="alert alert-danger" role="alert">Ekstensi tidak sesuai.</div>
  <?php
  }
  else{
    if($ukuran < 1044070){
      $xx = $rand.'_'.$filename;
      move_uploaded_file($_FILES['file_gambar']['tmp_name'], $xx);
      if($filename != ''){
        $query = "UPDATE buku SET file_gambar='".$xx."', isbn='".$isbn."', idkategori=".$kategori.", judul='".$judul."', pengarang='".$pengarang."', penerbit='".$penerbit."', stok_tersedia=".$stok_tersedia." WHERE idbuku=".$id." ";
        $result = $db->query($query);
      }else{
        $query = " UPDATE buku SET isbn='".$isbn."', idkategori=".$kategori.", judul='".$judul."', pengarang='".$pengarang."', penerbit='".$penerbit."', stok_tersedia=".$stok_tersedia." WHERE idbuku=".$id." ";
        $result = $db->query($query);
      }

      if(!$result){  ?>
        <br><br><br>
        <div class="alert alert-danger" role="alert">Penambahan gagal.</div>
        <?php die ("Could not the query the database: <br />" . $db->error . '<br>Query:' .$query);
        } else{
        ?>
        <br><br><br>
        <div class="alert alert-success" role="alert">Penambahan berhasil.</div>
        <?php
          $db->close();
          header('Location: home_admin.php');
        }
      }else{ ?>
        <br><br><br>
        <div class="alert alert-danger" role="alert">Gambar terlalu besar.</div>
        <?php
      }
    }
  }
?>
<div class="tabelbuku">
  <div class="container">
    <div class="card">
        <div class="card-body">
          <form method="POST" enctype="multipart/form-data" autocomplete="on" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]).'?id=' .$id; ?>">
              <div class="form-group">
                <label for="cover_buku">Cover Buku:</label>
                <br>
                <input type="file"id="file_gambar" name="file_gambar" value=""  onchange="namafile()">
                <div class="text-danger"><?php if (isset($error_file_gambar)) echo $error_file_gambar;?></div>
              </div>
  
              <div class="form-group">
                  <label for="isbn">ISBN:</label>
                  <input type="text" class="form-control" id="isbn" name="isbn" value="<?php echo $isbn;?>">
                  <div class="text-danger"><?php if (isset($error_isbn)) echo $error_isbn;?></div>
              </div>
  
              <div class="form-group">
                  <label for="kategori">Kategori:</label>
                  <select name="kategori" id="kategori" class="form-control">
                      <option value="none" <?php if (isset($kategori)) echo 'selected="true"';?>>--Pilih kategori--</option>
                      <?php
                      require_once('koneksi.php');
                      //Asign a query
                      $query = " SELECT * FROM kategori ORDER BY idkategori";
                      $result = $db->query( $query );
                      if (!$result){
                          die ("Could not query the database: <br />". $db->error);
                      }
                      // Fetch and display the results
                      while ($row = $result->fetch_object()){
                          echo '<option value="'.$row->idkategori.'">'.$row->nama.'</option>';
                      }
                      $result->free();
                      ?>
                  </select>
                  <div class="text-danger"><?php if(isset($error_kategori)) echo $error_kategori;?></div>
              </div>
  
              <div class="form-group">
                  <label for="judul">Judul:</label>
                  <input class="form-control" id="judul" name="judul" rows="5" value="<?php echo $judul;?>">
                  <div class="text-danger"><?php if (isset($error_judul)) echo $error_judul;?></div>
              </div>
  
              <div class="form-group">
                  <label for="pengarang">Pengarang:</label>
                  <input class="form-control" id="pengarang" name="pengarang" rows="5" value="<?php echo $pengarang;?>">
                  <div class="text-danger"><?php if (isset($error_pengarang)) echo $error_pengarang;?></div>
              </div>
  
              <div class="form-group">
                  <label for="penerbit">Penerbit:</label>
                  <input class="form-control" id="penerbit" name="penerbit" rows="5" value="<?php echo $penerbit;?>">
                  <div class="text-danger"><?php if (isset($error_penerbit)) echo $error_penerbit;?></div>
              </div>

              <div class="form-group">
                  <label for="stok_tersedia">Stok Tersedia:</label>
                  <input class="form-control" id="stok_tersedia" name="stok_tersedia" rows="5" value="<?php echo $stok_tersedia;?>">
                  <div class="text-danger"><?php if (isset($error_penerbit)) echo $error_penerbit;?></div>
              </div>
  
              <br>
              <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
              <a href="home_admin.php" class="btn btn-secondary">Cancel</a>
          </form>
        </div>
      </div>
  </div>
</div>
<?php
$db->close();
?>

<script>
function namafile(){
  var filename = document.getElementById("file_gambar").files[0].name;
}
</script>
<footer id="sticky-footer" class="flex-shrink-0 py-4 text-white-50">
  <div class="container text-center" id="footer">
    <small>Copyright &copy; Elibrary by Margareta Valencia</small>
  </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>


