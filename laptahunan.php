<link href="assets/css/bootstrap.css" rel="stylesheet" />
<?php 
$cjnssurat = isset($_REQUEST['cjnssurat']) ? $_REQUEST['cjnssurat'] : '';
$ctahun = isset($_REQUEST['ctahun']) ? $_REQUEST['ctahun'] : '';
?>
<div class="table-responsive">
		<form id="form-wizard" class="form-horizontal" method="post" onsubmit="">
			<table class="table table-hover table-bordered table-striped">
				<tbody>
					<tr class="gradeX">
						<td>
							Jenis Surat
							<select name="cjnssurat" id="cjnssurat" class="">
								  <?php
								  if ($cjnssurat==""){  
								  ?>
								  <option value="">--Pilih Semua--</option>
								  <?php   
								  $query=mysql_query("select * from jenis_srt order by jenis");
								  while($row=mysql_fetch_array($query)){
								  $id = $row['id'];
								  ?>
								  <option value="<?php  echo $row['id']; ?>">
								  <?php  echo $row['jenis']; ?>
								  </option>
								  <?php 
								  }
								  } 
								  if ($cjnssurat!=""){
								  $query=mysql_query("select * from jenis_srt where id='$cjnssurat'");
								  while($row=mysql_fetch_array($query)){
								  $id = $row['id'];
								  ?>
								  <option value="<?php  echo $row['id']; ?>">
								  <?php  echo $row['jenis']; ?>
								  </option>
								  <?php 
								  ?>
								  <option value="">--Pilih Semua--</option>
								  <?php
								  $query=mysql_query("select * from jenis_srt order by jenis");
								  while($row=mysql_fetch_array($query)){
								  $id = $row['id'];
								  ?>
								  <option value="<?php  echo $row['id']; ?>">
								  <?php  echo $row['jenis']; ?>
								  </option>
								  <?php
								  }
								  }
								  }
								  ?>
							</select>
							&nbsp;&nbsp;
							<input type="submit" name="lihat" value="&nbsp;&nbsp;Cari&nbsp;&nbsp;">&nbsp;&nbsp;
							<a href="cetak_laporan_tahunan.php?cjnssurat=<?php echo $cjnssurat ?>" target="_blank"><input type="button" value="Cetak">
							</a>
						</td>
					</tr>
				</tbody>
			</table>
		</form>
</div>
<div class="table-responsive">
<table class="table table-hover table-bordered table-striped">
<form method="post" enctype="multipart/form-data">
    <thead>
    <tr>
   	  <th width="" colspan="33"><center><b><h4>Laporan Tahunan</h4></b></center></th>
   	</tr>
  	</thead>
   	  
   	<tbody>
	<tr>
		<td width="30%" rowspan="2"><b>Kelompok Surat</b></td>
		<td colspan="5" align="center"><b>Tahun</b></td>
	</tr>
  	<tr>
  		<td>2016</td>
  		<td>2017</td>
  		<td>2018</td>
  		<td>2019</td>
  		<td>2020</td>
  	</tr>
	<?php

$cjnssurat = isset($_REQUEST['cjnssurat']) ? $_REQUEST['cjnssurat'] : '';
  $ctahun = isset($_POST['ctahun']) ? $_POST['ctahun'] : '';
	$lihat = isset($_POST['lihat']) ? $_POST['lihat'] : '';
	
	if($lihat){
		$sql = mysql_query("SELECT * from jns_surat  order by ksurat")or die(mysql_error());
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
	</tr>
  <tr>
    <?php 
    $tp1 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>='2016-01-01' AND tanggal<='2016-12-31' and ksurat='$ksurat'")or die(mysql_error());
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
    $tp2 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>='2017-01-01' AND tanggal<='2017-12-31' and ksurat='$ksurat'")or die(mysql_error());
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
    $tp3 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>='2018-01-01' AND tanggal<='2018-12-31' and ksurat='$ksurat'")or die(mysql_error());
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
    $tp4 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>='2019-01-01' AND tanggal<='2019-12-31' and ksurat='$ksurat'")or die(mysql_error());
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
    $tp5 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>='2020-01-01' AND tanggal<='2020-12-31' and ksurat='$ksurat'")or die(mysql_error());
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
  </tr>
	<?php }?>
  
  <?php if($lihat){ ?>                     
  <tr>
      <td><b>Jumlah</b></td>
      <?php 
      $jtp = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>= '2016-01-01'and tanggal<= '2016-12-31'")or die(mysql_error());
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
          $jtp2 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>= '2017-01-01'and tanggal<= '2017-12-31'")or die(mysql_error());
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
          $jtp3 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>= '2018-01-01'and tanggal<= '2018-12-31'")or die(mysql_error());
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
          $jtp4 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>= '2019-01-01'and tanggal<= '2019-12-31'")or die(mysql_error());
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
          $jtp5 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>= '2020-01-01'and tanggal<= '2020-12-31'")or die(mysql_error());
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
  </tr>
  <?php
  }
  ?>
   </tbody>
</form>
</table>
</div>

<!- surat masuk _______________________________________________________________________________________________________________ ->

<div class="table-responsive">
<table class="table table-hover table-bordered table-striped">
<form method="post" enctype="multipart/form-data">
    <thead>
    <tr>
   	  <th width="" colspan="33"><center><b><h4>Rincian Surat Masuk</h4></b></center></th>
   	</tr>
  	</thead>
   	  
   	<tbody>
	<tr>
		<td width="30%" rowspan="2"><b>Jenis Surat</b></td>
		<td colspan="5" align="center"><b>Tahun</b></td>
	</tr>
  	<tr>
  		<td>2016</td>
  		<td>2017</td>
  		<td>2018</td>
  		<td>2019</td>
  		<td>2020</td>
  	</tr>
	<?php

$cjnssurat = isset($_REQUEST['cjnssurat']) ? $_REQUEST['cjnssurat'] : '';
  $ctahun = isset($_POST['ctahun']) ? $_POST['ctahun'] : '';
	$lihat = isset($_POST['lihat']) ? $_POST['lihat'] : '';
	
	if($lihat){
		$sql = mysql_query("SELECT * from jenis_srt where id like '%$cjnssurat%' order by id")or die(mysql_error());
		} else {
		$sql = mysql_query("SELECT * from jenis_srt where id='xxx' order by id desc");
		}
	while($fetch1 = mysql_fetch_array($sql)) {	
	$id = $fetch1['id'];
	$jenis = $fetch1['jenis'];		
	?>
	<tr>
		<td rowspan="2"><?php echo $jenis ?></td>
	</tr>
  <tr>
    <?php 
    $tp1 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>='2016-01-01' AND tanggal<='2016-12-31' and id_jns_surat='$id' and ksurat='1'")or die(mysql_error());
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
    $tp2 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>='2017-01-01' AND tanggal<='2017-12-31' and id_jns_surat='$id' and ksurat='1'")or die(mysql_error());
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
    $tp3 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>='2018-01-01' AND tanggal<='2018-12-31' and id_jns_surat='$id' and ksurat='1'")or die(mysql_error());
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
    $tp4 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>='2019-01-01' AND tanggal<='2019-12-31' and id_jns_surat='$id' and ksurat='1'")or die(mysql_error());
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
    $tp5 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>='2020-01-01' AND tanggal<='2020-12-31' and id_jns_surat='$id' and ksurat='1'")or die(mysql_error());
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
  </tr>
	<?php }?>
  
  <?php if($lihat){ ?>                     
  <tr>
      <td><b>Jumlah</b></td>
      <?php 
      $jtp = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>= '2016-01-01'and tanggal<= '2016-12-31' and ksurat='1' and id_jns_surat like '%$cjnssurat%'")or die(mysql_error());
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
          $jtp2 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>= '2017-01-01'and tanggal<= '2017-12-31' and ksurat='1' and id_jns_surat like '%$cjnssurat%'")or die(mysql_error());
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
          $jtp3 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>= '2018-01-01'and tanggal<= '2018-12-31' and ksurat='1' and id_jns_surat like '%$cjnssurat%'")or die(mysql_error());
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
          $jtp4 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>= '2019-01-01'and tanggal<= '2019-12-31' and ksurat='1' and id_jns_surat like '%$cjnssurat%'")or die(mysql_error());
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
          $jtp5 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>= '2020-01-01'and tanggal<= '2020-12-31' and ksurat='1' and id_jns_surat like '%$cjnssurat%'")or die(mysql_error());
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
  </tr>
  <?php
  }
  ?>
   </tbody>
</form>
</table>
</div>


<!- surat Keluar _______________________________________________________________________________________________________________ ->

<div class="table-responsive">
<table class="table table-hover table-bordered table-striped">
<form method="post" enctype="multipart/form-data">
    <thead>
    <tr>
   	  <th width="" colspan="33"><center><b><h4>Rincian Surat Keluar</h4></b></center></th>
   	</tr>
  	</thead>
   	  
   	<tbody>
	<tr>
		<td width="30%" rowspan="2"><b>Jenis Surat</b></td>
		<td colspan="5" align="center"><b>Tahun</b></td>
	</tr>
  	<tr>
  		<td>2016</td>
  		<td>2017</td>
  		<td>2018</td>
  		<td>2019</td>
  		<td>2020</td>
  	</tr>
	<?php

$cjnssurat = isset($_REQUEST['cjnssurat']) ? $_REQUEST['cjnssurat'] : '';
  $ctahun = isset($_POST['ctahun']) ? $_POST['ctahun'] : '';
	$lihat = isset($_POST['lihat']) ? $_POST['lihat'] : '';
	
	if($lihat){
		$sql = mysql_query("SELECT * from jenis_srt where id like '%$cjnssurat%' order by id")or die(mysql_error());
		} else {
		$sql = mysql_query("SELECT * from jenis_srt where id='xxx' order by id desc");
		}
	while($fetch1 = mysql_fetch_array($sql)) {	
	$id = $fetch1['id'];
	$jenis = $fetch1['jenis'];		
	?>
	<tr>
		<td rowspan="2"><?php echo $jenis ?></td>
	</tr>
  <tr>
    <?php 
    $tp1 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>='2016-01-01' AND tanggal<='2016-12-31' and id_jns_surat='$id' and ksurat='2'")or die(mysql_error());
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
    $tp2 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>='2017-01-01' AND tanggal<='2017-12-31' and id_jns_surat='$id' and ksurat='2'")or die(mysql_error());
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
    $tp3 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>='2018-01-01' AND tanggal<='2018-12-31' and id_jns_surat='$id' and ksurat='2'")or die(mysql_error());
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
    $tp4 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>='2019-01-01' AND tanggal<='2019-12-31' and id_jns_surat='$id' and ksurat='2'")or die(mysql_error());
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
    $tp5 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>='2020-01-01' AND tanggal<='2020-12-31' and id_jns_surat='$id' and ksurat='2'")or die(mysql_error());
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
  </tr>
	<?php }?>
  
  <?php if($lihat){ ?>                     
  <tr>
      <td><b>Jumlah</b></td>
      <?php 
      $jtp = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>= '2016-01-01'and tanggal<= '2016-12-31' and ksurat='2' and id_jns_surat like '%$cjnssurat%'")or die(mysql_error());
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
          $jtp2 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>= '2017-01-01'and tanggal<= '2017-12-31' and ksurat='2' and id_jns_surat like '%$cjnssurat%'")or die(mysql_error());
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
          $jtp3 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>= '2018-01-01'and tanggal<= '2018-12-31' and ksurat='2' and id_jns_surat like '%$cjnssurat%'")or die(mysql_error());
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
          $jtp4 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>= '2019-01-01'and tanggal<= '2019-12-31' and ksurat='2' and id_jns_surat like '%$cjnssurat%'")or die(mysql_error());
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
          $jtp5 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>= '2020-01-01'and tanggal<= '2020-12-31' and ksurat='2' and id_jns_surat like '%$cjnssurat%'")or die(mysql_error());
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
  </tr>
  <?php
  }
  ?>
   </tbody>
</form>
</table>
</div>