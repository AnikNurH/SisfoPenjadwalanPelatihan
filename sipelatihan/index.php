<?php 
session_start();

include_once('config/config.php');

?>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>SIPP | SEAMOLEC 2018</title>

  <!-- Bootstrap core CSS -->

  <link href="css/bootstrap.min.css" rel="stylesheet">

  <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="css/custom.css" rel="stylesheet">
  <link href="css/icheck/flat/green.css" rel="stylesheet">


  <script src="js/jquery.min.js"></script>

  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body style="background:#F7F7F7;">

  <div class="">
    <fieldset>
    <div id="wrapper">
      <div id="login" class="animate form">
        <section class="login_content">
          <form action="config/auth.php" method="post">
            <h1>Login Form</h1>
            <?php
			error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 
			$error = $_GET['error'];
			if ($error == 1) {
			?>
			<div class="error">Username dan Password belum diisi.</div>
			<?php } else if ($error == 2) {?>
			<div class="error">Username belum diisi.</div>
			<?php } else if ($error == 3) {?>
			<div class="error">Password belum diisi.</div>
			<?php } else if ($error == 4) {?>
			<div class="error">Username dan Password tidak terdaftar.</div>
			<?php } ?>
			<div class="">
              <input type="text" name = "username" class="form-control" placeholder="Username" required="" />
            </div>
            <div>
              <input type="password" name = "password" class="form-control" placeholder="Password" required="" />
            </div>
            <div>
              <button class="btn btn-default" type="submit" name="submit">Login</a>
              
            </div>
           
              <div class="clearfix"></div>
              <br />
              <div>
                <h1><i style="font-size: 26px;"></i> SIPP | SEAMOLEC 2018</h1>

                <p>Seamolec©2018 All Rights Reserved. Sistem Informasi Penjadwalan Pelatihan</p>
              </div>
            </div>
          </form>
         
    </div>
  </div>

</body>

</html>
