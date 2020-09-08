<style> 
    th{
        color: black;
        font: Times New Roman;
    }
    td{
        font-size: 12px;
        color: black;
        font: Times New Roman;
    }
</style>

<script>
    window.print();
</script>

<?php
include 'koneksi.php';
$cjnssurat = isset($_GET['cjnssurat']) ? $_GET['cjnssurat'] : '';
?>

<br />
<div class="row">
    <div class="col-md-12">
        <section class="panel">
            <header class="panel-heading">
                Laporan Tahunan
            </header>
<p>
<table border="1" width="100%" class="" bgcolor="">
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

	$sql = mysql_query("SELECT * from jns_surat  order by ksurat")or die(mysql_error());
	while($fetch1 = mysql_fetch_array($sql)) {	
	$ksurat = $fetch1['ksurat'];		
	?>
	<tr>
    <?php 
    $sql1 = mysql_query("SELECT * from jns_surat where ksurat='$ksurat'")or die(mysql_error());
    $data=mysql_fetch_array($sql1);
    $ksurat1=$data['nm_surat'];
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
  </tbody>           
</table>
<!- per jenis surat masuk .............................................................................. ->
                 
       </section>


        <section class="panel">
            <header class="panel-heading">
                Rincian Surat Masuk 
            </header>
<p>
<table border="1" width="100%" class="" bgcolor="">
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

	$sql = mysql_query("SELECT * from jenis_srt where id like '%$cjnssurat%' order by id")or die(mysql_error());
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
  
  <tr>
      <td><b>Jumlah</b></td>
      <?php 
      $jtp = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>= '2016-01-01'and tanggal<= '2016-12-31' and ksurat='1'")or die(mysql_error());
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
          $jtp2 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>= '2017-01-01'and tanggal<= '2017-12-31' and ksurat='1'")or die(mysql_error());
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
          $jtp3 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>= '2018-01-01'and tanggal<= '2018-12-31' and ksurat='1'")or die(mysql_error());
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
          $jtp4 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>= '2019-01-01'and tanggal<= '2019-12-31' and ksurat='1'")or die(mysql_error());
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
          $jtp5 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>= '2020-01-01'and tanggal<= '2020-12-31' and ksurat='1'")or die(mysql_error());
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
  </tbody>           
</table>
<!- per jenis surat keluar .............................................................................. ->
                 
        <section class="panel">
            <header class="panel-heading">
                Rincian Surat Keluar 
            </header>
<p>
<table border="1" width="100%" class="" bgcolor="">
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
	$sql = mysql_query("SELECT * from jenis_srt where id like '%$cjnssurat%' order by id")or die(mysql_error());
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
  
  <tr>
      <td><b>Jumlah</b></td>
      <?php 
      $jtp = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>= '2016-01-01'and tanggal<= '2016-12-31' and ksurat='2'")or die(mysql_error());
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
          $jtp2 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>= '2017-01-01'and tanggal<= '2017-12-31' and ksurat='2'")or die(mysql_error());
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
          $jtp3 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>= '2018-01-01'and tanggal<= '2018-12-31' and ksurat='2'")or die(mysql_error());
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
          $jtp4 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>= '2019-01-01'and tanggal<= '2019-12-31' and ksurat='2'")or die(mysql_error());
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
          $jtp5 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>= '2020-01-01'and tanggal<= '2020-12-31' and ksurat='2'")or die(mysql_error());
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
  </tbody>           
</table>
	   
    </div>
</div>