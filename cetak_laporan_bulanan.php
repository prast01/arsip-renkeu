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
    $ctahun = isset($_GET['ctahun']) ? $_GET['ctahun'] : '';
?>

<br />
<div class="row">
    <div class="col-md-12">
        <section class="panel">
            <header class="panel-heading">
                Laporan Bulanan	Tahun <?php echo $ctahun ?>
            </header>
<p>
<table border="1" width="100%" class="" bgcolor="">
	<tbody>
	<tr>
		<td width="30%" rowspan="2"><b>Kelompok Surat</b></td>
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
  <?php
  }
  ?>      
                        <tr>
                            <?php
                            $jtp = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-01-01' AND tanggal<='$ctahun-12-31' and ksurat like '%$cjnssurat%'")or die(mysql_error());
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
      $jtp = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-01-01' AND tanggal<='$ctahun-01-31' and ksurat like '%$cjnssurat%'")or die(mysql_error());
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
          $jtp2 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-02-01' AND tanggal<='$ctahun-02-28' and ksurat like '%$cjnssurat%'")or die(mysql_error());
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
          $jtp3 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-03-01' AND tanggal<='$ctahun-03-31' and ksurat like '%$cjnssurat%'")or die(mysql_error());
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
          $jtp4 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-04-01' AND tanggal<='$ctahun-04-30' and ksurat like '%$cjnssurat%'")or die(mysql_error());
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
          $jtp5 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-05-01' AND tanggal<='$ctahun-05-31' and ksurat like '%$cjnssurat%'")or die(mysql_error());
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
          $jtp6 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-06-01' AND tanggal<='$ctahun-06-30' and ksurat like '%$cjnssurat%'")or die(mysql_error());
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
          $jtp7 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-07-01' AND tanggal<='$ctahun-07-31' and ksurat like '%$cjnssurat%'")or die(mysql_error());
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
          $jtp8 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-08-01' AND tanggal<='$ctahun-08-31' and ksurat like '%$cjnssurat%'")or die(mysql_error());
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
          $jtp9 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-09-01' AND tanggal<='$ctahun-09-30' and ksurat like '%$cjnssurat%'")or die(mysql_error());
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
          $jtp10 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-10-01' AND tanggal<='$ctahun-10-31' and ksurat like '%$cjnssurat%'")or die(mysql_error());
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
          $jtp11 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-11-01' AND tanggal<='$ctahun-11-30' and ksurat like '%$cjnssurat%'")or die(mysql_error());
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
          $jtp12 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-12-01' AND tanggal<='$ctahun-12-31' and ksurat like '%$cjnssurat%'")or die(mysql_error());
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
	$sql = mysql_query("SELECT * from jenis_srt where id like '%$cjnssurat%' order by id")or die(mysql_error());
	while($fetch1 = mysql_fetch_array($sql)) {	
	$id = $fetch1['id'];
	$jenis = $fetch1['jenis'];		
	?>
	<tr>
		<td rowspan="2"><?php echo $jenis ?></td>
    <?php
    if($ctahun!=''){ 
    $tp = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='01-01-$ctahun' AND tanggal<='31-12-$ctahun' and id_jns_surat='$id' and ksurat='1' and tanggal like '%$ctahun%'")or die(mysql_error());
    } else {
    $tp = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='01-01-$ctahun' AND tanggal<='31-12-$ctahun' and id_jns_surat='$id' and ksurat='1' and tanggal='$ctahun'")or die(mysql_error());
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
    $tp1 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-01-01' AND tanggal<='$ctahun-01-31' AND id_jns_surat='$id' and ksurat='1'")or die(mysql_error());
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
    $tp2 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-02-01' AND tanggal<='$ctahun-02-28' AND id_jns_surat='$id' and ksurat='1'")or die(mysql_error());
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
    $tp3 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-03-01' AND tanggal<='$ctahun-03-31' AND id_jns_surat='$id' and ksurat='1'")or die(mysql_error());
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
    $tp4 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-04-01' AND tanggal<='$ctahun-04-30' AND id_jns_surat='$id' and ksurat='1'")or die(mysql_error());
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
    $tp5 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-05-01' AND tanggal<='$ctahun-05-31' AND id_jns_surat='$id' and ksurat='1'")or die(mysql_error());
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
    $tp6 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-06-01' AND tanggal<='$ctahun-06-30' AND id_jns_surat='$id' and ksurat='1'")or die(mysql_error());
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
    $tp7 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-07-01' AND tanggal<='$ctahun-07-31' AND id_jns_surat='$id' and ksurat='1'")or die(mysql_error());
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
    $tp8 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-08-01' AND tanggal<='$ctahun-08-31' AND id_jns_surat='$id' and ksurat='1'")or die(mysql_error());
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
    $tp9 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-09-01' AND tanggal<='$ctahun-09-30' AND id_jns_surat='$id' and ksurat='1'")or die(mysql_error());
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
    $tp10 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-10-01' AND tanggal<='$ctahun-10-31' AND id_jns_surat='$id' and ksurat='1'")or die(mysql_error());
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
    $tp11 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-11-01' AND tanggal<='$ctahun-11-30' AND id_jns_surat='$id' and ksurat='1'")or die(mysql_error());
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
    $tp12 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-12-01' AND tanggal<='$ctahun-12-31' AND id_jns_surat='$id' and ksurat='1'")or die(mysql_error());
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
  <?php
  }
  ?>      
                        <tr>
                            <?php
                            $jtp = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-01-01' AND tanggal<='$ctahun-12-31'  and ksurat='1' and id_jns_surat like '%$cjnssurat%'")or die(mysql_error());
                            
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
      $jtp = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-01-01' AND tanggal<='$ctahun-01-31'  and ksurat='1' and id_jns_surat like '%$cjnssurat%'")or die(mysql_error());
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
          $jtp2 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-02-01' AND tanggal<='$ctahun-02-28'  and ksurat='1' and id_jns_surat like '%$cjnssurat%'")or die(mysql_error());
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
          $jtp3 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-03-01' AND tanggal<='$ctahun-03-31'  and ksurat='1' and id_jns_surat like '%$cjnssurat%'")or die(mysql_error());
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
          $jtp4 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-04-01' AND tanggal<='$ctahun-04-30'  and ksurat='1' and id_jns_surat like '%$cjnssurat%'")or die(mysql_error());
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
          $jtp5 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-05-01' AND tanggal<='$ctahun-05-31' and ksurat='1' and id_jns_surat like '%$cjnssurat%'")or die(mysql_error());
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
          $jtp6 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-06-01' AND tanggal<='$ctahun-06-30' and ksurat='1' and id_jns_surat like '%$cjnssurat%'")or die(mysql_error());
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
          $jtp7 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-07-01' AND tanggal<='$ctahun-07-31' and ksurat='1' and id_jns_surat like '%$cjnssurat%'")or die(mysql_error());
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
          $jtp8 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-08-01' AND tanggal<='$ctahun-08-31' and ksurat='1' and id_jns_surat like '%$cjnssurat%'")or die(mysql_error());
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
          $jtp9 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-09-01' AND tanggal<='$ctahun-09-30' and ksurat='1' and id_jns_surat like '%$cjnssurat%'")or die(mysql_error());
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
          $jtp10 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-10-01' AND tanggal<='$ctahun-10-31' and ksurat='1' and id_jns_surat like '%$cjnssurat%'")or die(mysql_error());
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
          $jtp11 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-11-01' AND tanggal<='$ctahun-11-30' and ksurat='1' and id_jns_surat like '%$cjnssurat%'")or die(mysql_error());
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
          $jtp12 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-12-01' AND tanggal<='$ctahun-12-31' and ksurat='1' and id_jns_surat like '%$cjnssurat%'")or die(mysql_error());
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
	$sql = mysql_query("SELECT * from jenis_srt where id like '%$cjnssurat%' order by id")or die(mysql_error());
	while($fetch1 = mysql_fetch_array($sql)) {	
	$id = $fetch1['id'];
	$jenis = $fetch1['jenis'];		
	?>
	<tr>
		<td rowspan="2"><?php echo $jenis ?></td>
    <?php
    if($ctahun!=''){ 
    $tp = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='01-01-$ctahun' AND tanggal<='31-12-$ctahun' and id_jns_surat='$id' and ksurat='2' and tanggal like '%$ctahun%'")or die(mysql_error());
    } else {
    $tp = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='01-01-$ctahun' AND tanggal<='31-12-$ctahun' and id_jns_surat='$id' and ksurat='2' and tanggal='$ctahun'")or die(mysql_error());
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
    $tp1 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-01-01' AND tanggal<='$ctahun-01-31' AND id_jns_surat='$id' and ksurat='2'")or die(mysql_error());
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
    $tp2 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-02-01' AND tanggal<='$ctahun-02-28' AND id_jns_surat='$id' and ksurat='2'")or die(mysql_error());
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
    $tp3 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-03-01' AND tanggal<='$ctahun-03-31' AND id_jns_surat='$id' and ksurat='2'")or die(mysql_error());
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
    $tp4 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-04-01' AND tanggal<='$ctahun-04-30' AND id_jns_surat='$id' and ksurat='2'")or die(mysql_error());
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
    $tp5 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-05-01' AND tanggal<='$ctahun-05-31' AND id_jns_surat='$id' and ksurat='2'")or die(mysql_error());
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
    $tp6 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-06-01' AND tanggal<='$ctahun-06-30' AND id_jns_surat='$id' and ksurat='2'")or die(mysql_error());
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
    $tp7 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-07-01' AND tanggal<='$ctahun-07-31' AND id_jns_surat='$id' and ksurat='2'")or die(mysql_error());
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
    $tp8 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-08-01' AND tanggal<='$ctahun-08-31' AND id_jns_surat='$id' and ksurat='2'")or die(mysql_error());
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
    $tp9 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-09-01' AND tanggal<='$ctahun-09-30' AND id_jns_surat='$id' and ksurat='2'")or die(mysql_error());
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
    $tp10 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-10-01' AND tanggal<='$ctahun-10-31' AND id_jns_surat='$id' and ksurat='2'")or die(mysql_error());
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
    $tp11 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-11-01' AND tanggal<='$ctahun-11-30' AND id_jns_surat='$id' and ksurat='2'")or die(mysql_error());
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
    $tp12 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-12-01' AND tanggal<='$ctahun-12-31' AND id_jns_surat='$id' and ksurat='2'")or die(mysql_error());
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
  <?php
  }
  ?>      
	
                        <tr>
                            <?php
                            $jtp = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-01-01' AND tanggal<='$ctahun-12-31'  and ksurat='2' and id_jns_surat like '%$cjnssurat%'")or die(mysql_error());
                            
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
      $jtp = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-01-01' AND tanggal<='$ctahun-01-31'  and ksurat='2' and id_jns_surat like '%$cjnssurat%'")or die(mysql_error());
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
          $jtp2 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-02-01' AND tanggal<='$ctahun-02-28'  and ksurat='2' and id_jns_surat like '%$cjnssurat%'")or die(mysql_error());
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
          $jtp3 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-03-01' AND tanggal<='$ctahun-03-31'  and ksurat='2' and id_jns_surat like '%$cjnssurat%'")or die(mysql_error());
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
          $jtp4 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-04-01' AND tanggal<='$ctahun-04-30'  and ksurat='2' and id_jns_surat like '%$cjnssurat%'")or die(mysql_error());
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
          $jtp5 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-05-01' AND tanggal<='$ctahun-05-31' and ksurat='2' and id_jns_surat like '%$cjnssurat%'")or die(mysql_error());
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
          $jtp6 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-06-01' AND tanggal<='$ctahun-06-30' and ksurat='2' and id_jns_surat like '%$cjnssurat%'")or die(mysql_error());
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
          $jtp7 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-07-01' AND tanggal<='$ctahun-07-31' and ksurat='2' and id_jns_surat like '%$cjnssurat%'")or die(mysql_error());
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
          $jtp8 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-08-01' AND tanggal<='$ctahun-08-31' and ksurat='2' and id_jns_surat like '%$cjnssurat%'")or die(mysql_error());
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
          $jtp9 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-09-01' AND tanggal<='$ctahun-09-30' and ksurat='2' and id_jns_surat like '%$cjnssurat%'")or die(mysql_error());
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
          $jtp10 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-10-01' AND tanggal<='$ctahun-10-31' and ksurat='2' and id_jns_surat like '%$cjnssurat%'")or die(mysql_error());
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
          $jtp11 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-11-01' AND tanggal<='$ctahun-11-30' and ksurat='2' and id_jns_surat like '%$cjnssurat%'")or die(mysql_error());
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
          $jtp12 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-12-01' AND tanggal<='$ctahun-12-31' and ksurat='2' and id_jns_surat like '%$cjnssurat%'")or die(mysql_error());
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
  </tbody>           
</table>
	   
    </div>
</div>