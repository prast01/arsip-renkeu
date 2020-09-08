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
if ($act=='cari'){
?>
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
    <td rowspan="2"><b>Jenis Surat</b></td>
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

  $sql = mysql_query("SELECT * from jns_surat order by ksurat")or die(mysql_error());
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
?>
<?php session_start(); ?>

        <?php 
          $jtp = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>= '2016-01-01'and tanggal<= '2016-12-31'")or die(mysql_error());
          $r = mysql_fetch_array($jtp);
          $jtglp1 = $r['jmlkasus'];
       
          $jtp2 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>= '2017-01-01'and tanggal<= '2017-12-31'")or die(mysql_error());
          $r = mysql_fetch_array($jtp2);
          $jtglp2 = $r['jmlkasus'];
          
          $jtp3 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>= '2018-01-01'and tanggal<= '2018-12-31'")or die(mysql_error());
          $r = mysql_fetch_array($jtp3);
          $jtglp3 = $r['jmlkasus'];
          
          $jtp4 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>= '2019-01-01'and tanggal<= '2019-12-31'")or die(mysql_error());
          $r = mysql_fetch_array($jtp4);
          $jtglp4 = $r['jmlkasus'];
          
          $jtp5 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>= '2020-01-01'and tanggal<= '2020-12-31'")or die(mysql_error());
          $r = mysql_fetch_array($jtp5);
          $jtglp5 = $r['jmlkasus'];
          
    

    //ksurat=1                           
    $tp1 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>='2016-01-01' AND tanggal<='2016-12-31' and ksurat='1'")or die(mysql_error());
    $r = mysql_fetch_array($tp1);
    $tglp11 = $r['jmlkasus'];
    
    $tp2 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>='2017-01-01' AND tanggal<='2017-12-31' and ksurat='1'")or die(mysql_error());
    $r = mysql_fetch_array($tp2);
    $tglp21 = $r['jmlkasus'];
    
    $tp3 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>='2018-01-01' AND tanggal<='2018-12-31' and ksurat='1'")or die(mysql_error());
    $r = mysql_fetch_array($tp3);
    $tglp31 = $r['jmlkasus'];
   
    $tp4 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>='2019-01-01' AND tanggal<='2019-12-31' and ksurat='1'")or die(mysql_error());
    $r = mysql_fetch_array($tp4);
    $tglp41 = $r['jmlkasus'];
    
    $tp5 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>='2020-01-01' AND tanggal<='2020-12-31' and ksurat='1'")or die(mysql_error());
    $r = mysql_fetch_array($tp5);
    $tglp51 = $r['jmlkasus'];
    
      
    //ksurat=2
    $tp1 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>='2016-01-01' AND tanggal<='2016-12-31' and ksurat='2'")or die(mysql_error());
    $r = mysql_fetch_array($tp1);
    $tglp12 = $r['jmlkasus'];
    
    $tp2 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>='2017-01-01' AND tanggal<='2017-12-31' and ksurat='2'")or die(mysql_error());
    $r = mysql_fetch_array($tp2);
    $tglp22 = $r['jmlkasus'];
    
    $tp3 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>='2018-01-01' AND tanggal<='2018-12-31' and ksurat='2'")or die(mysql_error());
    $r = mysql_fetch_array($tp3);
    $tglp32 = $r['jmlkasus'];
   
    $tp4 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>='2019-01-01' AND tanggal<='2019-12-31' and ksurat='2'")or die(mysql_error());
    $r = mysql_fetch_array($tp4);
    $tglp42 = $r['jmlkasus'];
    
    $tp5 = mysql_query("SELECT count(id) as jmlkasus FROM transaksi  WHERE tanggal>='2020-01-01' AND tanggal<='2020-12-31' and ksurat='3'")or die(mysql_error());
    $r = mysql_fetch_array($tp5);
    $tglp52 = $r['jmlkasus'];
                        
                            $drop = mysql_query("DROP TABLE IF EXISTS grafik_arsip")or die(mysql_error());
							
                            $create = mysql_query("CREATE TABLE IF NOT EXISTS grafik_arsip (
                            `tahun` char(20) NOT NULL,
                            `surat_masuk` int(4) NOT NULL,
                            `surat_keluar` int(4) NOT NULL,
							`jml_surat` int(4) NOT NULL
                          )")or die(mysql_error());
						  
                            
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('2016','$tglp11','$tglp12','$jtglp1') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('2017','$tglp21','$tglp22','$jtglp2') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('2018','$tglp31','$tglp32','$jtglp3') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('2019','$tglp41','$tglp42','$jtglp4') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('2020','$tglp51','$tglp52','$jtglp5') ") or die(mysql_error());                     
                            
                        
                        $grafik_arsip 	= mysql_query("SELECT * FROM grafik_arsip")or die(mysql_error());
                           
                        
                        while($r = mysql_fetch_array($grafik_arsip)){
                        $tahun = $r['tahun'];
                        $jumlah1 = $r['surat_masuk'];
                        $jumlah2 = $r['surat_keluar'];

                        $jmlsurat = $r['jml_surat'];
                        $jumlah=$jumlah1 / $jmlsurat * 100;

    					$grafik1[] = array($tahun, intval($jumlah1));
                        $grafik2[] = array($tahun, intval($jumlah2));

						}

						$data_grafik1 = json_encode($grafik1);
                        $data_grafik2 = json_encode($grafik2);

                           
					?>

<div id="container" style="height:400px"></div>
<script>
$(document).ready(function(){
$(function () {
    var chart = Highcharts.chart('container', {
        chart: {
            type: 'column'
        },
        xAxis: {
            categories: ['2016', '2017', '2018', '2019', '2020']
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
            text: 'Grafik Tahunan',
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
</body>
</html>