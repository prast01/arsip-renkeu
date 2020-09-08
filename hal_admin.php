<?php
include "koneksi.php";
require_once('warning.php');

$q = mysql_query("SELECT username FROM user") or die (mysql_error());
$r = mysql_fetch_array($q);
$username = $r['username'];


?>
<!DOCTYPE html>
<html lang="en">
<link rel="icon" type="image/png" href="img/archive_icon.png" >
<head>
    <meta charset="utf-8">
    <title>E-Arsip</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">    
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />	
	
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />
	
		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
	
		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
	
	
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    
<!--    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet"> -->
    <link href="css/font-awesome.css" rel="stylesheet">
    
    <link href="css/style.css" rel="stylesheet">

	
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <style type="text/css">
	body{
		background-image:url(bg.png);
	}
    </style>
  </head>

<body>

<div class="navbar navbar-fixed-top">
	
	<div class="navbar-inner">
		
		<div class="container">
			
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			
			<a class="brand" href="hal_admin.php">
				<img src="img/archive_icon.png" width="50"> E-Arsip
			</a>		
			
			<div class="nav-collapse">
				<ul class="nav pull-right">
					<li class="dropdown">						
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="img/user.png" width="20">
							<b>Admin</b>
							<b class="caret"></b>
						</a>
						
						<ul class="dropdown-menu">
              <li><a href="?page=ubahpassword">Ubah Password</a></li>
							<li><a href="logout.php">Logout</a></li>
						</ul>						
					</li>
			

				
			</div><!--/.nav-collapse -->	
	
		</div> <!-- /container -->
		
	</div> <!-- /navbar-inner -->
	
</div> <!-- /navbar -->
<div class="subnavbar">

  <div class="subnavbar-inner">
  
    <div class="container">

      <ul class="mainnav">

        <li>
          <a href="?page=dashboard">
            <i class="icon-dashboard"></i>
            <span>Home</span>
          </a>              
        </li>
      
        <li>
          <a href="?page=transaksi">
            <i class="icon-dashboard"></i>
            <span>Transaksi</span>
          </a>              
        </li>

        <li>
          <a href="?page=laporan">
            <i class="icon-list-alt"></i>
            <span>Laporan</span>
          </a>              
        </li>
        <li>
          <a href="?page=grafik">
            <i class="icon-bar-chart"></i>
            <span>Grafik</span>
          </a>              
        </li>
        <li>
          <a href="?page=dokumentasi">
            <i class="icon-facetime-video"></i>
            <span>Dokumentasi</span>
          </a>              
        </li>
        <li>
        </li>
   </ul>
    </div>
  </div>
</div>
<div class="main">
  
  <div class="main-inner">

      <div class="container">
  
        <div class="row">
          
          <div class="span12">          
            
            <div class="widget ">
              
              <div class="widget-header">
              
                <i class="icon-user"></i>
                <h3>Dinas Kesehatan kabupaten Jepara</h3>
              </div> <!-- /widget-header -->
          
                <div class="widget-content" >
					         <?php include "body.php"; ?>
                </div> <!-- /widget-content -->
            </div> <!-- /widget -->
          </div>  <!-- /span12 -->
        </div>  <!-- /row -->
      </div>  <!-- container -->
    </div> <!-- main-inner -->
  </div> <!-- main -->


    
<div class="footer">
  
  <div class="footer-inner">
    
    <div class="container">
      
      <div class="row">
        
          <div class="span12">
            <center>E-Arsip Dinas kesehatan Kabupaten Jepara &copy; 2018</center>
          </div> <!-- /span12 -->
          
        </div> <!-- /row -->
        
    </div> <!-- /container -->
    
  </div> <!-- /footer-inner -->
  
</div> <!-- /footer -->
    


<script src="js/jquery-1.7.2.min.js"></script>
  
<script src="js/bootstrap.js"></script>
<script src="js/base.js"></script>

<script src="jquery-1.10.2.js" type="text/javascript"></script>
<script src="jquery-ui.js" type="text/javascript"></script>

     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    
</body>

</html>
