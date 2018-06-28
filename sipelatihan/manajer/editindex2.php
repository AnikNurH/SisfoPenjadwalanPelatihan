<?php
include_once('../config/config.php');
include('../config/cek-login.php');

if ($_SESSION['level']=='manajer'){
	
}
else {?><script type="text/javascript">
			alert("Maaf Anda Harus Login terlebih dahulu");
            window.location.href = "../login.php"
    </script> 
  <h1>anda tidak berhak mengakses halamman ini</h1>
<?php }

?>
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
	<link href="../css/custom.css" rel="stylesheet">
  <link href="../css/icheck/flat/green.css" rel="stylesheet">
  <!-- editor -->
  <link href="../css/editor/external/google-code-prettify/prettify.css" rel="stylesheet">
  <link href="../css/editor/index.css" rel="stylesheet">
  <!-- select2 -->
  <link href="../css/select/select2.min.css" rel="stylesheet">
  <!-- switchery -->
  <link rel="stylesheet" href="../css/switchery/switchery.min.css" />

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

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <li><a href="../config/logout.php"><i class="fa fa-sign-out pull-down"></i> Log Out</a>
                    </li>
                  </ul>
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
              <div class="title_left">
                <h3>Edit Data Pelatihan</h3>
              </div> 
            </div>
            <div class="clearfix"></div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel" style="height:600px;">
                  <div class="x_title">
				   <div class="x_content">
                  <br />
				 
                  <form action="updateindex2.php" method="post" data-parsley-validate class="form-horizontal form-label-left">
				   <?php
			error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 			
			$message = $_GET['msg'];
			if ($message == 'success') {
			?>
			<div class="info">Success</div>
			<?php } else if ($message == 'failed') {?>
			<div class="error">Error</div>
			<?php } ?>
			<?php 
      // terima id_workshop dari halaman data pelatihan
      $id_workshop = $_GET['id_workshop'];
      
      $query = mysql_query("select * from workshop where id_workshop='$id_workshop'");
      
      $data = mysql_fetch_array($query);
	  $status=$data['status'];
      ?>
					<div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="hidden" name = "id"  required="required" value="<?php echo $data['id_workshop'];?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kegiatan">Nama Kegiatan <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name = "kegiatan" id="kegiatan" required="required" value="<?php echo $data['namakegiatan'];?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tglawal">Tanggal Awal <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="date" name = "tglawal" id="tglawal" required="required" value="<?php echo $data['tgl_awal'];?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    
					<div class="form-group">
                      <label for="tglakhir" class="control-label col-md-3 col-sm-3 col-xs-12">Tanggal Akhir</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="date" name="tglakhir" value="<?php echo $data['tgl_akhir'];?>" class="form-control col-md-7 col-xs-12" type="text">
                      </div>
					  
                    </div>
                    <div class="form-group">
                      <label for="kota" class="control-label col-md-3 col-sm-3 col-xs-12">Kota</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="kota" name="kota" value="<?php echo $data['kota'];?>" class="form-control col-md-7 col-xs-12" type="text" >
                      </div>
					  
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Provinsi<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="provinsi" name="provinsi" value="<?php echo $data['provinsi'];?>" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                      </div>
                    </div>
					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Institusi <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input id="institusi" name="institusi" value="<?php echo $data['institusi'];?>" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                      </div>
                    </div>
					 <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <select class="form-control"  name="status" id="status" >
                          <option value="" <?php if (isset($status) and $status<1) echo"selected"; ?>>Choose Option</option>
                          <option value="1" <?php if (isset($status) and $status=="1") echo"selected"; ?>>Baru</option>
                          <option value="2" <?php if (isset($status) and $status=="2") echo"selected";?>>Berjalan</option>
						  <option value="3" <?php if (isset($status) and $status=="3") echo"selected";?>>Selesai</option>
                        </select>
                      </div>
                    </div>
					
					 <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Data Team</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <?php
                $no = 1;
                $tamvan = "SELECT t.id_tl, u.nama FROM tb_user u, tb_tl t WHERE t.id_workshop = '$id_workshop' AND u.id_user = t.id_user";
                $exe = mysql_query($tamvan);
                while ($cuki = mysql_fetch_array($exe)) {
                  # code...
                  echo $no++.". ";
                  echo $cuki[1]." </br>";
                  
                }
              ?>
                      </div>
                    </div>
					
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">						
                        <a href = "index2.php"><button type="button" name="cancel" class="btn btn-primary">Cancel</button></a/>
                        <button type="submit" name="submit" class="btn btn-success">Submit</button>
                      </div>
                    </div>

                  </form>
                </div>
                    </ul>
                </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
           Sistem Informasi Penjadwalan Pelatihan  <a href="https://seamolec.org">| SEAMOLEC 2018</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
		</footer>
        <!-- /footer content -->
      </div>
    </div>
	<script src="../js/bootstrap.min.js"></script>
    <!-- icheck -->
    <script src="../js/icheck/icheck.min.js"></script>

    <script src="../js/custom.js"></script>

    <!-- pace -->
    <script src="../js/pace/pace.min.js"></script>
	<div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
  </div>

  <script src="../js/bootstrap.min.js"></script>

  <!-- form validation -->
  <script type="../text/javascript" src="js/parsley/parsley.min.js"></script>
  <!-- textarea resize -->
  <script src="../js/textarea/autosize.min.js"></script>
  <script>
    autosize($('.resizable_textarea'));
  </script>
  <!-- Autocomplete -->
  <script type="../text/javascript" src="js/autocomplete/countries.js"></script>
  <script src="../js/autocomplete/jquery.autocomplete.js"></script>
  <!-- pace -->
  <script src="js/pace/pace.min.js"></script>
  <script type="text/javascript">
    $(function() {
      'use strict';
      var countriesArray = $.map(countries, function(value, key) {
        return {
          value: value,
          data: key
        };
      });
      // Initialize autocomplete with custom appendTo:
      $('#autocomplete-custom-append').autocomplete({
        lookup: countriesArray,
        appendTo: '#autocomplete-container'
      });
    });
  </script>
  <script src="js/custom.js"></script>


  <!-- select2 -->
  <script>
    $(document).ready(function() {
      $(".select2_single").select2({
        placeholder: "Select a state",
        allowClear: true
      });
      $(".select2_group").select2({});
      $(".select2_multiple").select2({
        maximumSelectionLength: 4,
        placeholder: "With Max Selection limit 4",
        allowClear: true
      });
    });
  </script>
  <!-- /select2 -->
  <!-- input tags -->
  <script>
    function onAddTag(tag) {
      alert("Added a tag: " + tag);
    }

    function onRemoveTag(tag) {
      alert("Removed a tag: " + tag);
    }

    function onChangeTag(input, tag) {
      alert("Changed a tag: " + tag);
    }

    $(function() {
      $('#tags_1').tagsInput({
        width: 'auto'
      });
    });
  </script>
  <!-- /input tags -->
  <!-- form validation -->
  <script type="text/javascript">
    $(document).ready(function() {
      $.listen('parsley:field:validate', function() {
        validateFront();
      });
      $('#demo-form .btn').on('click', function() {
        $('#demo-form').parsley().validate();
        validateFront();
      });
      var validateFront = function() {
        if (true === $('#demo-form').parsley().isValid()) {
          $('.bs-callout-info').removeClass('hidden');
          $('.bs-callout-warning').addClass('hidden');
        } else {
          $('.bs-callout-info').addClass('hidden');
          $('.bs-callout-warning').removeClass('hidden');
        }
      };
    });

    $(document).ready(function() {
      $.listen('parsley:field:validate', function() {
        validateFront();
      });
      $('#demo-form2 .btn').on('click', function() {
        $('#demo-form2').parsley().validate();
        validateFront();
      });
      var validateFront = function() {
        if (true === $('#demo-form2').parsley().isValid()) {
          $('.bs-callout-info').removeClass('hidden');
          $('.bs-callout-warning').addClass('hidden');
        } else {
          $('.bs-callout-info').addClass('hidden');
          $('.bs-callout-warning').removeClass('hidden');
        }
      };
    });
    try {
      hljs.initHighlightingOnLoad();
    } catch (err) {}
  </script>
  <!-- /form validation -->
  <!-- editor -->
  
	<!-- /datepicker -->
  <script type="text/javascript">
    $(document).ready(function() {
      $('#single_cal1').daterangepicker({
        singleDatePicker: true,
        calender_style: "picker_1"
      }, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
      });
      $('#single_cal2').daterangepicker({
        singleDatePicker: true,
        calender_style: "picker_2"
      }, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
      });
      $('#single_cal3').daterangepicker({
        singleDatePicker: true,
        calender_style: "picker_3"
      }, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
      });
      $('#single_cal4').daterangepicker({
        singleDatePicker: true,
        calender_style: "picker_4"
      }, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
      });
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#reservation').daterangepicker(null, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
      });
    });
  </script>
  <!-- /datepicker -->
  </script>
      </div>
    </div>
  </body>
</html>