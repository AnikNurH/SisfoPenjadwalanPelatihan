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
                <h3>Detail Data Pelatihan</h3>
              </div> 
            </div>
            <div class="clearfix"></div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel" style="height:600px;">
                  <div class="x_title">
				   <div class="x_content">
                  <br />
                  <?php 
      // terima id_workshop dari halaman data pelatihan
      $id_workshop = $_GET['id_workshop'];
      
      $query = mysql_query("select * from workshop where id_workshop='$id_workshop'");
      
      $data = mysql_fetch_array($query);
    $status=$data['status'];
      ?>
        <table border="0" align="center" width="90%">
          <tr>
            <td><p style="padding: 8px">Nama Kegiatan</p></td>
            <td>:</td>
            <td><?php echo $data['namakegiatan']; ?></td>
          </tr>
          <tr>
            <td><p style="padding: 8px">Tanggal Awal</p></td>
            <td>:</td>
            <td><?php echo $data['tgl_awal']; ?></td>
          </tr>
          <tr>
            <td><p style="padding: 8px">Tanggal Akhir</p></td>
            <td>:</td>
            <td><?php echo $data['tgl_akhir']; ?></td>
          </tr>
          <tr>
            <td><p style="padding: 8px">Kota</p></td>
            <td>:</td>
            <td><?php echo $data['kota']; ?></td>
          </tr>
          <tr>
            <td><p style="padding: 8px">Provinsi</p></td>
            <td>:</td>
            <td><?php echo $data['provinsi']; ?></td>
          </tr>
          <tr>
            <td><p style="padding: 8px">Institusi</p></td>
            <td>:</td>
            <td><?php echo $data['institusi']; ?></td>
          </tr>
          <?php
            if (isset($_POST['kirim'])) {
              # code...
              $staff = $_POST['staff'];
              $id_w = $_POST['workshop'];
              if ($staff){
                  foreach ($staff as $t){
                      //$todo->Tambah($id, $t);
                      $ganteng = "INSERT INTO tb_tl (id_workshop, id_user) VALUES ('$id_w', '$t');";
                      //echo $ganteng;
                      $exe = mysql_query($ganteng);
                      if ($exe) {
                        # code...
                        echo "<script>document.location.href='?id_workshop='".$id_w."</script>";
                      }else{                        
                        echo "<script>alert('Kirim Data Staff Gagal!')</script>";
                      }
                  }
              }

            }

             if (isset($_GET['action'])) {
                if ($_GET['action'] == "hapus" && isset($_GET['id_tl']) && isset($_GET['id_workshop'])) {
                  $id_t = $_GET['id_tl'];
                  $id_w = $_GET['id_workshop'];

                  $pesona = "DELETE FROM tb_tl WHERE id_tl = '$id_t'";      
                  $exe = mysql_query($pesona);
                  //echo $id_w;
                  echo "<script>document.location.href='?id_workshop='".$id_w."</script>";
                }
            }
          ?>
          <form action="#" method="post">
            <tr>
              <td valign="top"><p style="padding: 8px">Select Team</p></td>
              <td valign="top">:</td>
              <td>
              <input type="hidden" name="workshop" value="<?=$id_workshop?>"></input>
              <select style="padding-bottom: 20px" multiple="multiple" name="staff[]" class="form-control" type="multi-select" name="status">
                <?php
                $query = mysql_query("SELECT * FROM tb_user");

                while ($data = mysql_fetch_array($query)) {
                ?> <option value="<?php echo $data['id_user'];?>"><?php echo $data['nama'];?></option><?php } ?>
              </select>
              </td>
            </tr>
            <tr>
              <td><p style="padding: 20px"></p></td>
              <td></td>
              <td><button name="kirim" class="btn btn-success">Kirim</button></td>
            </tr>
          </form>            
          <tr>
            <td valign="top"><p style="padding: 8px">Daftar Team</p></td>
            <td valign="top">:</td>
            <td>
              <?php
                $no = 1;
                $tamvan = "SELECT t.id_tl, u.nama FROM tb_user u, tb_tl t WHERE t.id_workshop = '$id_workshop' AND u.id_user = t.id_user";
                $exe = mysql_query($tamvan);
                while ($cuki = mysql_fetch_array($exe)) {
                  # code...
                  echo $no++.". ";
                  echo $cuki[1]." &nbsp;";
                  echo "<a href = '?id_workshop=".$id_workshop."&action=hapus&id_tl=".$cuki[0]."' label= 'hapus'><label style = 'color:red'>x</label></a><br />";
                }
              ?>
            </td>
          </tr>
            
        </table>
                      
                </div>
                    </ul>
                </div>
                <div class="form-group">
                  <div class="col-md-9 col-sm-9 col-xs-12">
                    <a href="index2detail.php?id_workshop=<?php echo $id_workshop;?>"><button class="btn btn-success">Cetak Laporan</button></a>
                  </div>
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

    <!-- bootstrap progress js -->
    <script src="../js/progressbar/bootstrap-progressbar.min.js"></script>
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

  <!-- bootstrap progress js -->
  <script src="../js/progressbar/bootstrap-progressbar.min.js"></script>
  
  <!-- icheck -->
  <script src="../js/icheck/icheck.min.js"></script>
  <!-- tags -->
  <script src="../js/tags/jquery.tagsinput.min.js"></script>
  <!-- switchery -->
  <script src="../js/switchery/switchery.min.js"></script>
  <!-- daterangepicker -->
  <script type="../text/javascript" src="js/moment/moment.min.js"></script>
  <script type="../text/javascript" src="js/datepicker/daterangepicker.js"></script>
  <!-- richtext editor -->
  <script src="../js/editor/bootstrap-wysiwyg.js"></script>
  <script src="../js/editor/external/jquery.hotkeys.js"></script>
  <script src="../js/editor/external/google-code-prettify/prettify.js"></script>
  <!-- select2 -->
  <script src="../js/select/select2.full.js"></script>
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
  <script>
    $(document).ready(function() {
      $('.xcxc').click(function() {
        $('#descr').val($('#editor').html());
      });
    });

    $(function() {
      function initToolbarBootstrapBindings() {
        var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
            'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
            'Times New Roman', 'Verdana'
          ],
          fontTarget = $('[title=Font]').siblings('.dropdown-menu');
        $.each(fonts, function(idx, fontName) {
          fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));
        });
        $('a[title]').tooltip({
          container: 'body'
        });
        $('.dropdown-menu input').click(function() {
            return false;
          })
          .change(function() {
            $(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
          })
          .keydown('esc', function() {
            this.value = '';
            $(this).change();
          });

        $('[data-role=magic-overlay]').each(function() {
          var overlay = $(this),
            target = $(overlay.data('target'));
          overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
        });
        if ("onwebkitspeechchange" in document.createElement("input")) {
          var editorOffset = $('#editor').offset();
          $('#voiceBtn').css('position', 'absolute').offset({
            top: editorOffset.top,
            left: editorOffset.left + $('#editor').innerWidth() - 35
          });
        } else {
          $('#voiceBtn').hide();
        }
      };

      function showErrorAlert(reason, detail) {
        var msg = '';
        if (reason === 'unsupported-file-type') {
          msg = "Unsupported format " + detail;
        } else {
          console.log("error uploading file", reason, detail);
        }
        $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
          '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
      };
      initToolbarBootstrapBindings();
      $('#editor').wysiwyg({
        fileUploadError: showErrorAlert
      });
      window.prettyPrint && prettyPrint();
    });
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