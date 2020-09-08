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
    $cjenis_srt = isset($_GET['cjenis_srt']) ? $_GET['cjenis_srt'] : '';
    $ctahun = isset($_GET['ctahun']) ? $_GET['ctahun'] : '';
	$cbulan = isset($_GET['cbulan']) ? $_GET['cbulan'] : '';
?>

<br />
<div class="row">
    <div class="col-md-12">
        <section class="panel">
            <header class="panel-heading">
                Laporan Harian Surat Masuk Bulan 
				<?php 
				if($cbulan==1){
				?>
				Januari
				<?php
				}elseif($cbulan==2){
				?>
				Februari
				<?php
				}elseif($cbulan==3){
				?>
				Maret
				<?php
				}elseif($cbulan==4){
				?>
				April
				<?php
				}elseif($cbulan==5){
				?>
				Mei
				<?php
				}elseif($cbulan==6){
				?>
				Juni
				<?php
				}elseif($cbulan==7){
				?>
				Juli
				<?php
				}elseif($cbulan==8){
				?>
				Agustus
				<?php
				}elseif($cbulan==9){
				?>
				September
				<?php
				}elseif($cbulan==10){
				?>
				Oktober
				<?php
				}elseif($cbulan==11){
				?>
				November
				<?php
				}elseif($cbulan==12){
				?>
				Desember
				<?php
				}?> 
				Tahun <?php echo $ctahun ?>
            </header>
<p>
<table border="1" width="100%" class="" bgcolor="">
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
    
    $sql = mysql_query("SELECT * from jenis_srt where id like '%$cjenis_srt%' order by id")or die(mysql_error());
    while($fetch1 = mysql_fetch_array($sql)) {  
	$id = $fetch1['id'];
	$jenis = $fetch1['jenis'];		
    ?>
	<tr>
		<td rowspan="2"><?php echo $jenis ?></td>
		<?php 
		$tp = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE left(tanggal,7) = '$thnbln' and id_jns_surat='$id' and ksurat='1'  ")or die(mysql_error());                      
		$r = mysql_fetch_array($tp);
		$tp = $r['jmlkasus'];
		?>
		<td rowspan="2">
		<?php 
		if($tp=="0"){
		echo "-";
		}else{
		echo $tp; 
		}
		?>
		</td>
	</tr>
  	<tr>
    <?php 
    $tp1 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-01' and id_jns_surat='$id' and ksurat='1' ")or die(mysql_error());
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
    $tp2 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-02' and id_jns_surat='$id' and ksurat='1' ")or die(mysql_error());
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
    $tp3 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-03' and id_jns_surat='$id' and ksurat='1' ")or die(mysql_error());
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
    $tp4 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-04' and id_jns_surat='$id' and ksurat='1' ")or die(mysql_error());
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
    $tp5 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-05' and id_jns_surat='$id' and ksurat='1' ")or die(mysql_error());
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
    $tp6 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-06' and id_jns_surat='$id' and ksurat='1' ")or die(mysql_error());
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
    $tp7 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-07' and id_jns_surat='$id' and ksurat='1' ")or die(mysql_error());
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
    $tp8 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-08' and id_jns_surat='$id' and ksurat='1' ")or die(mysql_error());
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
    $tp9 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-09' and id_jns_surat='$id' and ksurat='1' ")or die(mysql_error());
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
    $tp10 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-10' and id_jns_surat='$id' and ksurat='1' ")or die(mysql_error());
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
    $tp11 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-11' and id_jns_surat='$id' and ksurat='1' ")or die(mysql_error());
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
    $tp12 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-12' and id_jns_surat='$id' and ksurat='1' ")or die(mysql_error());
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
    $tp13 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-13' and id_jns_surat='$id' and ksurat='1' ")or die(mysql_error());
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
    $tp14 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-14' and id_jns_surat='$id' and ksurat='1' ")or die(mysql_error());
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
    $tp15 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-15' and id_jns_surat='$id' and ksurat='1' ")or die(mysql_error());
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
    $tp16 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-16' and id_jns_surat='$id' and ksurat='1' ")or die(mysql_error());
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
    $tp17 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-17' and id_jns_surat='$id' and ksurat='1' ")or die(mysql_error());
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
    $tp18 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-18' and id_jns_surat='$id' and ksurat='1' ")or die(mysql_error());
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
    $tp19 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-19' and id_jns_surat='$id' and ksurat='1' ")or die(mysql_error());
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
    $tp20 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-20' and id_jns_surat='$id' and ksurat='1' ")or die(mysql_error());
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
    $tp21 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-21' and id_jns_surat='$id' and ksurat='1' ")or die(mysql_error());
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
    $tp22 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-22' and id_jns_surat='$id' and ksurat='1' ")or die(mysql_error());
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
    $tp23 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-23' and id_jns_surat='$id' and ksurat='1' ")or die(mysql_error());
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
    $tp24 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-24' and id_jns_surat='$id' and ksurat='1' ")or die(mysql_error());
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
    $tp25 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-25' and id_jns_surat='$id' and ksurat='1' ")or die(mysql_error());
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
    $tp26 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-26' and id_jns_surat='$id' and ksurat='1' ")or die(mysql_error());
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
    $tp27 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-27' and id_jns_surat='$id' and ksurat='1' ")or die(mysql_error());
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
    $tp28 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-28' and id_jns_surat='$id' and ksurat='1' ")or die(mysql_error());
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
    $tp29 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-29' and id_jns_surat='$id' and ksurat='1' ")or die(mysql_error());
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
    $tp30 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-30' and id_jns_surat='$id' and ksurat='1' ")or die(mysql_error());
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
    $tp31 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-31' and id_jns_surat='$id' and ksurat='1' ")or die(mysql_error());
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
  <?php
  }
  ?>                       
      <?php
                            if($cbulan=="02"){
                                $jtp = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-$cbulan-01' AND tanggal<='$ctahun-$cbulan-29' AND ksurat ='1'")or die(mysql_error());
                            }elseif ($cbulan=="01" || $cbulan=="03" || $cbulan=="05" || $cbulan=="07" || $cbulan=="08" || $cbulan=="10" || $cbulan=="12") {
                                $jtp = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-$cbulan-01' AND tanggal<='$ctahun-$cbulan-31' AND ksurat ='1'")or die(mysql_error());    
                            }elseif($cbulan=="04" || $cbulan=="06" || $cbulan=="09" || $cbulan=="11") {
                                $jtp = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-$cbulan-01' AND tanggal<='$ctahun-$cbulan-30' AND ksurat ='1'")or die(mysql_error());
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
      $jtp = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-01' AND ksurat ='1'")or die(mysql_error());
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
          $jtp2 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-02' AND ksurat ='1'")or die(mysql_error());
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
          $jtp3 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-03' AND ksurat ='1'")or die(mysql_error());
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
          $jtp4 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-04' AND ksurat ='1'")or die(mysql_error());
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
          $jtp5 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-05' AND ksurat ='1'")or die(mysql_error());
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
          $jtp6 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-06' AND ksurat ='1'")or die(mysql_error());
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
          $jtp7 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-07' AND ksurat ='1'")or die(mysql_error());
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
          $jtp8 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-08' AND ksurat ='1'")or die(mysql_error());
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
          $jtp9 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-09' AND ksurat ='1'")or die(mysql_error());
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
          $jtp10 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-10' AND ksurat ='1'")or die(mysql_error());
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
          $jtp11 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-11' AND ksurat ='1'")or die(mysql_error());
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
          $jtp12 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-12' AND ksurat ='1'")or die(mysql_error());
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
          $jtp13 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-13' AND ksurat ='1'")or die(mysql_error());
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
          $jtp14 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-14' AND ksurat ='1'")or die(mysql_error());
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
          $jtp15 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-15' AND ksurat ='1'")or die(mysql_error());
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
          $jtp16 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-16' AND ksurat ='1'")or die(mysql_error());
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
          $jtp17 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-17' AND ksurat ='1'")or die(mysql_error());
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
          $jtp18 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-18' AND ksurat ='1'")or die(mysql_error());
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
          $jtp19 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-19' AND ksurat ='1'")or die(mysql_error());
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
          $jtp20 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-20' AND ksurat ='1'")or die(mysql_error());
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
          $jtp21 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-21' AND ksurat ='1'")or die(mysql_error());
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
          $jtp22 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-22' AND ksurat ='1'")or die(mysql_error());
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
          $jtp23 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-23' AND ksurat ='1'")or die(mysql_error());
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
          $jtp24 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-24' AND ksurat ='1'")or die(mysql_error());
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
          $jtp25 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-25' AND ksurat ='1'")or die(mysql_error());
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
          $jtp26 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-26' AND ksurat ='1'")or die(mysql_error());
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
          $jtp27 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-27' AND ksurat ='1'")or die(mysql_error());
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
          $jtp28 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-28' AND ksurat ='1'")or die(mysql_error());
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
          $jtp29 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-29' AND ksurat ='1'")or die(mysql_error());
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
          $jtp30 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-30' AND ksurat ='1'")or die(mysql_error());
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
          $jtp31 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-31' AND ksurat ='1'")or die(mysql_error());
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
<!- per jenis surat masuk .............................................................................. ->
                 
       </section>


        <section class="panel">
            <header class="panel-heading">
                Laporan Harian Surat Keluar Bulan 
				<?php 
				if($cbulan==1){
				?>
				Januari
				<?php
				}elseif($cbulan==2){
				?>
				Februari
				<?php
				}elseif($cbulan==3){
				?>
				Maret
				<?php
				}elseif($cbulan==4){
				?>
				April
				<?php
				}elseif($cbulan==5){
				?>
				Mei
				<?php
				}elseif($cbulan==6){
				?>
				Juni
				<?php
				}elseif($cbulan==7){
				?>
				Juli
				<?php
				}elseif($cbulan==8){
				?>
				Agustus
				<?php
				}elseif($cbulan==9){
				?>
				September
				<?php
				}elseif($cbulan==10){
				?>
				Oktober
				<?php
				}elseif($cbulan==11){
				?>
				November
				<?php
				}elseif($cbulan==12){
				?>
				Desember
				<?php
				}?> 
				Tahun <?php echo $ctahun ?>
            </header>
<p>
<table border="1" width="100%" class="" bgcolor="">
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
    
    $sql = mysql_query("SELECT * from jenis_srt where id like '%$cjenis_srt%' order by id")or die(mysql_error());
    while($fetch1 = mysql_fetch_array($sql)) {  
	$id = $fetch1['id'];
	$jenis = $fetch1['jenis'];		
    ?>
	<tr>
		<td rowspan="2"><?php echo $jenis ?></td>
    <?php 
    $tp = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE left(tanggal,7) = '$thnbln' and id_jns_surat='$id' and ksurat='1'  and ksurat='2' ")or die(mysql_error());                      
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
    $tp1 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-01' and id_jns_surat='$id' and ksurat='2' ")or die(mysql_error());
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
    $tp2 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-02' and id_jns_surat='$id' and ksurat='2' ")or die(mysql_error());
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
    $tp3 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-03' and id_jns_surat='$id' and ksurat='2' ")or die(mysql_error());
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
    $tp4 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-04' and id_jns_surat='$id' and ksurat='2' ")or die(mysql_error());
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
    $tp5 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-05' and id_jns_surat='$id' and ksurat='2' ")or die(mysql_error());
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
    $tp6 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-06' and id_jns_surat='$id' and ksurat='2' ")or die(mysql_error());
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
    $tp7 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-07' and id_jns_surat='$id' and ksurat='2' ")or die(mysql_error());
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
    $tp8 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-08' and id_jns_surat='$id' and ksurat='2' ")or die(mysql_error());
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
    $tp9 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-09' and id_jns_surat='$id' and ksurat='2' ")or die(mysql_error());
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
    $tp10 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-10' and id_jns_surat='$id' and ksurat='2' ")or die(mysql_error());
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
    $tp11 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-11' and id_jns_surat='$id' and ksurat='2' ")or die(mysql_error());
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
    $tp12 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-12' and id_jns_surat='$id' and ksurat='2' ")or die(mysql_error());
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
    $tp13 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-13' and id_jns_surat='$id' and ksurat='2' ")or die(mysql_error());
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
    $tp14 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-14' and id_jns_surat='$id' and ksurat='2' ")or die(mysql_error());
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
    $tp15 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-15' and id_jns_surat='$id' and ksurat='2' ")or die(mysql_error());
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
    $tp16 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-16' and id_jns_surat='$id' and ksurat='2' ")or die(mysql_error());
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
    $tp17 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-17' and id_jns_surat='$id' and ksurat='2' ")or die(mysql_error());
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
    $tp18 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-18' and id_jns_surat='$id' and ksurat='2' ")or die(mysql_error());
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
    $tp19 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-19' and id_jns_surat='$id' and ksurat='2' ")or die(mysql_error());
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
    $tp20 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-20' and id_jns_surat='$id' and ksurat='2' ")or die(mysql_error());
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
    $tp21 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-21' and id_jns_surat='$id' and ksurat='2' ")or die(mysql_error());
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
    $tp22 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-22' and id_jns_surat='$id' and ksurat='2' ")or die(mysql_error());
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
    $tp23 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-23' and id_jns_surat='$id' and ksurat='2' ")or die(mysql_error());
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
    $tp24 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-24' and id_jns_surat='$id' and ksurat='2' ")or die(mysql_error());
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
    $tp25 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-25' and id_jns_surat='$id' and ksurat='2' ")or die(mysql_error());
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
    $tp26 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-26' and id_jns_surat='$id' and ksurat='2' ")or die(mysql_error());
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
    $tp27 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-27' and id_jns_surat='$id' and ksurat='2' ")or die(mysql_error());
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
    $tp28 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-28' and id_jns_surat='$id' and ksurat='2' ")or die(mysql_error());
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
    $tp29 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-29' and id_jns_surat='$id' and ksurat='2' ")or die(mysql_error());
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
    $tp30 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-30' and id_jns_surat='$id' and ksurat='2' ")or die(mysql_error());
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
    $tp31 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-31' and id_jns_surat='$id' and ksurat='2' ")or die(mysql_error());
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
  <?php
  }
  ?>                       
      <?php
                            if($cbulan=="02"){
                                $jtp = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-$cbulan-01' AND tanggal<='$ctahun-$cbulan-29' AND ksurat ='2'")or die(mysql_error());
                            }elseif ($cbulan=="01" || $cbulan=="03" || $cbulan=="05" || $cbulan=="07" || $cbulan=="08" || $cbulan=="10" || $cbulan=="12") {
                                $jtp = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-$cbulan-01' AND tanggal<='$ctahun-$cbulan-31' AND ksurat ='2'")or die(mysql_error());    
                            }elseif($cbulan=="04" || $cbulan=="06" || $cbulan=="09" || $cbulan=="11") {
                                $jtp = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal>='$ctahun-$cbulan-01' AND tanggal<='$ctahun-$cbulan-30' AND ksurat ='2'")or die(mysql_error());
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
      $jtp = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-01' AND ksurat ='2'")or die(mysql_error());
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
          $jtp2 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-02' AND ksurat ='2'")or die(mysql_error());
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
          $jtp3 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-03' AND ksurat ='2'")or die(mysql_error());
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
          $jtp4 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-04' AND ksurat ='2'")or die(mysql_error());
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
          $jtp5 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-05' AND ksurat ='2'")or die(mysql_error());
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
          $jtp6 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-06' AND ksurat ='2'")or die(mysql_error());
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
          $jtp7 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-07' AND ksurat ='2'")or die(mysql_error());
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
          $jtp8 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-08' AND ksurat ='2'")or die(mysql_error());
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
          $jtp9 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-09' AND ksurat ='2'")or die(mysql_error());
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
          $jtp10 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-10' AND ksurat ='2'")or die(mysql_error());
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
          $jtp11 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-11' AND ksurat ='2'")or die(mysql_error());
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
          $jtp12 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-12' AND ksurat ='2'")or die(mysql_error());
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
          $jtp13 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-13' AND ksurat ='2'")or die(mysql_error());
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
          $jtp14 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-14' AND ksurat ='2'")or die(mysql_error());
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
          $jtp15 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-15' AND ksurat ='2'")or die(mysql_error());
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
          $jtp16 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-16' AND ksurat ='2'")or die(mysql_error());
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
          $jtp17 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-17' AND ksurat ='2'")or die(mysql_error());
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
          $jtp18 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-18' AND ksurat ='2'")or die(mysql_error());
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
          $jtp19 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-19' AND ksurat ='2'")or die(mysql_error());
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
          $jtp20 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-20' AND ksurat ='2'")or die(mysql_error());
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
          $jtp21 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-21' AND ksurat ='2'")or die(mysql_error());
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
          $jtp22 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-22' AND ksurat ='2'")or die(mysql_error());
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
          $jtp23 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-23' AND ksurat ='2'")or die(mysql_error());
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
          $jtp24 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-24' AND ksurat ='2'")or die(mysql_error());
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
          $jtp25 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-25' AND ksurat ='2'")or die(mysql_error());
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
          $jtp26 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-26' AND ksurat ='2'")or die(mysql_error());
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
          $jtp27 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-27' AND ksurat ='2'")or die(mysql_error());
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
          $jtp28 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-28' AND ksurat ='2'")or die(mysql_error());
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
          $jtp29 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-29' AND ksurat ='2'")or die(mysql_error());
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
          $jtp30 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-30' AND ksurat ='2'")or die(mysql_error());
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
          $jtp31 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi WHERE tanggal='$thnbln-31' AND ksurat ='2'")or die(mysql_error());
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
<!- per jenis surat keluar .............................................................................. ->
                 
       </section>	   
	   
    </div>
</div>