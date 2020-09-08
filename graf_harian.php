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
$cbulan = isset($_REQUEST['cbulan']) ? $_REQUEST['cbulan'] : '';
$ctahun = isset($_REQUEST['ctahun']) ? $_REQUEST['ctahun'] : '';
if ($act=='cari'){
?>
		<form id="form-wizard" class="form-horizontal" method="post" onSubmit="">
			<table class="table table-hover table-bordered table-striped">
				<tbody>
					<tr class="gradeX">
						<td>
							Bulan
							<select name="cbulan" id="cbulan" class="">
									<?php if($cbulan !=""){?>				   
									<?php 
									if($cbulan=="01"){
									?>
								<option value="01">Januari</option>
									<?php
									}elseif($cbulan=="02"){
									?>
								<option value="02">Februari</option>
									<?php
									}elseif($cbulan=="03"){
									?>
								<option value="03">Maret</option>
									<?php
									}elseif($cbulan=="04"){
									?>
								<option value="04">April</option>
									<?php
									}elseif($cbulan=="05"){
									?>
								<option value="05">Mei</option>
									<?php
									}elseif($cbulan=="06"){
									?>
								<option value="06">Juni</option>
									<?php
									}elseif($cbulan=="07"){
									?>
								<option value="07">Juli</option>
									<?php
									}elseif($cbulan=="08"){
									?>
								<option value="08">Agustus</option>
									<?php
									}elseif($cbulan=="09"){
									?>
								<option value="09">September</option>
									<?php
									}elseif($cbulan=="10"){
									?>
								<option value="10">Oktober</option>
									<?php
									}elseif($cbulan=="11"){
									?>
								<option value="11">November</option>
									<?php
									}elseif($cbulan=="12"){
									?>
								<option value="12">Desember</option>
									<?php
									}?>
								<option value="">--Pilih Bulan--</option>
								<option value="01">Januari</option>
								<option value="02">Februari</option>
								<option value="03">Maret</option>
								<option value="04">April</option>
								<option value="05">Mei</option>
								<option value="06">Juni</option>
								<option value="07">Juli</option>
								<option value="08">Agustus</option>
								<option value="09">September</option>
								<option value="10">Oktober</option>
								<option value="11">November</option>
								<option value="12">Desember</option>
								<?php }?>
								<?php
								if($cbulan==""){
								$bulan = array("", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
								for($y=1;$y<=12;$y++){
								if($y==date("m")){ $pilih="selected";}
								else {$pilih="";}
								echo("<option value=\"$y\" $pilih>$bulan[$y]</option>"."\n");
								}}
								?>          
							</select>
							&nbsp;&nbsp;
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
      <th width="" colspan="33"><center><b><h4>Laporan Harian</h4></b></center></th>
    </tr>
    </thead>
      
    <tbody>
  <tr>
    <td rowspan="2"><b>Jenis Surat</b></td>
      <td rowspan="2"><b>Total</b></td>
    <td colspan="31" align="center"><b>Tanggal</b></td>
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
      <td>13</td>
      <td>14</td>
      <td>15</td>
      <td>16</td>
      <td>17</td>
      <td>18</td>
      <td>19</td>
      <td>20</td>
      <td>21</td>
      <td>22</td>
      <td>23</td>
      <td>24</td>
      <td>25</td>
      <td>26</td>
      <td>27</td>
      <td>28</td>
      <td>29</td>
      <td>30</td>
      <td>31</td>
    </tr>
  <?php
  $cbulan1 = sprintf("%02s", $cbulan);
  $thnbln = $ctahun."-".$cbulan1;

  $lihat = isset($_POST['lihat']) ? $_POST['lihat'] : '';
  
  if($lihat){
    $sql = mysql_query("SELECT * from jns_surat order by ksurat")or die(mysql_error());
    } else {
    $sql = mysql_query("SELECT * from jns_surat where ksurat='xxx' order by ksurat desc");
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
    $tp = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE left(tanggal,7) = '$thnbln' and ksurat='$ksurat'")or die(mysql_error());                      
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
    $tp1 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-01' and ksurat='$ksurat'")or die(mysql_error());
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
    $tp2 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-02' and ksurat='$ksurat'")or die(mysql_error());
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
    $tp3 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-03' and ksurat='$ksurat'")or die(mysql_error());
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
    $tp4 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-04' and ksurat='$ksurat'")or die(mysql_error());
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
    $tp5 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-05' and ksurat='$ksurat'")or die(mysql_error());
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
    $tp6 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-06' and ksurat='$ksurat'")or die(mysql_error());
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
    $tp7 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-07' and ksurat='$ksurat'")or die(mysql_error());
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
    $tp8 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-08' and ksurat='$ksurat'")or die(mysql_error());
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
    $tp9 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-09' and ksurat='$ksurat'")or die(mysql_error());
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
    $tp10 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-10' and ksurat='$ksurat'")or die(mysql_error());
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
    $tp11 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-11' and ksurat='$ksurat'")or die(mysql_error());
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
    $tp12 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-12' and ksurat='$ksurat'")or die(mysql_error());
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
     <?php 
    $tp13 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-13' and ksurat='$ksurat'")or die(mysql_error());
    $r = mysql_fetch_array($tp13);
    $tglp13 = $r['jmlkasus'];
    ?>
      <td><?php 
          if($tglp13=="0"){
          echo "-";
          }else{
          echo $tglp13; 
          }?>
      </td>
    <?php 
    $tp14 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-14' and ksurat='$ksurat'")or die(mysql_error());
    $r = mysql_fetch_array($tp14);
    $tglp14 = $r['jmlkasus'];
    ?>
      <td><?php 
          if($tglp14=="0"){
          echo "-";
          }else{
          echo $tglp14; 
          }?>
      </td>
    <?php 
    $tp15 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-15' and ksurat='$ksurat'")or die(mysql_error());
    $r = mysql_fetch_array($tp15);
    $tglp15 = $r['jmlkasus'];
    ?>
      <td><?php 
          if($tglp15=="0"){
          echo "-";
          }else{
          echo $tglp15; 
          }?>
      </td>
    <?php 
    $tp16 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-16' and ksurat='$ksurat'")or die(mysql_error());
    $r = mysql_fetch_array($tp16);
    $tglp16 = $r['jmlkasus'];
    ?>
      <td><?php 
          if($tglp16=="0"){
          echo "-";
          }else{
          echo $tglp16; 
          }?>
      </td>
    <?php 
    $tp17 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-17' and ksurat='$ksurat'")or die(mysql_error());
    $r = mysql_fetch_array($tp17);
    $tglp17 = $r['jmlkasus'];
    ?>
      <td><?php 
          if($tglp17=="0"){
          echo "-";
          }else{
          echo $tglp17; 
          }?>
      </td>
    <?php 
    $tp18 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-18' and ksurat='$ksurat'")or die(mysql_error());
    $r = mysql_fetch_array($tp18);
    $tglp18 = $r['jmlkasus'];
    ?>
      <td><?php 
          if($tglp18=="0"){
          echo "-";
          }else{
          echo $tglp18; 
          }?>
      </td>
     <?php 
    $tp19 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-19' and ksurat='$ksurat'")or die(mysql_error());
    $r = mysql_fetch_array($tp19);
    $tglp19 = $r['jmlkasus'];
    ?>
      <td><?php 
          if($tglp19=="0"){
          echo "-";
          }else{
          echo $tglp19; 
          }?>
      </td>
     <?php 
    $tp20 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-20' and ksurat='$ksurat'")or die(mysql_error());
    $r = mysql_fetch_array($tp20);
    $tglp20 = $r['jmlkasus'];
    ?>
      <td><?php 
          if($tglp20=="0"){
          echo "-";
          }else{
          echo $tglp20; 
          }?>
      </td>
    <?php 
    $tp21 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-21' and ksurat='$ksurat'")or die(mysql_error());
    $r = mysql_fetch_array($tp21);
    $tglp21 = $r['jmlkasus'];
    ?>
      <td><?php 
          if($tglp21=="0"){
          echo "-";
          }else{
          echo $tglp21; 
          }?>
      </td>
    <?php 
    $tp22 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-22' and ksurat='$ksurat'")or die(mysql_error());
    $r = mysql_fetch_array($tp22);
    $tglp22 = $r['jmlkasus'];
    ?>
      <td><?php 
          if($tglp22=="0"){
          echo "-";
          }else{
          echo $tglp22; 
          }?>
      </td>
    <?php 
    $tp23 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-23' and ksurat='$ksurat'")or die(mysql_error());
    $r = mysql_fetch_array($tp23);
    $tglp23 = $r['jmlkasus'];
    ?>
      <td><?php 
          if($tglp23=="0"){
          echo "-";
          }else{
          echo $tglp23; 
          }?>
      </td>
    <?php 
    $tp24 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-24' and ksurat='$ksurat'")or die(mysql_error());
    $r = mysql_fetch_array($tp24);
    $tglp24 = $r['jmlkasus'];
    ?>
      <td><?php 
          if($tglp24=="0"){
          echo "-";
          }else{
          echo $tglp24; 
          }?>
      </td>
    <?php 
    $tp25 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-25' and ksurat='$ksurat'")or die(mysql_error());
    $r = mysql_fetch_array($tp25);
    $tglp25 = $r['jmlkasus'];
    ?>
      <td><?php 
          if($tglp25=="0"){
          echo "-";
          }else{
          echo $tglp25; 
          }?>
      </td>
    <?php 
    $tp26 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-26' and ksurat='$ksurat'")or die(mysql_error());
    $r = mysql_fetch_array($tp26);
    $tglp26 = $r['jmlkasus'];
    ?>
      <td><?php 
          if($tglp26=="0"){
          echo "-";
          }else{
          echo $tglp26; 
          }?>
      </td>
    <?php 
    $tp27 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-27' and ksurat='$ksurat'")or die(mysql_error());
    $r = mysql_fetch_array($tp27);
    $tglp27 = $r['jmlkasus'];
    ?>
      <td><?php 
          if($tglp27=="0"){
          echo "-";
          }else{
          echo $tglp27; 
          }?>
      </td>
    <?php 
    $tp28 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-28' and ksurat='$ksurat'")or die(mysql_error());
    $r = mysql_fetch_array($tp28);
    $tglp28 = $r['jmlkasus'];
    ?>
      <td><?php 
          if($tglp28=="0"){
          echo "-";
          }else{
          echo $tglp28; 
          }?>
      </td>
    <?php 
    $tp29 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-29' and ksurat='$ksurat'")or die(mysql_error());
    $r = mysql_fetch_array($tp29);
    $tglp29 = $r['jmlkasus'];
    ?>
      <td><?php 
          if($tglp29=="0"){
          echo "-";
          }else{
          echo $tglp29; 
          }?>
      </td>
     <?php 
    $tp30 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-30' and ksurat='$ksurat'")or die(mysql_error());
    $r = mysql_fetch_array($tp30);
    $tglp30 = $r['jmlkasus'];
    ?>
      <td><?php 
          if($tglp30=="0"){
          echo "-";
          }else{
          echo $tglp30; 
          }?>
      </td>
    <?php 
    $tp31 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-31' and ksurat='$ksurat'")or die(mysql_error());
    $r = mysql_fetch_array($tp31);
    $tglp31 = $r['jmlkasus'];
    ?>
      <td><?php 
          if($tglp31=="0"){
          echo "-";
          }else{
          echo $tglp31; 
          }?>
      </td>
    </tr>
  <?php }?>
  
                        <tr>
                            <?php
                            if($cbulan=="02"){
                                $jtp = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-$cbulan-01' AND tanggal<='$ctahun-$cbulan-29' ")or die(mysql_error());
                            }elseif ($cbulan=="01" || $cbulan=="03" || $cbulan=="05" || $cbulan=="07" || $cbulan=="08" || $cbulan=="10" || $cbulan=="12") {
                                $jtp = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-$cbulan-01' AND tanggal<='$ctahun-$cbulan-31' ")or die(mysql_error());    
                            }elseif($cbulan=="04" || $cbulan=="06" || $cbulan=="09" || $cbulan=="11") {
                                $jtp = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-$cbulan-01' AND tanggal<='$ctahun-$cbulan-30' ")or die(mysql_error());
                            }else{
                                $jtp = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='0000-00-00'")or die(mysql_error());
                            }
                            
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
      $jtp = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-01' AND ksurat like '%$cjnssurat%'")or die(mysql_error());
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
          $jtp2 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-02' AND ksurat like '%$cjnssurat%'")or die(mysql_error());
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
          $jtp3 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-03' AND ksurat like '%$cjnssurat%'")or die(mysql_error());
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
          $jtp4 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-04' AND ksurat like '%$cjnssurat%'")or die(mysql_error());
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
          $jtp5 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-05' AND ksurat like '%$cjnssurat%'")or die(mysql_error());
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
          $jtp6 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-06' AND ksurat like '%$cjnssurat%'")or die(mysql_error());
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
          $jtp7 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-07' AND ksurat like '%$cjnssurat%'")or die(mysql_error());
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
          $jtp8 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-08' AND ksurat like '%$cjnssurat%'")or die(mysql_error());
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
          $jtp9 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-09' AND ksurat like '%$cjnssurat%'")or die(mysql_error());
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
          $jtp10 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-10' AND ksurat like '%$cjnssurat%'")or die(mysql_error());
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
          $jtp11 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-11' AND ksurat like '%$cjnssurat%'")or die(mysql_error());
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
          $jtp12 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-12' AND ksurat like '%$cjnssurat%'")or die(mysql_error());
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
          <?php 
          $jtp13 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-13' AND ksurat like '%$cjnssurat%'")or die(mysql_error());
          $r = mysql_fetch_array($jtp13);
          $jtglp13 = $r['jmlkasus'];
          ?>
      <td><b><?php 
          if($jtglp13=="0"){
          echo "-";
          }else{
          echo $jtglp13; 
          }
          ?></b>
      </td>
           <?php 
          $jtp14 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-14' AND ksurat like '%$cjnssurat%'")or die(mysql_error());
          $r = mysql_fetch_array($jtp14);
          $jtglp14 = $r['jmlkasus'];
          ?>
      <td><b><?php 
          if($jtglp14=="0"){
          echo "-";
          }else{
          echo $jtglp14; 
          }
          ?></b>
      </td>
          <?php 
          $jtp15 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-15' AND ksurat like '%$cjnssurat%'")or die(mysql_error());
          $r = mysql_fetch_array($jtp15);
          $jtglp15 = $r['jmlkasus'];
          ?>
      <td><b><?php 
          if($jtglp15=="0"){
          echo "-";
          }else{
          echo $jtglp15; 
          }
          ?></b>
      </td>
          <?php 
          $jtp16 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-16' AND ksurat like '%$cjnssurat%'")or die(mysql_error());
          $r = mysql_fetch_array($jtp16);
          $jtglp16 = $r['jmlkasus'];
          ?>
      <td><b><?php 
          if($jtglp16=="0"){
          echo "-";
          }else{
          echo $jtglp16; 
          }
          ?></b>
      </td>
          <?php 
          $jtp17 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-17' AND ksurat like '%$cjnssurat%'")or die(mysql_error());
          $r = mysql_fetch_array($jtp17);
          $jtglp17 = $r['jmlkasus'];
          ?>
      <td><b><?php 
          if($jtglp17=="0"){
          echo "-";
          }else{
          echo $jtglp17; 
          }
          ?></b>
      </td>
           <?php 
          $jtp18 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-18' AND ksurat like '%$cjnssurat%'")or die(mysql_error());
          $r = mysql_fetch_array($jtp18);
          $jtglp18 = $r['jmlkasus'];
          ?>
      <td><b><?php 
          if($jtglp18=="0"){
          echo "-";
          }else{
          echo $jtglp18; 
          }
          ?></b>
      </td>
          <?php 
          $jtp19 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-19' AND ksurat like '%$cjnssurat%'")or die(mysql_error());
          $r = mysql_fetch_array($jtp19);
          $jtglp19 = $r['jmlkasus'];
          ?>
      <td><b><?php 
          if($jtglp19=="0"){
          echo "-";
          }else{
          echo $jtglp19; 
          }
          ?></b>
      </td>
          <?php 
          $jtp20 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-20' AND ksurat like '%$cjnssurat%'")or die(mysql_error());
          $r = mysql_fetch_array($jtp20);
          $jtglp20 = $r['jmlkasus'];
          ?>
      <td><b><?php 
          if($jtglp20=="0"){
          echo "-";
          }else{
          echo $jtglp20; 
          }
          ?></b>
      </td>
          <?php 
          $jtp21 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-21' AND ksurat like '%$cjnssurat%'")or die(mysql_error());
          $r = mysql_fetch_array($jtp21);
          $jtglp21 = $r['jmlkasus'];
          ?>
      <td><b><?php 
          if($jtglp21=="0"){
          echo "-";
          }else{
          echo $jtglp21; 
          }
          ?></b>
      </td>
          <?php 
          $jtp22 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-22' AND ksurat like '%$cjnssurat%'")or die(mysql_error());
          $r = mysql_fetch_array($jtp22);
          $jtglp22 = $r['jmlkasus'];
          ?>
      <td><b><?php 
          if($jtglp22=="0"){
          echo "-";
          }else{
          echo $jtglp22; 
          }
          ?></b>
      </td>
          <?php 
          $jtp23 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-23' AND ksurat like '%$cjnssurat%'")or die(mysql_error());
          $r = mysql_fetch_array($jtp23);
          $jtglp23 = $r['jmlkasus'];
          ?>
      <td><b><?php 
          if($jtglp23=="0"){
          echo "-";
          }else{
          echo $jtglp23; 
          }
          ?></b>
      </td>
          <?php 
          $jtp24 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-24' AND ksurat like '%$cjnssurat%'")or die(mysql_error());
          $r = mysql_fetch_array($jtp24);
          $jtglp24 = $r['jmlkasus'];
          ?>
      <td><b><?php 
          if($jtglp24=="0"){
          echo "-";
          }else{
          echo $jtglp24; 
          }
          ?></b>
      </td>
          <?php 
          $jtp25 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-25' AND ksurat like '%$cjnssurat%'")or die(mysql_error());
          $r = mysql_fetch_array($jtp25);
          $jtglp25 = $r['jmlkasus'];
          ?>
      <td><b><?php 
          if($jtglp25=="0"){
          echo "-";
          }else{
          echo $jtglp25; 
          }
          ?></b>
      </td>
          <?php 
          $jtp26 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-26' AND ksurat like '%$cjnssurat%'")or die(mysql_error());
          $r = mysql_fetch_array($jtp26);
          $jtglp26 = $r['jmlkasus'];
          ?>
      <td><b><?php 
          if($jtglp26=="0"){
          echo "-";
          }else{
          echo $jtglp26; 
          }
          ?></b>
      </td>
           <?php 
          $jtp27 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-27' AND ksurat like '%$cjnssurat%'")or die(mysql_error());
          $r = mysql_fetch_array($jtp27);
          $jtglp27 = $r['jmlkasus'];
          ?>
      <td><b><?php 
          if($jtglp27=="0"){
          echo "-";
          }else{
          echo $jtglp27; 
          }
          ?></b>
      </td>
          <?php 
          $jtp28 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-28' AND ksurat like '%$cjnssurat%'")or die(mysql_error());
          $r = mysql_fetch_array($jtp28);
          $jtglp28 = $r['jmlkasus'];
          ?>
      <td><b><?php 
          if($jtglp28=="0"){
          echo "-";
          }else{
          echo $jtglp28; 
          }
          ?></b>
      </td>
           <?php 
          $jtp29 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-29' AND ksurat like '%$cjnssurat%'")or die(mysql_error());
          $r = mysql_fetch_array($jtp29);
          $jtglp29 = $r['jmlkasus'];
          ?>
      <td><b><?php 
          if($jtglp29=="0"){
          echo "-";
          }else{
          echo $jtglp29; 
          }
          ?></b>
      </td>
           <?php 
          $jtp30 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-30' AND ksurat like '%$cjnssurat%'")or die(mysql_error());
          $r = mysql_fetch_array($jtp30);
          $jtglp30 = $r['jmlkasus'];
          ?>
      <td><b><?php 
          if($jtglp30=="0"){
          echo "-";
          }else{
          echo $jtglp30; 
          }
          ?></b>
      </td>
           <?php 
          $jtp31 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-31' AND ksurat like '%$cjnssurat%'")or die(mysql_error());
          $r = mysql_fetch_array($jtp31);
          $jtglp31 = $r['jmlkasus'];
          ?>
      <td><b><?php 
          if($jtglp31=="0"){
          echo "-";
          }else{
          echo $jtglp31; 
          }
          ?></b>
      </td>
  </tr>

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
          $jtp = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-01' ")or die(mysql_error());
          $r = mysql_fetch_array($jtp);
          $jtglp1 = $r['jmlkasus'];
       
          $jtp2 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-02' ")or die(mysql_error());
          $r = mysql_fetch_array($jtp2);
          $jtglp2 = $r['jmlkasus'];
          
          $jtp3 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-03' ")or die(mysql_error());
          $r = mysql_fetch_array($jtp3);
          $jtglp3 = $r['jmlkasus'];
           
          $jtp4 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-04' ")or die(mysql_error());
          $r = mysql_fetch_array($jtp4);
          $jtglp4 = $r['jmlkasus'];
          
          $jtp5 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-05' ")or die(mysql_error());
          $r = mysql_fetch_array($jtp5);
          $jtglp5 = $r['jmlkasus'];
          
          $jtp6 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-06' ")or die(mysql_error());
          $r = mysql_fetch_array($jtp6);
          $jtglp6 = $r['jmlkasus'];
           
          $jtp7 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-07' ")or die(mysql_error());
          $r = mysql_fetch_array($jtp7);
          $jtglp7 = $r['jmlkasus'];
          
          $jtp8 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-08' ")or die(mysql_error());
          $r = mysql_fetch_array($jtp8);
          $jtglp8 = $r['jmlkasus'];
           
          $jtp9 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-09' ")or die(mysql_error());
          $r = mysql_fetch_array($jtp9);
          $jtglp9 = $r['jmlkasus'];
           
          $jtp10 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-10' ")or die(mysql_error());
          $r = mysql_fetch_array($jtp10);
          $jtglp10 = $r['jmlkasus'];
          
          $jtp11 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-11' ")or die(mysql_error());
          $r = mysql_fetch_array($jtp11);
          $jtglp11 = $r['jmlkasus'];
          
          $jtp12 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-12' ")or die(mysql_error());
          $r = mysql_fetch_array($jtp12);
          $jtglp12 = $r['jmlkasus'];
          
          $jtp13 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-13' ")or die(mysql_error());
          $r = mysql_fetch_array($jtp13);
          $jtglp13 = $r['jmlkasus'];
          
          $jtp14 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-14' ")or die(mysql_error());
          $r = mysql_fetch_array($jtp14);
          $jtglp14 = $r['jmlkasus'];
          
          $jtp15 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-15' ")or die(mysql_error());
          $r = mysql_fetch_array($jtp15);
          $jtglp15 = $r['jmlkasus'];
          
          $jtp16 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-16' ")or die(mysql_error());
          $r = mysql_fetch_array($jtp16);
          $jtglp16 = $r['jmlkasus'];
          
          $jtp17 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-17' ")or die(mysql_error());
          $r = mysql_fetch_array($jtp17);
          $jtglp17 = $r['jmlkasus'];
          
          $jtp18 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-18' ")or die(mysql_error());
          $r = mysql_fetch_array($jtp18);
          $jtglp18 = $r['jmlkasus'];
          
          $jtp19 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-19' ")or die(mysql_error());
          $r = mysql_fetch_array($jtp19);
          $jtglp19 = $r['jmlkasus'];
          
          $jtp20 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-20' ")or die(mysql_error());
          $r = mysql_fetch_array($jtp20);
          $jtglp20 = $r['jmlkasus'];
          
          $jtp21 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-21' ")or die(mysql_error());
          $r = mysql_fetch_array($jtp21);
          $jtglp21 = $r['jmlkasus'];
          
          $jtp22 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-22' ")or die(mysql_error());
          $r = mysql_fetch_array($jtp22);
          $jtglp22 = $r['jmlkasus'];
         
          $jtp23 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-23' ")or die(mysql_error());
          $r = mysql_fetch_array($jtp23);
          $jtglp23 = $r['jmlkasus'];
          
          $jtp24 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-24' ")or die(mysql_error());
          $r = mysql_fetch_array($jtp24);
          $jtglp24 = $r['jmlkasus'];
          
          $jtp25 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-25' ")or die(mysql_error());
          $r = mysql_fetch_array($jtp25);
          $jtglp25 = $r['jmlkasus'];
          
          $jtp26 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-26' ")or die(mysql_error());
          $r = mysql_fetch_array($jtp26);
          $jtglp26 = $r['jmlkasus'];
          
          $jtp27 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-27' ")or die(mysql_error());
          $r = mysql_fetch_array($jtp27);
          $jtglp27 = $r['jmlkasus'];
          
          $jtp28 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-28' ")or die(mysql_error());
          $r = mysql_fetch_array($jtp28);
          $jtglp28 = $r['jmlkasus'];
           
          $jtp29 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-29' ")or die(mysql_error());
          $r = mysql_fetch_array($jtp29);
          $jtglp29 = $r['jmlkasus'];
          
          $jtp30 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-30' ")or die(mysql_error());
          $r = mysql_fetch_array($jtp30);
          $jtglp30 = $r['jmlkasus'];
          
          $jtp31 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-31' ")or die(mysql_error());
          $r = mysql_fetch_array($jtp31);
          $jtglp31 = $r['jmlkasus'];
          
    

    //ksurat=1
    
    $tp1 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-01' and ksurat='1'")or die(mysql_error());
    $r = mysql_fetch_array($tp1);
    $tglp11 = $r['jmlkasus'];
    
    $tp2 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-02' and ksurat='1'")or die(mysql_error());
    $r = mysql_fetch_array($tp2);
    $tglp12 = $r['jmlkasus'];
    
    $tp3 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-03' and ksurat='1'")or die(mysql_error());
    $r = mysql_fetch_array($tp3);
    $tglp13 = $r['jmlkasus'];
    
    $tp4 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-04' and ksurat='1'")or die(mysql_error());
    $r = mysql_fetch_array($tp4);
    $tglp14 = $r['jmlkasus'];
    
    $tp5 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-05' and ksurat='1'")or die(mysql_error());
    $r = mysql_fetch_array($tp5);
    $tglp15 = $r['jmlkasus'];
    
    $tp6 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-06' and ksurat='1'")or die(mysql_error());
    $r = mysql_fetch_array($tp6);
    $tglp16 = $r['jmlkasus'];
    
    $tp7 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-07' and ksurat='1'")or die(mysql_error());
    $r = mysql_fetch_array($tp7);
    $tglp17 = $r['jmlkasus'];
    
    $tp8 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-08' and ksurat='1'")or die(mysql_error());
    $r = mysql_fetch_array($tp8);
    $tglp18 = $r['jmlkasus'];
    
    $tp9 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-09' and ksurat='1'")or die(mysql_error());
    $r = mysql_fetch_array($tp9);
    $tglp19 = $r['jmlkasus'];
    
    $tp10 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-10' and ksurat='1'")or die(mysql_error());
    $r = mysql_fetch_array($tp10);
    $tglp110 = $r['jmlkasus'];
    
    $tp11 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-11' and ksurat='1'")or die(mysql_error());
    $r = mysql_fetch_array($tp11);
    $tglp111 = $r['jmlkasus'];
    
    $tp12 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-12' and ksurat='1'")or die(mysql_error());
    $r = mysql_fetch_array($tp12);
    $tglp112 = $r['jmlkasus'];
    
    $tp13 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-13' and ksurat='1'")or die(mysql_error());
    $r = mysql_fetch_array($tp13);
    $tglp113 = $r['jmlkasus'];
    
    $tp14 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-14' and ksurat='1'")or die(mysql_error());
    $r = mysql_fetch_array($tp14);
    $tglp114 = $r['jmlkasus'];
    
    $tp15 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-15' and ksurat='1'")or die(mysql_error());
    $r = mysql_fetch_array($tp15);
    $tglp115 = $r['jmlkasus'];
    
    $tp16 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-16' and ksurat='1'")or die(mysql_error());
    $r = mysql_fetch_array($tp16);
    $tglp116 = $r['jmlkasus'];
    
    $tp17 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-17' and ksurat='1'")or die(mysql_error());
    $r = mysql_fetch_array($tp17);
    $tglp117 = $r['jmlkasus'];
    
    $tp18 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-18' and ksurat='1'")or die(mysql_error());
    $r = mysql_fetch_array($tp18);
    $tglp118 = $r['jmlkasus'];
   
    $tp19 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-19' and ksurat='1'")or die(mysql_error());
    $r = mysql_fetch_array($tp19);
    $tglp119 = $r['jmlkasus'];
    
    $tp20 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-20' and ksurat='1'")or die(mysql_error());
    $r = mysql_fetch_array($tp20);
    $tglp120 = $r['jmlkasus'];
    
    $tp21 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-21' and ksurat='1'")or die(mysql_error());
    $r = mysql_fetch_array($tp21);
    $tglp121 = $r['jmlkasus'];
   
    $tp22 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-22' and ksurat='1'")or die(mysql_error());
    $r = mysql_fetch_array($tp22);
    $tglp122 = $r['jmlkasus'];
    
    $tp23 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-23' and ksurat='1'")or die(mysql_error());
    $r = mysql_fetch_array($tp23);
    $tglp123 = $r['jmlkasus'];
    
    $tp24 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-24' and ksurat='1'")or die(mysql_error());
    $r = mysql_fetch_array($tp24);
    $tglp124 = $r['jmlkasus'];
    
    $tp25 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-25' and ksurat='1'")or die(mysql_error());
    $r = mysql_fetch_array($tp25);
    $tglp125 = $r['jmlkasus'];
    
    $tp26 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-26' and ksurat='1'")or die(mysql_error());
    $r = mysql_fetch_array($tp26);
    $tglp126 = $r['jmlkasus'];
   
    $tp27 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-27' and ksurat='1'")or die(mysql_error());
    $r = mysql_fetch_array($tp27);
    $tglp127 = $r['jmlkasus'];
    
    $tp28 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-28' and ksurat='1'")or die(mysql_error());
    $r = mysql_fetch_array($tp28);
    $tglp128 = $r['jmlkasus'];
     
    $tp29 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-29' and ksurat='1'")or die(mysql_error());
    $r = mysql_fetch_array($tp29);
    $tglp129 = $r['jmlkasus'];
    
    $tp30 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-30' and ksurat='1'")or die(mysql_error());
    $r = mysql_fetch_array($tp30);
    $tglp130 = $r['jmlkasus'];
    
    $tp31 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-31' and ksurat='1'")or die(mysql_error());
    $r = mysql_fetch_array($tp31);
    $tglp131 = $r['jmlkasus'];
    
    //ksurat=2
    $tp1 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-01' and ksurat='2'")or die(mysql_error());
    $r = mysql_fetch_array($tp1);
    $tglp21 = $r['jmlkasus'];
    
    $tp2 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-02' and ksurat='2'")or die(mysql_error());
    $r = mysql_fetch_array($tp2);
    $tglp22 = $r['jmlkasus'];
    
    $tp3 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-03' and ksurat='2'")or die(mysql_error());
    $r = mysql_fetch_array($tp3);
    $tglp23 = $r['jmlkasus'];
    
    $tp4 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-04' and ksurat='2'")or die(mysql_error());
    $r = mysql_fetch_array($tp4);
    $tglp24 = $r['jmlkasus'];
    
    $tp5 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-05' and ksurat='2'")or die(mysql_error());
    $r = mysql_fetch_array($tp5);
    $tglp25 = $r['jmlkasus'];
    
    $tp6 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-06' and ksurat='2'")or die(mysql_error());
    $r = mysql_fetch_array($tp6);
    $tglp26 = $r['jmlkasus'];
    
    $tp7 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-07' and ksurat='2'")or die(mysql_error());
    $r = mysql_fetch_array($tp7);
    $tglp27 = $r['jmlkasus'];
    
    $tp8 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-08' and ksurat='2'")or die(mysql_error());
    $r = mysql_fetch_array($tp8);
    $tglp28 = $r['jmlkasus'];
    
    $tp9 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-09' and ksurat='2'")or die(mysql_error());
    $r = mysql_fetch_array($tp9);
    $tglp29 = $r['jmlkasus'];
    
    $tp10 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-10' and ksurat='2'")or die(mysql_error());
    $r = mysql_fetch_array($tp10);
    $tglp210 = $r['jmlkasus'];
    
    $tp11 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-11' and ksurat='2'")or die(mysql_error());
    $r = mysql_fetch_array($tp11);
    $tglp211 = $r['jmlkasus'];
    
    $tp12 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-12' and ksurat='2'")or die(mysql_error());
    $r = mysql_fetch_array($tp12);
    $tglp212 = $r['jmlkasus'];
    
    $tp13 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-13' and ksurat='2'")or die(mysql_error());
    $r = mysql_fetch_array($tp13);
    $tglp213 = $r['jmlkasus'];
    
    $tp14 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-14' and ksurat='2'")or die(mysql_error());
    $r = mysql_fetch_array($tp14);
    $tglp214 = $r['jmlkasus'];
    
    $tp15 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-15' and ksurat='2'")or die(mysql_error());
    $r = mysql_fetch_array($tp15);
    $tglp215 = $r['jmlkasus'];
    
    $tp16 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-16' and ksurat='2'")or die(mysql_error());
    $r = mysql_fetch_array($tp16);
    $tglp216 = $r['jmlkasus'];
    
    $tp17 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-17' and ksurat='2'")or die(mysql_error());
    $r = mysql_fetch_array($tp17);
    $tglp217 = $r['jmlkasus'];
    
    $tp18 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-18' and ksurat='2'")or die(mysql_error());
    $r = mysql_fetch_array($tp18);
    $tglp218 = $r['jmlkasus'];
   
    $tp19 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-19' and ksurat='2'")or die(mysql_error());
    $r = mysql_fetch_array($tp19);
    $tglp219 = $r['jmlkasus'];
    
    $tp20 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-20' and ksurat='2'")or die(mysql_error());
    $r = mysql_fetch_array($tp20);
    $tglp220 = $r['jmlkasus'];
    
    $tp21 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-21' and ksurat='2'")or die(mysql_error());
    $r = mysql_fetch_array($tp21);
    $tglp221 = $r['jmlkasus'];
   
    $tp22 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-22' and ksurat='2'")or die(mysql_error());
    $r = mysql_fetch_array($tp22);
    $tglp222 = $r['jmlkasus'];
    
    $tp23 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-23' and ksurat='2'")or die(mysql_error());
    $r = mysql_fetch_array($tp23);
    $tglp223 = $r['jmlkasus'];
    
    $tp24 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-24' and ksurat='2'")or die(mysql_error());
    $r = mysql_fetch_array($tp24);
    $tglp224 = $r['jmlkasus'];
    
    $tp25 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-25' and ksurat='2'")or die(mysql_error());
    $r = mysql_fetch_array($tp25);
    $tglp225 = $r['jmlkasus'];
    
    $tp26 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-26' and ksurat='2'")or die(mysql_error());
    $r = mysql_fetch_array($tp26);
    $tglp226 = $r['jmlkasus'];
   
    $tp27 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-27' and ksurat='2'")or die(mysql_error());
    $r = mysql_fetch_array($tp27);
    $tglp227 = $r['jmlkasus'];
    
    $tp28 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-28' and ksurat='2'")or die(mysql_error());
    $r = mysql_fetch_array($tp28);
    $tglp228 = $r['jmlkasus'];
     
    $tp29 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-29' and ksurat='2'")or die(mysql_error());
    $r = mysql_fetch_array($tp29);
    $tglp229 = $r['jmlkasus'];
    
    $tp30 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-30' and ksurat='2'")or die(mysql_error());
    $r = mysql_fetch_array($tp30);
    $tglp230 = $r['jmlkasus'];
    
    $tp31 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-31' and ksurat='2'")or die(mysql_error());
    $r = mysql_fetch_array($tp31);
    $tglp231 = $r['jmlkasus'];
                        
                            $drop = mysql_query("DROP TABLE IF EXISTS grafik_arsip")or die(mysql_error());
							
                            $create = mysql_query("CREATE TABLE IF NOT EXISTS grafik_arsip (
                            `tanggal` char(2) NOT NULL,
                            `surat_masuk` int(4) NOT NULL,
                            `surat_keluar` int(4) NOT NULL,
							`jml_surat` int(4) NOT NULL
                          )")or die(mysql_error());
						  
                            
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('1','$tglp11','$tglp21','$jtglp1') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('2','$tglp12','$tglp22','$jtglp2') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('3','$tglp13','$tglp23','$jtglp3') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('4','$tglp14','$tglp24','$jtglp4') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('5','$tglp15','$tglp25','$jtglp5') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('6','$tglp16','$tglp26','$jtglp6') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('7','$tglp17','$tglp27','$jtglp7') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('8','$tglp18','$tglp28','$jtglp8') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('9','$tglp19','$tglp29','$jtglp9') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('10','$okt110','$tglp210','$jtglp10') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('11','$tglp111','$tglp211','$jtglp11') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('12','$tglp121','$tglp212','$jtglp12') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('13','$tglp131','$tglp213','$jtglp13') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('14','$tglp114','$tglp214','$jtglp14') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('15','$tglp115','$tglp215','$jtglp15') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('16','$tglp116','$tglp216','$jtglp16') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('17','$tglp117','$tglp217','$jtglp17') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('18','$tglp118','$tglp218','$jtglp18') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('19','$tglp119','$tglp219','$jtglp19') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('20','$tglp120','$tglp220','$jtglp20') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('21','$tglp121','$tglp221','$jtglp21') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('22','$tglp122','$tglp222','$jtglp22') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('23','$tglp123','$tglp223','$jtglp23') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('24','$tglp124','$tglp224','$jtglp24') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('25','$tglp125','$tglp225','$jtglp25') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('26','$tglp126','$tglp226','$jtglp26') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('27','$tglp127','$tglp227','$jtglp27') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('28','$tglp128','$tglp228','$jtglp28') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('29','$tglp129','$tglp229','$jtglp29') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('30','$tglp130','$tglp230','$jtglp30') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('31','$tglp131','$tglp231','$jtglp31') ") or die(mysql_error());
                        
                        $grafik_arsip 	= mysql_query("SELECT * FROM grafik_arsip")or die(mysql_error());
                           
                        
                        while($r = mysql_fetch_array($grafik_arsip)){
                        $tanggal = $r['tanggal'];
                        $jumlah1 = $r['surat_masuk'];
                        $jumlah2 = $r['surat_keluar'];

                        $jmlsurat = $r['jml_surat'];
                        $jumlah=$jumlah1 / $jmlsurat * 100;

    					$grafik1[] = array($tanggal, intval($jumlah1));
                        $grafik2[] = array($tanggal, intval($jumlah2));
                        $grafik3[] = array($tanggal, intval($jumlah3));
						$grafik4[] = array($tanggal);
						}

						$data_grafik1 = json_encode($grafik1);
                        $data_grafik2 = json_encode($grafik2);
                        $data_grafik3 = json_encode($grafik3);
						$grafik_tanggal  = json_encode($grafik4);
						
						
						if($cbulan==1){
						$bulan="Januari"; ?>
						<?php
						}elseif($cbulan==2){
						$bulan="Februari"; ?>
						<?php
						}elseif($cbulan==3){
						$bulan="Maret"; ?>
						<?php
						}elseif($cbulan==4){
						$bulan="April"; ?>
						<?php
						}elseif($cbulan==5){
						$bulan="Mei"; ?>
						<?php
						}elseif($cbulan==6){
						$bulan="Juni"; ?>
						<?php
						}elseif($cbulan==7){
						$bulan="Juli"; ?>
						<?php
						}elseif($cbulan==8){
						$bulan="Agustus"; ?>
						<?php
						}elseif($cbulan==9){
						$bulan="September"; ?>
						<?php
						}elseif($cbulan==10){
						$bulan="Oktober"; ?>
						<?php
						}elseif($cbulan==11){
						$bulan="November"; ?>
						<?php
						}elseif($cbulan==12){
						$bulan="Desember"; ?>
						<?php
						}
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
            categories: <?=$grafik_tanggal?>
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
            text: 'Grafik Harian Bulan <?php echo $bulan; ?> Tahun <?php echo $ctahun ?>',
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