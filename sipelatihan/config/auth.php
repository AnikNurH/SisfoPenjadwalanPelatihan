<?php
include('config.php');

session_start();

// terima data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// untuk mencegah sql injection
// kita gunakan mysql_real_escape_string
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

// cek data yang dikirim, apakah kosong atau tidak
if (empty($username) && empty($password)) {
	// kalau username dan password kosong
	header('location:index.php?error=1');
	break;
} else if (empty($username)) {
	// kalau username saja yang kosong
	header('location:index.php?error=2');
	break;
} else if (empty($password)) {
	// kalau password saja yang kosong
	header('location:index.php?error=3');
	break;
}

$query = mysql_query("select * from tb_user where username='$username' and password='$password'");

$data = mysql_fetch_array($query);

if(mysql_num_rows($query)==1){//jika berhasil akan bernilai 1

$_SESSION['username'] = $data['username'];
$_SESSION['level'] = $data['level'];

if($data['level']=='manajer'){
		header('location:../manajer/jadwalpelatihan.php');
}
	else if($data['level']=='staff'){
		header('location:../staff/jadwalpelatihan.php');
	}
}
 else {
	// kalau username ataupun password tidak terdaftar di database
	header('location:../index.php?error=4');
}
?>