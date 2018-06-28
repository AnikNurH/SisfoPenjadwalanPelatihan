<?php 
include('../config/config.php');

$nip = $_GET['nip'];

$query = mysql_query("delete from tb_user where nip='$nip'") or die(mysql_error());

if ($query) {
	header('location:staff.php?msg=success');
} else {
	header('location:staff.php?msg=failed');
}
?>