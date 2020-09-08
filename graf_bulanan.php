<html>
<head>
    <title>E-Arsip</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
</head>
<body>
<?php 
include 'koneksi.php';
error_reporting(0);
$act=$_GET['act'];
$ctahun = isset($_REQUEST['ctahun']) ? $_REQUEST['ctahun'] : '';
if ($act=='cari'){
?>
		<form id="form-wizard" class="form-horizontal" method="post" onsubmit="">
			<table class="table table-hover table-bordered table-striped">
				<tbody>
					<tr class="gradeX">
						<td>
							Tahun
							<select name="ctahun" id="ctahun" class="">
								<?php 
								if($ctahun==2010){
								?>
								<option value="2010">2010</option>
								<?php
								}elseif($ctahun==2011){
								?>
								<option value="2011">2011</option>
								<?php
								}elseif($ctahun==2012){
								?>
								<option value="2012">2012</option>
								<?php
								}elseif($ctahun==2013){
								?>
								<option value="2013">2013</option>
								<?php
								}
								elseif($ctahun==2014){
								?>
								<option value="2014">2014</option>
								<?php
								}elseif($ctahun==2015){
								?>
								<option value="2015">2015</option>
								<?php
								}elseif($ctahun==2016){
								?>
								<option value="2016">2016</option>
								<?php
								}elseif($ctahun==2017){
								?>
								<option value="2017">2017</option>
								<?php
								}elseif($ctahun==2018){
								?>
								<option value="2018">2018</option>
								<?php
								}elseif($ctahun==2019){
								?>
								<option value="2019">2019</option>
								<?php
								}elseif($ctahun==2020){
								?>
								<option value="2020">2020</option>
								<?php
								}else{
								$now=date("Y"); 
								?>
								<option value="<?php echo $now ?>"><?php echo $now ?></option>
								<?php
								}
								?>
								<option value=""></option> 
								<option value="2016">2016</option>
								<option value="2017">2017</option>
								<option value="2018">2018</option>
								<option value="2019">2019</option>
								<option value="2020">2020</option>
							 </select>
							&nbsp;&nbsp;
							<input type="submit" name="lihat" value="&nbsp;&nbsp;Lihat Grafik&nbsp;&nbsp;">
							</a>
						</td>
					</tr>
				</tbody>
			</table>
		</form>

<div class="table-responsive">
<table class="table table-hover table-bordered table-striped">
<form method="post" enctype="multipart/form-data">
    <thead>
    <tr>
   	  <th width="" colspan="33"><center><b><h4>Laporan Bulanan</h4></b></center></th>
   	</tr>
  	</thead>
   	  
   	<tbody>
	<tr>
		<td rowspan="2"><b>Jenis Surat</b></td>
  	<td rowspan="2"><b>Total</b></td>
		<td colspan="12" align="center"><b>Bulan</b></td>
	</tr>
  	<tr>
  		<td>1</td>
  		<td>2</td>
  		<td>3</td>
  		<td>4</td>
  		<td>5</td>
  		<td>6</td>
  		<td>7</td>
  		<td>8</td>
  		<td>9</td>
  		<td>10</td>
  		<td>11</td>
  		<td>12</td>
  	</tr>
	<?php

  	$ctahun = isset($_POST['ctahun']) ? $_POST['ctahun'] : '';
	$lihat = isset($_POST['lihat']) ? $_POST['lihat'] : '';
	
	if($lihat){
		$sql = mysql_query("SELECT * from jns_surat order by ksurat")or die(mysql_error());
		} else {
		$sql = mysql_query("SELECT * from jns_surat where ksurat='xxx' order by ksurat");
		}
	while($fetch1 = mysql_fetch_array($sql)) {	
	$ksurat = $fetch1['ksurat'];		
	?>
	<tr>
    <?php 
    $sql1 = mysql_query("SELECT * from jns_surat where ksurat='$ksurat'")or die(mysql_error());
    while ($data=mysql_fetch_array($sql1)){
    $ksurat1=$data['nm_surat'];
    }
    ?>  
		<td rowspan="2"><?php echo $ksurat1 ?></td>
    <?php
    if($ctahun!=''){ 
    $tp = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='01-01-$ctahun' AND tanggal<='31-12-$ctahun' and ksurat='$ksurat' and tanggal like '%$ctahun%'")or die(mysql_error());
    } else {
    $tp = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='01-01-$ctahun' AND tanggal<='31-12-$ctahun' and ksurat='$ksurat' and tanggal='$ctahun'")or die(mysql_error());
    }                     
    $r = mysql_fetch_array($tp);
    $tp = $r['jmlkasus'];
    ?>
  	<td rowspan="2">
    <?php 
    if($tp=="0"){
    echo "-";
    }else{
    echo $tp; 
    }?>
    </td>
	</tr>
  	<tr>
    <?php 
    $tp1 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-01-01' AND tanggal<='$ctahun-01-31' AND ksurat='$ksurat'")or die(mysql_error());
    $r = mysql_fetch_array($tp1);
    $tglp1 = $r['jmlkasus'];
    ?>
  		<td><?php 
          if($tglp1=="0"){
          echo "-";
          }else{
          echo $tglp1; 
          }?>
      </td>
    <?php 
    $tp2 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-02-01' AND tanggal<='$ctahun-02-28' AND ksurat='$ksurat'")or die(mysql_error());
    $r = mysql_fetch_array($tp2);
    $tglp2 = $r['jmlkasus'];
    ?>
      <td><?php 
          if($tglp2=="0"){
          echo "-";
          }else{
          echo $tglp2; 
          }?>
      </td>
    <?php 
    $tp3 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-03-01' AND tanggal<='$ctahun-03-31' AND ksurat='$ksurat'")or die(mysql_error());
    $r = mysql_fetch_array($tp3);
    $tglp3 = $r['jmlkasus'];
    ?>
      <td><?php 
          if($tglp3=="0"){
          echo "-";
          }else{
          echo $tglp3; 
          }?>
      </td>
    <?php 
    $tp4 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-04-01' AND tanggal<='$ctahun-04-30' AND ksurat='$ksurat'")or die(mysql_error());
    $r = mysql_fetch_array($tp4);
    $tglp4 = $r['jmlkasus'];
    ?>
      <td><?php 
          if($tglp4=="0"){
          echo "-";
          }else{
          echo $tglp4; 
          }?>
      </td>
     <?php 
    $tp5 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-05-01' AND tanggal<='$ctahun-05-31' AND ksurat='$ksurat'")or die(mysql_error());
    $r = mysql_fetch_array($tp5);
    $tglp5 = $r['jmlkasus'];
    ?>
      <td><?php 
          if($tglp5=="0"){
          echo "-";
          }else{
          echo $tglp5; 
          }?>
      </td>
    <?php 
    $tp6 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-06-01' AND tanggal<='$ctahun-06-30' AND ksurat='$ksurat'")or die(mysql_error());
    $r = mysql_fetch_array($tp6);
    $tglp6 = $r['jmlkasus'];
    ?>
      <td><?php 
          if($tglp6=="0"){
          echo "-";
          }else{
          echo $tglp6; 
          }?>
      </td>
    <?php 
    $tp7 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-07-01' AND tanggal<='$ctahun-07-31' AND ksurat='$ksurat'")or die(mysql_error());
    $r = mysql_fetch_array($tp7);
    $tglp7 = $r['jmlkasus'];
    ?>
      <td><?php 
          if($tglp7=="0"){
          echo "-";
          }else{
          echo $tglp7; 
          }?>
      </td>
    <?php 
    $tp8 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-08-01' AND tanggal<='$ctahun-08-31' AND ksurat='$ksurat'")or die(mysql_error());
    $r = mysql_fetch_array($tp8);
    $tglp8 = $r['jmlkasus'];
    ?>
      <td><?php 
          if($tglp8=="0"){
          echo "-";
          }else{
          echo $tglp8; 
          }?>
      </td>
    <?php 
    $tp9 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-09-01' AND tanggal<='$ctahun-09-30' AND ksurat='$ksurat'")or die(mysql_error());
    $r = mysql_fetch_array($tp9);
    $tglp9 = $r['jmlkasus'];
    ?>
      <td><?php 
          if($tglp9=="0"){
          echo "-";
          }else{
          echo $tglp9; 
          }?>
      </td>
    <?php 
    $tp10 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-10-01' AND tanggal<='$ctahun-10-31' AND ksurat='$ksurat'")or die(mysql_error());
    $r = mysql_fetch_array($tp10);
    $tglp10 = $r['jmlkasus'];
    ?>
      <td><?php 
          if($tglp10=="0"){
          echo "-";
          }else{
          echo $tglp10; 
          }?>
      </td>
    <?php 
    $tp11 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-11-01' AND tanggal<='$ctahun-11-30' AND ksurat='$ksurat'")or die(mysql_error());
    $r = mysql_fetch_array($tp11);
    $tglp11 = $r['jmlkasus'];
    ?>
      <td><?php 
          if($tglp11=="0"){
          echo "-";
          }else{
          echo $tglp11; 
          }?>
      </td>
    <?php 
    $tp12 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-12-01' AND tanggal<='$ctahun-12-31' AND ksurat='$ksurat'")or die(mysql_error());
    $r = mysql_fetch_array($tp12);
    $tglp12 = $r['jmlkasus'];
    ?>
      <td><?php 
          if($tglp12=="0"){
          echo "-";
          }else{
          echo $tglp12; 
          }?>
      </td>
  	</tr>
	<?php }?>
  <?php 
                        
                        ?>
                        <tr>
                            <?php
                            
                            
                            $jtp = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-01-01' AND tanggal<='$ctahun-12-31' ")or die(mysql_error());
                            
                            $r = mysql_fetch_array($jtp);
                            $jtp = $r['jmlkasus'];
                            ?>
  <tr>
      <td><b>Jumlah</b></td>
      <td>
          <b><?php 
            if($jtp=="0"){
            echo "-";
            }else{
            echo $jtp; 
            }
            ?></b>
      </td>
      <?php 
      $jtp = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-01-01' AND tanggal<='$ctahun-01-31' ")or die(mysql_error());
      $r = mysql_fetch_array($jtp);
      $jtglp1 = $r['jmlkasus'];
      ?>
      <td>
          <b><?php 
          if($jtglp1=="0"){
          echo "-";
          }else{
          echo $jtglp1; 
          }
          ?></b>
      </td>
          <?php 
          $jtp2 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-02-01' AND tanggal<='$ctahun-02-28' ")or die(mysql_error());
          $r = mysql_fetch_array($jtp2);
          $jtglp2 = $r['jmlkasus'];
          ?>
      <td>
          <b><?php 
          if($jtglp2=="0"){
          echo "-";
          }else{
          echo $jtglp2; 
          }
          ?></b>
      </td>
          <?php 
          $jtp3 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-03-01' AND tanggal<='$ctahun-03-31' ")or die(mysql_error());
          $r = mysql_fetch_array($jtp3);
          $jtglp3 = $r['jmlkasus'];
          ?>
      <td><b><?php 
          if($jtglp3=="0"){
          echo "-";
          }else{
          echo $jtglp3; 
          }
          ?></b>
      </td>
          <?php 
          $jtp4 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-04-01' AND tanggal<='$ctahun-04-30' ")or die(mysql_error());
          $r = mysql_fetch_array($jtp4);
          $jtglp4 = $r['jmlkasus'];
          ?>
      <td><b><?php 
          if($jtglp4=="0"){
          echo "-";
          }else{
          echo $jtglp4; 
          }
          ?></b>
      </td>

          <?php 
          $jtp5 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-05-01' AND tanggal<='$ctahun-05-31' ")or die(mysql_error());
          $r = mysql_fetch_array($jtp5);
          $jtglp5 = $r['jmlkasus'];
          ?>
      <td><b><?php 
          if($jtglp5=="0"){
          echo "-";
          }else{
          echo $jtglp5; 
          }
          ?></b>
      </td>

          <?php 
          $jtp6 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-06-01' AND tanggal<='$ctahun-06-30' ")or die(mysql_error());
          $r = mysql_fetch_array($jtp6);
          $jtglp6 = $r['jmlkasus'];
          ?>
      <td><b><?php 
          if($jtglp6=="0"){
          echo "-";
          }else{
          echo $jtglp6; 
          }
          ?></b>
      </td>

          <?php 
          $jtp7 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-07-01' AND tanggal<='$ctahun-07-31' ")or die(mysql_error());
          $r = mysql_fetch_array($jtp7);
          $jtglp7 = $r['jmlkasus'];
          ?>
      <td><b><?php 
          if($jtglp7=="0"){
          echo "-";
          }else{
          echo $jtglp7; 
          }
          ?></b>
      </td>

          <?php 
          $jtp8 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-08-01' AND tanggal<='$ctahun-08-31' ")or die(mysql_error());
          $r = mysql_fetch_array($jtp8);
          $jtglp8 = $r['jmlkasus'];
          ?>
      <td><b><?php 
          if($jtglp8=="0"){
          echo "-";
          }else{
          echo $jtglp8; 
          }
          ?></b>
      </td>

          <?php 
          $jtp9 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-09-01' AND tanggal<='$ctahun-09-30' ")or die(mysql_error());
          $r = mysql_fetch_array($jtp9);
          $jtglp9 = $r['jmlkasus'];
          ?>
      <td><b><?php 
          if($jtglp9=="0"){
          echo "-";
          }else{
          echo $jtglp9; 
          }
          ?></b>
      </td>

          <?php 
          $jtp10 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-10-01' AND tanggal<='$ctahun-10-31' ")or die(mysql_error());
          $r = mysql_fetch_array($jtp10);
          $jtglp10 = $r['jmlkasus'];
          ?>
      <td><b><?php 
          if($jtglp10=="0"){
          echo "-";
          }else{
          echo $jtglp10; 
          }
          ?></b>
      </td>

          <?php 
          $jtp11 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-11-01' AND tanggal<='$ctahun-11-30' ")or die(mysql_error());
          $r = mysql_fetch_array($jtp11);
          $jtglp11 = $r['jmlkasus'];
          ?>
      <td><b><?php 
          if($jtglp11=="0"){
          echo "-";
          }else{
          echo $jtglp11; 
          }
          ?></b>
      </td>
          <?php 
          $jtp12 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-12-01' AND tanggal<='$ctahun-12-31' ")or die(mysql_error());
          $r = mysql_fetch_array($jtp12);
          $jtglp12 = $r['jmlkasus'];
          ?>
      <td><b><?php 
          if($jtglp12=="0"){
          echo "-";
          }else{
          echo $jtglp12; 
          }
          ?></b>
      </td>
  </tr>
  <?php
  
  ?>
   </tbody>
</table>
</form>
</div>

<?php
}

if ($act=='tampil' || $act=='cari'){
?>
<script src="jpgraph/jquery.min.js"></script>
<script src="jpgraph/highcharts.js"></script>
<script src="jpgraph/exporting.js"></script>

<?php
include 'koneksi.php';
error_reporting(0);
    $ctahun = isset($_REQUEST['ctahun']) ? $_REQUEST['ctahun'] : '';
?>
<?php session_start(); ?>
        <?php 		 
          $jtp1 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-01-01' AND tanggal<='$ctahun-01-31'")or die(mysql_error());
          $r = mysql_fetch_array($jtp1);
          $jtglp1 = $r['jmlkasus'];
          ?>
      
          <?php 
          $jtp2 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-02-01' AND tanggal<='$ctahun-02-28'")or die(mysql_error());
          $r = mysql_fetch_array($jtp2);
          $jtglp2 = $r['jmlkasus'];
          ?>
      
          <?php 
          $jtp3 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-03-01' AND tanggal<='$ctahun-03-31'")or die(mysql_error());
          $r = mysql_fetch_array($jtp3);
          $jtglp3 = $r['jmlkasus'];
          ?>
      
          <?php 
          $jtp4 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-04-01' AND tanggal<='$ctahun-04-30'")or die(mysql_error());
          $r = mysql_fetch_array($jtp4);
          $jtglp4 = $r['jmlkasus'];
          ?>

          <?php 
          $jtp5 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-05-01' AND tanggal<='$ctahun-05-31'")or die(mysql_error());
          $r = mysql_fetch_array($jtp5);
          $jtglp5 = $r['jmlkasus'];
          ?>
      
          <?php 
          $jtp6 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-06-01' AND tanggal<='$ctahun-06-30'")or die(mysql_error());
          $r = mysql_fetch_array($jtp6);
          $jtglp6 = $r['jmlkasus'];
          ?>
      
          <?php 
          $jtp7 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-07-01' AND tanggal<='$ctahun-07-31'")or die(mysql_error());
          $r = mysql_fetch_array($jtp7);
          $jtglp7 = $r['jmlkasus'];
          ?>
      
          <?php 
          $jtp8 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-08-01' AND tanggal<='$ctahun-08-31'")or die(mysql_error());
          $r = mysql_fetch_array($jtp8);
          $jtglp8 = $r['jmlkasus'];
          ?>

          <?php 
          $jtp9 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-09-01' AND tanggal<='$ctahun-09-30'")or die(mysql_error());
          $r = mysql_fetch_array($jtp9);
          $jtglp9 = $r['jmlkasus'];
          ?>
      
          <?php 
          $jtp10 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-10-01' AND tanggal<='$ctahun-10-31'")or die(mysql_error());
          $r = mysql_fetch_array($jtp10);
          $jtglp10 = $r['jmlkasus'];
          ?>
      
          <?php 
          $jtp11 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-11-01' AND tanggal<='$ctahun-11-30'")or die(mysql_error());
          $r = mysql_fetch_array($jtp11);
          $jtglp11 = $r['jmlkasus'];
          ?>
      
          <?php 
          $jtp12 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-12-01' AND tanggal<='$ctahun-12-31'")or die(mysql_error());
          $r = mysql_fetch_array($jtp12);
          $jtglp12 = $r['jmlkasus'];
    

                        //ksurat=1
                            $query1     = mysql_query("SELECT count(id) as jmldata FROM transaksi WHERE tanggal>='$ctahun-01-01' AND tanggal<='$ctahun-01-31' AND ksurat='1'")or die(mysql_error());
                            $r   = mysql_fetch_array($query1);
                            $jmldata1 = $r['jmldata'];
                            $jan1 = $jmldata1;

                            $query2     = mysql_query("SELECT count(id) as jmldata FROM transaksi WHERE tanggal>='$ctahun-02-01' AND tanggal<='$ctahun-02-28' AND ksurat='1'")or die(mysql_error());
                            $r   = mysql_fetch_array($query2);
                            $jmldata2 = $r['jmldata'];
                            $feb1 = $jmldata2;

                            $query3     = mysql_query("SELECT count(id) as jmldata FROM transaksi WHERE tanggal>='$ctahun-03-01' AND tanggal<='$ctahun-03-31' AND ksurat='1'")or die(mysql_error());
                            $r   = mysql_fetch_array($query3);
                            $jmldata3 = $r['jmldata'];
                            $mar1 = $jmldata3;

                            $query4     = mysql_query("SELECT count(id) as jmldata FROM transaksi WHERE tanggal>='$ctahun-04-01' AND tanggal<='$ctahun-04-30' AND ksurat='1'")or die(mysql_error());
                            $r   = mysql_fetch_array($query4);
                            $jmldata4 = $r['jmldata'];
                            $apr1 = $jmldata4;

                            $query5     = mysql_query("SELECT count(id) as jmldata FROM transaksi WHERE tanggal>='$ctahun-05-01' AND tanggal<='$ctahun-05-31' AND ksurat='1'")or die(mysql_error());
                            $r   = mysql_fetch_array($query5);
                            $jmldata5 = $r['jmldata'];
                            $mei1 = $jmldata5;

                            $query6     = mysql_query("SELECT count(id) as jmldata FROM transaksi WHERE tanggal>='$ctahun-06-01' AND tanggal<='$ctahun-06-30' AND ksurat='1'")or die(mysql_error());
                            $r   = mysql_fetch_array($query6);
                            $jmldata6 = $r['jmldata'];
                            $jun1 = $jmldata6;

                            $query7     = mysql_query("SELECT count(id) as jmldata FROM transaksi WHERE tanggal>='$ctahun-07-01' AND tanggal<='$ctahun-07-31' AND ksurat='1'")or die(mysql_error());
                            $r   = mysql_fetch_array($query7);
                            $jmldata7 = $r['jmldata'];
                            $jul1 = $jmldata7;

                            $query8     = mysql_query("SELECT count(id) as jmldata FROM transaksi WHERE tanggal>='$ctahun-08-01' AND tanggal<='$ctahun-08-31' AND ksurat='1'")or die(mysql_error());
                            $r   = mysql_fetch_array($query8);
                            $jmldata8 = $r['jmldata'];
                            $agu1 = $jmldata8;

                            $query9     = mysql_query("SELECT count(id) as jmldata FROM transaksi WHERE tanggal>='$ctahun-09-01' AND tanggal<='$ctahun-09-30' AND ksurat='1'")or die(mysql_error());
                            $r   = mysql_fetch_array($query9);
                            $jmldata9 = $r['jmldata'];
                            $sep1 = $jmldata9;

                            $query10     = mysql_query("SELECT count(id) as jmldata FROM transaksi WHERE tanggal>='$ctahun-10-01' AND tanggal<='$ctahun-10-31' AND ksurat='1'")or die(mysql_error());
                            $r   = mysql_fetch_array($query10);
                            $jmldata10 = $r['jmldata'];
                            $okt1 = $jmldata10;

                            $query11     = mysql_query("SELECT count(id) as jmldata FROM transaksi WHERE tanggal>='$ctahun-11-01' AND tanggal<='$ctahun-11-30' AND ksurat='1'")or die(mysql_error());
                            $r   = mysql_fetch_array($query11);
                            $jmldata11 = $r['jmldata'];
                            $nov1 = $jmldata11;

                            $query12     = mysql_query("SELECT count(id) as jmldata FROM transaksi WHERE tanggal>='$ctahun-12-01' AND tanggal<='$ctahun-12-31' AND ksurat='1'")or die(mysql_error());
                            $r   = mysql_fetch_array($query12);
                            $jmldata12 = $r['jmldata'];
                            $des1 = $jmldata12;

                            //ksurat=2
                            $query1     = mysql_query("SELECT count(id) as jmldata FROM transaksi WHERE tanggal>='$ctahun-01-01' AND tanggal<='$ctahun-01-31' AND ksurat='2'")or die(mysql_error());
                            $r   = mysql_fetch_array($query1);
                            $jmldata1 = $r['jmldata'];
                            $jan2 = $jmldata1;

                            $query2     = mysql_query("SELECT count(id) as jmldata FROM transaksi WHERE tanggal>='$ctahun-02-01' AND tanggal<='$ctahun-02-28' AND ksurat='2'")or die(mysql_error());
                            $r   = mysql_fetch_array($query2);
                            $jmldata2 = $r['jmldata'];
                            $feb2 = $jmldata2;

                            $query3     = mysql_query("SELECT count(id) as jmldata FROM transaksi WHERE tanggal>='$ctahun-03-01' AND tanggal<='$ctahun-03-31' AND ksurat='2'")or die(mysql_error());
                            $r   = mysql_fetch_array($query3);
                            $jmldata3 = $r['jmldata'];
                            $mar2 = $jmldata3;

                            $query4     = mysql_query("SELECT count(id) as jmldata FROM transaksi WHERE tanggal>='$ctahun-04-01' AND tanggal<='$ctahun-04-30' AND ksurat='2'")or die(mysql_error());
                            $r   = mysql_fetch_array($query4);
                            $jmldata4 = $r['jmldata'];
                            $apr2 = $jmldata4;

                            $query5     = mysql_query("SELECT count(id) as jmldata FROM transaksi WHERE tanggal>='$ctahun-05-01' AND tanggal<='$ctahun-05-31' AND ksurat='2'")or die(mysql_error());
                            $r   = mysql_fetch_array($query5);
                            $jmldata5 = $r['jmldata'];
                            $mei2 = $jmldata5;

                            $query6     = mysql_query("SELECT count(id) as jmldata FROM transaksi WHERE tanggal>='$ctahun-06-01' AND tanggal<='$ctahun-06-30' AND ksurat='2'")or die(mysql_error());
                            $r   = mysql_fetch_array($query6);
                            $jmldata6 = $r['jmldata'];
                            $jun2 = $jmldata6;

                            $query7     = mysql_query("SELECT count(id) as jmldata FROM transaksi WHERE tanggal>='$ctahun-07-01' AND tanggal<='$ctahun-07-31' AND ksurat='2'")or die(mysql_error());
                            $r   = mysql_fetch_array($query7);
                            $jmldata7 = $r['jmldata'];
                            $jul2 = $jmldata7;

                            $query8     = mysql_query("SELECT count(id) as jmldata FROM transaksi WHERE tanggal>='$ctahun-08-01' AND tanggal<='$ctahun-08-31' AND ksurat='2'")or die(mysql_error());
                            $r   = mysql_fetch_array($query8);
                            $jmldata8 = $r['jmldata'];
                            $agu2 = $jmldata8;

                            $query9     = mysql_query("SELECT count(id) as jmldata FROM transaksi WHERE tanggal>='$ctahun-09-01' AND tanggal<='$ctahun-09-30' AND ksurat='2'")or die(mysql_error());
                            $r   = mysql_fetch_array($query9);
                            $jmldata9 = $r['jmldata'];
                            $sep2 = $jmldata9;

                            $query10     = mysql_query("SELECT count(id) as jmldata FROM transaksi WHERE tanggal>='$ctahun-10-01' AND tanggal<='$ctahun-10-31' AND ksurat='2'")or die(mysql_error());
                            $r   = mysql_fetch_array($query10);
                            $jmldata10 = $r['jmldata'];
                            $okt2 = $jmldata10;

                            $query11     = mysql_query("SELECT count(id) as jmldata FROM transaksi WHERE tanggal>='$ctahun-11-01' AND tanggal<='$ctahun-11-30' AND ksurat='2'")or die(mysql_error());
                            $r   = mysql_fetch_array($query11);
                            $jmldata11 = $r['jmldata'];
                            $nov2 = $jmldata11;

                            $query12     = mysql_query("SELECT count(id) as jmldata FROM transaksi WHERE tanggal>='$ctahun-12-01' AND tanggal<='$ctahun-12-31' AND ksurat='2'")or die(mysql_error());
                            $r   = mysql_fetch_array($query12);
                            $jmldata12 = $r['jmldata'];
                            $des2 = $jmldata12;
                        
                            $drop = mysql_query("DROP TABLE IF EXISTS grafik_arsip")or die(mysql_error());
							
                            $create = mysql_query("CREATE TABLE IF NOT EXISTS grafik_arsip (
                            `bulan` char(20) NOT NULL,
                            `surat_masuk` int(4) NOT NULL,
                            `surat_keluar` int(4) NOT NULL,
							`jml_surat` int(4) NOT NULL
                          )")or die(mysql_error());
						  
                            
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('Januari','$jan1','$jan2','$jtglp1') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('Februari','$feb1','$feb2','$jtglp2') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('Maret','$mar1','$mar2','$jtglp3') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('April','$apr1','$apr2','$jtglp4') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('Mei','$mei1','$mei2','$jtglp5') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('Juni','$jun1','$jun2','$jtglp6') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('Juli','$jul1','$jul2','$jtglp7') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('Agustus','$agu1','$agu2','$jtglp8') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('September','$sep1','$sep2','$jtglp9') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('Oktober','$okt1','$okt2','$jtglp10') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('November','$nov1','$nov2','$jtglp11') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('Desember','$des1','$des2','$jtglp12') ") or die(mysql_error());
                            
                        
                        $grafik_arsip 	= mysql_query("SELECT * FROM grafik_arsip")or die(mysql_error());
                           
                        
                        while($r = mysql_fetch_array($grafik_arsip)){
                        $bulan = $r['bulan'];
                        $jumlah1 = $r['surat_masuk'];
                        $jumlah2 = $r['surat_keluar'];

                        $jmlsurat = $r['jml_surat'];
                        $jumlah=$jumlah1 / $jmlsurat * 100;

    					$grafik1[] = array($bulan, intval($jumlah1));
                        $grafik2[] = array($bulan, intval($jumlah2));

						}

						$data_grafik1 = json_encode($grafik1);
                        $data_grafik2 = json_encode($grafik2);

                           
					?>
<div class="table-responsive">
<div id="container" style="height:400px"></div>
<script>
$(document).ready(function(){
$(function () {
    var chart = Highcharts.chart('container', {
        chart: {
            type: 'column'
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
		yAxis: {
			min: 0,
			title: {
				text: 'Jumlah'
			}
		},
        plotOptions: {
            series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.f}'
            }
        	}
        },
        title: {
            text: 'Grafik Bulanan Tahun <?php echo $ctahun ?>',
            align: 'center',
            x: 0
        },
        colors: ['#cc113c', '#f7941d', '#4ec4ce', '#d24087'],
        series: [{
            data: <?=$data_grafik1?>,
            name: "Surat Masuk"
             
        },
        {
            data: <?=$data_grafik2?>,
            name: "Surat Keluar"
        }
        ]
    });
 
    // the button action
    $('#button').click(function () {
        var selectedPoints = chart.getSelectedPoints();
 
        if (chart.lbl) {
            chart.lbl.destroy();
        }
        chart.lbl = chart.renderer.label('You selected ' + selectedPoints.length + ' points', 100, 60)
            .attr({
                padding: 10,
                r: 5,
                fill: Highcharts.getOptions().colors[1],
                zIndex: 5
            })
            .css({
                color: 'white'
            })
            .add();
    });
});
});
</script>
<?php
}
?>
</div>
</body>
</html>