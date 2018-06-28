<?php
include('../config/config.php');

//tangkap data dari form
$id_workshop = $_POST['id'];
$kegiatan = $_POST['kegiatan'];
$tglawal = $_POST['tglawal'];
$tglakhir = $_POST['tglakhir'];
$kota = $_POST['kota'];
$provinsi = $_POST['provinsi'];
$institusi = $_POST['institusi'];
$status = $_POST['status'];


//update data di database sesuai id workshop
$sql= "UPDATE `workshop` SET namakegiatan='$kegiatan', tgl_awal='$tglawal', tgl_akhir='$tglakhir', kota='$kota', 
provinsi='$provinsi', institusi='$institusi', status='$status' WHERE id_workshop='$id_workshop'";
//echo $sql;
$query=mysql_query($sql);
if ($query) {
	header('location:index2.php?msg=success');
} else {
	header('location:editindex2.php?msg=failed');
}
?>