<?php 
include_once('../config/config.php');

// terima data dari halaman addindex2.php
$kegiatan   = mysql_real_escape_string($_POST['kegiatan']);
$tglawal   = mysql_real_escape_string($_POST['tglawal']);
$tglakhir    = mysql_real_escape_string($_POST['tglakhir']);
$kota = mysql_real_escape_string($_POST['kota']);
$provinsi = mysql_real_escape_string($_POST['provinsi']);
$institusi = mysql_real_escape_string($_POST['institusi']);
$status = mysql_real_escape_string($_POST['status']);

$sql= "INSERT INTO `workshop` (`id_workshop`, `namakegiatan`, `tgl_awal`, `tgl_akhir`, `kota`, `provinsi`, `institusi`, `status`) VALUES (NULL, '$kegiatan', '$tglawal', '$tglakhir', '$kota', '$provinsi', '$institusi', '$status');";
//echo $sql;

//simpan data ke database
$query = mysql_query($sql);

if ($query) {
  // jika berhasil menyimpan
  echo "<script>alert('Tambah data berhasil'); window.location.href = 'index2.php';</script>";
header('location: index2.php');
} else {
  // jika gagal menyimpan
header('location: insertindex2.php?msg=failed');
}
?>