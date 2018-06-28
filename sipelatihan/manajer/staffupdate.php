<?php
include('../config/config.php');

//tangkap data dari form
$nip = $_POST['nip'];
$username = $_POST['username'];


//update data di database sesuai nip
//$query = mysql_query("update tb_user set nip='$nip', username='$username',  where nip='$nip'") or die(mysql_error());
$sql= "UPDATE `tb_user` SET nip='$nip', username='$username' WHERE nip='$nip'";
$query=mysql_query($sql);
if ($query) {
	header('location:datauser.php?msg=success');
} else {
	header('location:datauser.php?msg=failed');
}
?>