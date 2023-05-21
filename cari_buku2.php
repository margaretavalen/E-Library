<?php
require_once ('koneksi.php');
$judul = $_GET['judul'];
$query = "SELECT *, kategori.nama AS kategori FROM buku JOIN kategori ON buku.idkategori = kategori.idkategori WHERE judul LIKE '%".$judul."%'";
$result = $db->query($query);
?>
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
    echo'</tr>';
  }
  echo '</table>';
  $result->free();
  $db->close();
  ?>
</table>
