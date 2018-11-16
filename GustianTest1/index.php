
<?php
include "koneksi.php";
session_start();
if (!isset($_SESSION['username'])){
header ("location:login.php");
}
?>
Berhasil Login, <a href="logout.php">Logout</a>
<html>
  <head>
    <style>
      table{
        width: 840px;
        margin: auto;
      }
      h1{
        text-align: center;
      }
    </style>
  </head>
  <body>
    <h1>Tabel Data</h1>
    <br/>
    <table border="1">
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>username</th>
        <th>Email</th>
        <th>Password</th> 
        <th>Alamat</th>
        <th>tempat_lahir</th>
        <th>tanggal_lahir</th>
        <th>status</th>
        <th>agama</th>
        <th>tinggi_badan</th>
        <th>berat_badan</th>
        <th>jenis_kelamin</th>
        <th>lisensi_terapis</th>
        
        
        <th>Pilihan</th>
      </tr>
      <?php
      $query = "SELECT *FROM user ORDER BY nama ASC";
      $result = mysqli_query( $link,$query);
      if(!$result){
        die ("Query Error: ".mysqli_errno($link).
           " - ".mysqli_error($link));
      }

      $no = 1; 
      while($data = mysqli_fetch_assoc($result))
      {
        echo "<tr>";
        echo "<td>$no</td>"; 
        echo "<td>$data[nama]</td>"; 
        echo "<td>$data[username]</td>"; 
        echo "<td>$data[email]</td>"; 
        echo "<td>$data[password]</td>"; 
        echo "<td>$data[alamat]</td>"; 
        echo "<td>$data[tempat_lahir]</td>"; 
        echo "<td>$data[tanggal_lahir]</td>"; 
        echo "<td>$data[status]</td>"; 
        echo "<td>$data[agama]</td>"; 
        echo "<td>$data[tinggi_badan]</td>"; 
        echo "<td>$data[berat_badan]</td>"; 
        echo "<td>$data[jenis_kelamin]</td>"; 
        echo "<td>$data[lisensi_terapis]</td>"; 
        echo '<td>
          <a href="edit.php?id_user='.$data['id_user'].'">Edit</a> /
          <a href="hapus.php?id_user='.$data['id_user'].'"
          onclick="return confirm(\'Anda yakin akan menghapus data?\')">Hapus</a>
        </td>';
        echo "</tr>";
        $no++;
        } 
      ?>

    </table>
  </body>
  <script type="text/javascript">
  $(document).ready(function(){
    $('#table').DataTable();
  });
  </script>
</html>