<link rel="stylesheet" href="css/pinjam.css">
<?php include ('header_user.php');?>
<div class="tabel">
  <?php
    if (isset($_POST["submit"])){
      $valid = TRUE; //flag validasi
      $idpeminjaman = $_POST['idpeminjaman'];
      if ($idpeminjaman == ''){
        $valid = FALSE;
      }
    
      $iduser = $_POST['iduser'];
      if ($iduser == ''){
        $valid = FALSE;
      }
    
      $denda = $_POST['denda'];
      if ($denda == ''){
        $valid = FALSE;
      }
    
      //menambah gambar ke htdocs
      $rand = rand();
      $ekstensi =  array('png','jpg','jpeg');
      $filename = $_FILES['bukti_trf']['name'];
      $ukuran = $_FILES['bukti_trf']['size'];
      $ext = pathinfo($filename, PATHINFO_EXTENSION);
    
      if(!in_array($ext,$ekstensi) ) {
        echo 'done';
      ?>
          <br><br><br>
        <div class="alert alert-danger" role="alert">Ekstensi tidak sesuai.</div>
      <?php
      }else{
        require_once('koneksi.php');
        if($ukuran < 1044070){
          $xx = $rand.'_'.$filename;
          move_uploaded_file($_FILES['bukti_trf']['tmp_name'], $xx);
          $query = "UPDATE peminjaman SET tgl_kembali = DATE(NOW()), total_denda = $denda, bukti_trf = '".$xx."' WHERE id = $idpeminjaman";
          $result = $db->query($query);
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
            header('Location: listbukupinjam.php');
          }
        } else{ ?>
          <br><br><br>
          <div class="alert alert-danger" role="alert">Gambar terlalu besar.</div>
        <?php
        }
      }
    }
  ?>
</div>
