<?php
  include_once('Model/tiketModel.php');
  include ('connect.php');
 
// menangkap data yang di kirim dari form
$kode_tiket = $_POST['kode_tiket'];
$no_penerbangan = $_POST['no_penerbangan'];
$kelas = $_POST['kelas'];
$asal = $_POST['asal'];
$tujuan = $_POST['tujuan'];
$harga = $_POST['harga'];
 
// update data ke database
mysqli_query($connect,"update tiket set kode_tiket='$kode_tiket', no_penerbangan='$no_penerbangan', kelas='$kelas', asal='$asal', tujuan='$tujuan', harga='$harga' where kode_tiket='$kode_tiket'");
 
// mengalihkan halaman kembali ke index.php
header("location:tabelUpdate.php");
 
?>