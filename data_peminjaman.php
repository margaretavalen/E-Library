<link rel="stylesheet" href="css/pinjam.css">
<?php include ('header_admin.html');
session_start(); //inisialisasi session
if(!isset($_SESSION['username'])){
  header('Location: login.php');
}
?>
<section class="home-section">
  <div class="text">Data Peminjaman</div>
</section>
<div class="tabel">
  <div class="card">
    <div class="card-body">
      <table class="table table-striped">
        <tr>
          <th>Gambar</th>
          <th>Nama</th>
          <th>Judul Buku</th>
          <th>Tanggal Pinjam</th>
          <th>Tanggal Kembali</th>
        </tr>
        <?php
        require_once('koneksi.php');
        $query = "SELECT buku.file_gambar, peminjaman.iduser, buku.judul, peminjaman.tgl_pinjam, peminjaman.tgl_kembali, users.nama, peminjaman.id
                  FROM peminjaman INNER JOIN users ON peminjaman.iduser=users.id
                  JOIN buku ON peminjaman.idbuku = buku.idbuku ORDER BY peminjaman.tgl_pinjam DESC";
        $result = $db->query($query);
        if(!$result){
          die("Could not query the database: <br />". $db->error ."<br />Query: ".$query);
        }
        // Fetch and display the results
        while ($row = $result->fetch_object()){
          echo '<tr>';
          $image = $row->file_gambar;
          echo '<td>'.'<img src="'.$image.'" width="100">'.'</td>';
          echo '<td>'.$row->nama.'</td>';
          echo '<td>'.$row->judul.'</td>';
          echo '<td>'.$row->tgl_pinjam.'</td>';
          if(!$row->tgl_kembali){
            echo '<td><a class="btn btn-primary btn-sm" href="form_kembali2.php?idpeminjaman='.$row->id.'">Kembalikan</a></td>';
          } else{
            echo '<td>'.$row->tgl_kembali.'</td>';
          }
          echo'</tr>';
          echo'</tr>';
        }
        echo '</table>';
        $result->free();
        $db->close();
        ?>
      </table>
    </div>
  </div>
</div>
<footer id="sticky-footer" class="flex-shrink-0 py-4 text-white-50">
  <div class="container text-center" id="footer">
    <small>Copyright &copy; Elibrary by Margareta Valencia</small>
  </div>
</footer>
