<div class="tabel">
  <?php
    session_start();
    require_once('koneksi.php');
    $iduser = $_SESSION["id"];
    if ($iduser == 'none'){
      header('Location: login.php');
    }    
    $idbuku = $_GET['buku'];
    $tgl_pinjam = date("Y-m-d");
    $batas = strtotime("+7 day");
    $tgl_batas_kembali = date("Y-m-d", $batas);

    $query4 = "SELECT * FROM peminjaman WHERE iduser = ".$iduser." AND tgl_kembali IS NULL";
    //execute the query
    $result4 = $db->query($query4);
    if (!$result4){
      die ("Could not the query the database: <br />" . $db->error . '<br>Query:' .$query4);
    } 
    else {
      if($result4->num_rows >= 5){
        $valid = false; //flag validasi
      } else {
        $valid = true; //flag validasi
      }
    }

    //update data into database
    if ($valid){
      //asign a query
      $query = "SELECT stok_tersedia FROM buku WHERE idbuku = ".$idbuku."";
      //execute the query
      $result = $db->query($query);
      if (!$result){
        die ("Could not the query the database: <br />" . $db->error . '<br>Query:' .$query);
      } 
      else if($result->fetch_object()->stok_tersedia <= 0) {
        echo '<div class="alert alert-danger">Buku tidak tersedia.</div>';
      }       
      else {
        //asign a query
        $query2 = " INSERT INTO peminjaman (iduser, idbuku, tgl_pinjam, tgl_batas_kembali) VALUES ($iduser, $idbuku, '$tgl_pinjam', '$tgl_batas_kembali') ";
        $query3 = "UPDATE buku SET stok_tersedia = stok_tersedia - 1 WHERE idbuku = $idbuku";
        //execute the query
        $result2 = $db->query($query2);
        $result3 = $db->query($query3);
        if (!$result2){
          die ("Could not the query the database: <br />" . $db->error . '<br>Query:' .$query);
        } else if (!$result3){
          die ("Could not the query the database: <br />" . $db->error . '<br>Query:' .$query);
        } else{
          echo "<script type='text/javascript'>
                  alert('Buku berhasil dipinjam.');
                  location='book_user.php';
                </script>";
        }
      }
    }
    else {
      echo "<script type='text/javascript'>
              alert('Peminjaman melebihi batas maksimal 5 buku.');
              location='book_user.php';
            </script>";
    }
  ?>
</div>
