<?php
if (isset($_POST['edit'])) {
  include("koneksi.php");

  $id_user = $_POST['id_user'];
  $nama	= $_POST['nama'];
	$email	= $_POST['email'];
	$username  = $_POST['username'];
  $password = $_POST['password'];
  $alamat = $_POST['alamat'];
  $tempat_lahir = $_POST['tempat_lahir'];
  $tanggal_lahir = $_POST['tanggal_lahir'];
  $status = $_POST['status'];
  $agama = $_POST['agama'];
  $tinggi_badan = $_POST['tinggi_badan'];
  $berat_badan = $_POST['berat_badan'];
  $jenis_kelamin= $_POST['jenis_kelamin'];
  $lisensi_terapis = $_POST['lisensi_terapis'];
  

  $query  = "UPDATE user SET ";
  $query .= "nama = '$nama', ";
  $query .= "email = '$email', ";
  $query .= "username = '$username', ";
  $query .= "password = '$password', ";
  $query .= "alamat = '$alamat', ";
  $query .= "tempat_lahir = '$tempat_lahir', ";
  $query .= "tanggal_lahir = '$tanggal_lahir', ";
  $query .= "status = '$status', ";
  $query .= "agama = '$agama', ";
  $query .= "tinggi_badan = '$tinggi_badan', ";
  $query .= "berat_badan = '$berat_badan', ";
  $query .= "jenis_kelamin = '$jenis_kelamin', ";
  $query .= "lisensi_terapis = '$lisensi_terapis'";
  $query .= "WHERE id_user = '$id_user'";

  $result = mysqli_query($link, $query);

  if(!$result) {
    die ("Query gagal dijalankan: ".mysqli_errno($link).
       " - ".mysqli_error($link));
  }
}

header("location:index.php");

?>