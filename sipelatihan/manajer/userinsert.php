<?php 
include_once('../config/config.php');

// terima data dari halaman adduser.php
$nip   = mysql_real_escape_string($_POST['nip']);
$username   = mysql_real_escape_string($_POST['username']);
$password    = mysql_real_escape_string($_POST['password']);
$nama = mysql_real_escape_string($_POST['nama']);
$email = mysql_real_escape_string($_POST['email']);
$phone = mysql_real_escape_string($_POST['phone']);
$divisi = mysql_real_escape_string($_POST['divisi']);
$level = mysql_real_escape_string($_POST['level']);

$sql= "INSERT INTO `tb_user` (`id_user`, `nip`, `username`, `password`, `nama`, `email`, `phone`, `divisi`, `level`) VALUES (NULL, '$nip', '$username', '$password', '$nama', '$email', '$phone', '$divisi', '$level');";


//simpan data ke database
$query = mysql_query($sql);

if ($query) {
  // jika berhasil menyimpan
  echo "<script>alert('Tambah data berhasil'); window.location.href = 'datauser.php';</script>";
//header('location: datauser.php');
} else {
  // jika gagal menyimpan
header('location: adduser.php?msg=failed');
}
?>