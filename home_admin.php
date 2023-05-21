<link rel="stylesheet" href="css/home_admin.css">
<?php include ('header_admin.html');
session_start(); //inisialisasi session
if(!isset($_SESSION['username'])){
  header('Location: login.php');
}
?>
<section class="home-section">
  <div class="text">Dashboard</div>
</section>
<div class="tabelbuku">
  <div class="card">
    <div class="card-header">
      Cari Data Buku
    </div>
    <div class="card-body">
      <form method="GET">
        <input type="text" name="cari_judul" id="cari_judul" placeholder="Cari Buku" class="form-control" value="" onkeyup="forIndex2()">
      </form>
      <br>
      <div class="text-right">
        <a class="btn btn-primary" href="add_buku.php">+ Tambah Buku</a><br /><br />
      </div>
      <div id="result">
        <table class="table table-striped">
          <tr>
            <th>Gambar</th>
            <th>ISBN</th>
            <th>Kategori</th>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Penerbit</th>
            <th>Tanggal Masuk</th>
            <th>Tanggal Update</th>
            <th>Stok</th>
            <th>Stok Tersedia</th>
            <th>Actions</th>
          </tr>
          <?php
          require_once('koneksi.php');
          $query = "SELECT *, kategori.nama AS kategori FROM buku JOIN kategori ON buku.idkategori = kategori.idkategori order by idbuku";
          $result = $db->query($query);
          if(!$result){
            die("Could not query the database: <br />". $db->error ."<br />Query: ".$query);
          }
          // Fetch and display the results
          while ($row = $result->fetch_object()){
            echo '<tr>';
            $image = $row->file_gambar;
            echo '<td>'.'<img src="'.$image.'" width="100">'.'</td>';
            echo '<td>'.$row->isbn.'</td>';
            echo '<td>'.$row->kategori.'</td>';
            echo '<td>'.$row->judul.'</td>';
            echo '<td>'.$row->pengarang.'</td>';
            echo '<td>'.$row->penerbit.'</td>';
            echo '<td>'.$row->tgl_insert.'</td>';
            echo '<td>'.$row->tgl_update.'</td>';
            echo '<td>'.$row->stok.'</td>';
            echo '<td>'.$row->stok_tersedia.'</td>';
            echo '<td>
            <a class="btn btn-info btn-sm" href="edit_buku.php?id='.$row->idbuku.'">Edit</a>&nbsp;&nbsp;
            <a class="btn btn-danger btn-sm" href="delete_buku.php?id='.$row->idbuku.'">Delete</a>
            </td>';
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
</div>
<footer id="sticky-footer" class="flex-shrink-0 py-4 text-white-50">
  <div class="container text-center" id="footer">
    <small>Copyright &copy; Elibrary by Margareta Valencia</small>
  </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
<script src="js/ajax.js"></script>