<?php
include_once('../config/config.php');
include('../config/cek-login.php');

if ($_SESSION['level']=='manajer'){
	
}
else {?><script type="text/javascript">
			alert("Maaf Anda Harus Login terlebih dahulu");
            window.location.href = "../index.php"
    </script> 
  <h1>anda tidak berhak mengakses halamman ini</h1>
<?php }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SIPP | SEAMOLEC 2018</title>

    <!-- Bootstrap core CSS -->

    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <link href="../fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="../css/custom.css" rel="stylesheet">
    <link href="../css/icheck/flat/green.css" rel="stylesheet">

    <script src="../js/jquery.min.js"></script>

    <!--[if lt IE 9]>
      <script src="../assets/js/ie8-responsive-file-warning.js"></script>
    <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>


  <body class="nav-md">

    <div class="container body">


      <div class="main_container">

        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">

            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"> <span>SIPP | SEAMOLEC 2018</span></a>
            </div>
            <div class="clearfix"></div>
            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

              <div class="menu_section">
                <h3></h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Pelatihan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display: none">
                      <li><a href="jadwalpelatihan.php">Jadwal Pelatihan</a>
					  <li><a href="index2.php">Kelola Data Pelatihan</a>
                      </li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i>Team <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display: none">
                      <li><a href="staff.php">Data Staff</a>
                      </li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> User Management <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display: none">
                      <li><a href="datauser.php">Data User</a>
                      </li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Laporan <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu" style="display: none">
                      <li><a href="laporan.php">Laporan Pelatihan</a>
                      </li>
                    </ul>
                  </li>
                  </div>
            </div>
            <!-- /sidebar menu -->
			
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">

          <div class="nav_menu">
            <nav class="" role="navigation">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

             
                </li>
              </ul>
            </nav>
          </div>

        </div>
        <!-- /top navigation -->
 <!-- page content -->
      <div class="right_col" role="main">

        <div class="">
          <div class="page-title">
            

            
          </div>
          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Proposal Pelatihan </h2>
                  <ul class="nav navbar-right panel_toolbox">  
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">

                  <section class="content invoice">
                    <!-- title row -->
                    <div class="row">
                      <div class="col-xs-12 invoice-header">
                        <h1>
                                        <i class="fa fa-globe"></i> SEAMOLEC
                                        
                                    </h1>
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- info row -->
                    
                      <!-- /.col -->
                      <div class="pull-left">
					  
                        <b></b>
                        <br>
                        <b></b>
                        <b></b>
                        <br>
                        <b></b>
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- Table row -->
	
                    <div class="row">
                      <div class="col-xs-12 table">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th>ID Workshop</th>
                              <th>Nama Kegiatan</th>
                              <th>Tanggal Awal</th>
							  <th>Tanggal Akhir</th> 
							  <th>Kota</th>
							  <th>Provinsi</th>
							  <th>Institusi</th>
                             
                            </tr>
                          </thead>
	<?php 
      // terima id_workshop dari halaman data pelatihan
      $id_workshop = $_GET['id_workshop'];
      
      $query = mysql_query("select * from workshop where id_workshop='$id_workshop'");
      
      $data = mysql_fetch_array($query);
	  $status=$data['status'];
      ?>
                          <tbody>
                            <tr>
                              <td><?php echo $data['id_workshop']; ?></td>
                              <td><?php echo $data['namakegiatan']; ?></td>
                              <td><?php echo $data['tgl_awal']; ?></td>
                              <td><?php echo $data['tgl_akhir']; ?>
                              </td> 
							  <td><?php echo $data['kota']; ?></td>
							  <td><?php echo $data['provinsi']; ?></td>
							  <td><?php echo $data['institusi']; ?></td>
                            </tr>
                           
                          </tbody>
                        </table>
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <div class="row">
                      <!-- accepted payments column -->
                      <div class="col-xs-6">
                        
                      </div>
                      <!-- /.col -->
                      <div class="col-xs-12">
                        <p class="lead">Data Team</p>
                        <div class="table-responsive">
                          <table class="table">
                            <tbody>
                              <tr>
                                <td valign="top" width="10%"><p>Daftar Team</p></td>
                                <td valign="top">:</td>
                                <td>
                                  <?php
                                    $no = 1;
                                    $tamvan = "SELECT t.id_tl, u.nama, u.divisi FROM tb_user u, tb_tl t WHERE t.id_workshop = '$id_workshop' AND u.id_user = t.id_user";
                                    $exe = mysql_query($tamvan);
                                    while ($cuki = mysql_fetch_array($exe)) {
                                      # code...
                                      echo $no++.". ";
                                      echo $cuki[1]." &nbsp; (".$cuki[2].")<br />";
                                    }
                                  ?>
                                </td>
                              </tr>
                              
                            </tbody>
                          </table>
                        </div>
                      </div>
					  <br>
					  </br>
					   <div class="col-xs-12">
                        <table border = "0" width = "90%" align = "center">
							<tr>
								<td width = "50%"><p align = "left">Manajer Divisi Training</p></td>
								<td width = "50%"><p align = "right">Direktur SEAMOLEC</p></td>
							</tr>
							<tr>
								<td height = 100px"></td>
								<td></td>
							</tr>
							<tr>
								<td><p align = "left">Renaldo Rhesky Nosyafril</p></td>
								<td><p align = "right">Dr.Abi Sujak, M.Sc</p></td>
							</tr>
						</table>
                        </div>
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <!-- this row will not appear when printing -->
                    <div class="row no-print">
                      <div class="col-xs-12">
                        <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                        
                      </div>
                    </div>
                  </section>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /page content -->
       

        <!-- footer content -->
        <footer>
         
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
		</footer>
        <!-- /footer content -->
      </div>
    </div>
	<script src="../js/bootstrap.min.js"></script>

    <!-- bootstrap progress js -->
    <script src="../js/progressbar/bootstrap-progressbar.min.js"></script>
    <!-- icheck -->
    <script src="../js/icheck/icheck.min.js"></script>

    <script src="../js/custom.js"></script>

    <!-- pace -->
    <script src="../js/pace/pace.min.js"></script>
      </div>
    </div>
  </body>
</html>