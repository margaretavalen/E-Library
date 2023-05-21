<div class="tabel">
  <?php
    $valid = TRUE; //flag validasi
    $iduser = $_SESSION["id"];
    if ($iduser == 'none'){
      header('Location: login.php');
    }    
    $idpeminjaman = $_GET['idpeminjaman'];
    $tgl_kembali = strtotime(date("Y-m-d"));
    
    //DB
    require_once('koneksi.php');
    $query = "SELECT * FROM peminjaman WHERE id = $idpeminjaman";
    $result = mysqli_query($db, $query);
    if(!$result) {
      die("Could not query the database: <br />". $db->error ."<br />Query: ".$query);
    }
    while($row = $result->fetch_object()) {
      $tgl_batas_kembali = strtotime($row->tgl_batas_kembali);
      if($tgl_batas_kembali > $tgl_kembali){
        $denda = 0;
      }
      else{
        $denda = ($tgl_kembali - $tgl_batas_kembali)/86400 * 1000;
      }
    } 

    //update data into database
    if ($valid){
      //asign a query
      $query2 = "UPDATE peminjaman SET tgl_kembali = DATE(NOW()), total_denda = $denda WHERE id = $idpeminjaman";
      $query3 = "UPDATE buku SET stok_tersedia = stok_tersedia + 1 WHERE idbuku = (SELECT idbuku FROM peminjaman WHERE id = $idpeminjaman)";
      //execute the query
      $result2 = $db->query($query2);
      $result3 = $db->query($query3);
      if (!$result2){
        die ("Could not the query the database: <br />" . $db->error . '<br>Query:' .$query2);
      } else if (!$result3){
        die ("Could not the query the database: <br />" . $db->error . '<br>Query:' .$query3);
      } else{
        echo "<script type='text/javascript'>
                alert('Buku berhasil dikembalikan.');
                location='listbukupinjam.php';
              </script>";
      }
    }
  ?>
</div>
