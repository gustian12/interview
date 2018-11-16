<?php
  include 'koneksi.php';

  if (isset($_GET['id_user'])) {
    $id_user = ($_GET["id_user"]);

    $query = "SELECT * FROM user WHERE id_user='$id_user'";
    $result = mysqli_query($link, $query);
    if(!$result){
      die ("Query Error: ".mysqli_errno($link).
         " - ".mysqli_error($link));
    }
    $data = mysqli_fetch_assoc($result);
    $nama = $data["nama"];
    $email = $data["email"];
    $username = $data["username"];
    $password = $data["password"];
    $alamat = $data["alamat"];
    $tempat_lahir = $data["tempat_lahir"];
    $tanggal_lahir = $data["tanggal_lahir"];
    $status = $data["status"];
    $agama = $data["agama"];
    $tinggi_badan = $data["tinggi_badan"];
    $berat_badan = $data["berat_badan"];
    $jenis_kelamin = $data["jenis_kelamin"];
    $lisensi_terapis = $data["lisensi_terapis"];



  } else {
    header("location:index.php");
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <style>
      h1{
        text-align: center;
      }
      .container{
        width: 400px;
        margin: auto;
      }
    </style>
  </head>
  <body>
    <h1>Edit Data</h1>
    <div class="container">
      <form id="form_pegawai" action="edit_proses.php" method="post">
        <input type="hidden" name="id_user" value="<?php echo $id_user; ?>">
        <fieldset>
        <legend>Edit Data </legend>
          
          <p>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" id="nama" value="<?php echo $nama ?>">
          </p>
          <p>
            <label for="alamat">email: </label>
            <input type="text" name="email" id="email" value="<?php echo $email ?>">
          </p>
          <p>
            <label for="alamat">username : </label>
            <input type="text" name="username" id="username" value="<?php echo $username ?>">
          </p>
          <p>
            <label for="alamat">password : </label>
            <input type="text" name="password" id="password" value="<?php echo $password ?>">
          </p>
          <p>
            <label for="alamat">alamat : </label>
            <input type="text" name="alamat" id="alamat" value="<?php echo $alamat ?>">
          </p>
          <p>
            <label for="alamat">tempat lahir : </label>
            <input type="text" name="tempat_lahir" id="tempat_lahir" value="<?php echo $tempat_lahir ?>">
          </p>
          <p>
            <label for="alamat">tanggal LAhir : </label>
            <input type="text" name="tanggal_lahir" id="tanggal_lahir" value="<?php echo $tanggal_lahir ?>">
          </p>
          <p>
            <label for="alamat">status : </label>
            <input type="text" name="status" id="status" value="<?php echo $status ?>">
          </p>
          <p>
            <label for="alamat">agama : </label>
            <input type="text" name="agama" id="agama" value="<?php echo $agama ?>">
          </p>
          <p>
            <label for="alamat">tinggi badan : </label>
            <input type="text" name="tinggi_badan" id="tinggi_badan" value="<?php echo $tinggi_badan ?>">
          </p>
          <p>
            <label for="alamat">berat badan : </label>
            <input type="text" name="berat_badan" id="berat_badan" value="<?php echo $berat_badan ?>">
          </p>
          <p>
            <label for="alamat">jenis kelamin : </label>
            <input type="text" name="jenis_kelamin" id="jenis_kelamin" value="<?php echo $jenis_kelamin ?>">
          </p>
          <p>
            <label for="alamat">lisensi terapis : </label>
            <input type="text" name="lisensi_terapis" id="lisensi_terapis" value="<?php echo $lisensi_terapis ?>">
          </p>
          
        </fieldset>
        <p>
          <input type="submit" name="edit" value="Update Data">
        </p>
      </form>
  </div>
  </body>
</html>