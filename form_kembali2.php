<link rel="stylesheet" href="css/pinjam.css">
<?php include ('header_user.php');?>
<div class="tabel">
  <?php
    require_once('koneksi.php');
    $valid = TRUE; //flag validasi
    $iduser = $_SESSION["id"];
    if ($iduser == 'none'){
      header('Location: login.php');
    }    
    $idpeminjaman = $_GET['idpeminjaman'];
    $tgl_kembali = date("Y-m-d");

    //update data into database
    if ($valid){
      //asign a query
      $query2 = "UPDATE peminjaman SET tgl_kembali = DATE(NOW()) WHERE id = $idpeminjaman";
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
                location='data_peminjaman.php';
              </script>";
      }
    }
  ?>
</div>
