<?php 
session_start();

$logged_in = false;

//jika session username belum dibuat, atau session username kosong
if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {	
	//redirect ke halaman login
	
	echo "<script>
			alert('Maaf Anda Harus Login terlebih dahulu');
            window.location.href = '../index.php'
    </script> ";
} else {
	$logged_in = true;
}
?>