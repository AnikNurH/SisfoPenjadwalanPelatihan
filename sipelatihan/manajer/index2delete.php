<?php 
include('../config/config.php');

$id_workshop = $_GET['id_workshop'];

$query = mysql_query("delete from workshop where id_workshop='$id_workshop'") or die(mysql_error());

if ($query) {
	header('location:index2.php?msg=success');
} else {
	header('location:index2.php?msg=failed');
}
?>