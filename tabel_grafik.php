<html>
<head>
    <title>Demo</title>
</head>
<body>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 
<script src="https://code.highcharts.com/highcharts.js"></script>
<?php
include 'koneksi.php';
error_reporting(0);
    $ctahun = isset($_REQUEST['ctahun']) ? $_REQUEST['ctahun'] : '';
?>
<?php session_start(); ?>

        <?php 		 
          $jtp1 = mysql_query("SELECT count(id_transaksi) as jmlkasus FROM transaksi1 WHERE tanggal>='$ctahun-01-01' AND tanggal<='$ctahun-01-31'")or die(mysql_error());
          $r = mysql_fetch_array($jtp1);
          $jtglp1 = $r['jmlkasus'];
          ?>
      
          <?php 
          $jtp2 = mysql_query("SELECT count(id_transaksi) as jmlkasus FROM transaksi1 WHERE tanggal>='$ctahun-02-01' AND tanggal<='$ctahun-02-28'")or die(mysql_error());
          $r = mysql_fetch_array($jtp2);
          $jtglp2 = $r['jmlkasus'];
          ?>
      
          <?php 
          $jtp3 = mysql_query("SELECT count(id_transaksi) as jmlkasus FROM transaksi1 WHERE tanggal>='$ctahun-03-01' AND tanggal<='$ctahun-03-31'")or die(mysql_error());
          $r = mysql_fetch_array($jtp3);
          $jtglp3 = $r['jmlkasus'];
          ?>
      
          <?php 
          $jtp4 = mysql_query("SELECT count(id_transaksi) as jmlkasus FROM transaksi1 WHERE tanggal>='$ctahun-04-01' AND tanggal<='$ctahun-04-30'")or die(mysql_error());
          $r = mysql_fetch_array($jtp4);
          $jtglp4 = $r['jmlkasus'];
          ?>

          <?php 
          $jtp5 = mysql_query("SELECT count(id_transaksi) as jmlkasus FROM transaksi1 WHERE tanggal>='$ctahun-05-01' AND tanggal<='$ctahun-05-31'")or die(mysql_error());
          $r = mysql_fetch_array($jtp5);
          $jtglp5 = $r['jmlkasus'];
          ?>
      
          <?php 
          $jtp6 = mysql_query("SELECT count(id_transaksi) as jmlkasus FROM transaksi1 WHERE tanggal>='$ctahun-06-01' AND tanggal<='$ctahun-06-30'")or die(mysql_error());
          $r = mysql_fetch_array($jtp6);
          $jtglp6 = $r['jmlkasus'];
          ?>
      
          <?php 
          $jtp7 = mysql_query("SELECT count(id_transaksi) as jmlkasus FROM transaksi1 WHERE tanggal>='$ctahun-07-01' AND tanggal<='$ctahun-07-31'")or die(mysql_error());
          $r = mysql_fetch_array($jtp7);
          $jtglp7 = $r['jmlkasus'];
          ?>
      
          <?php 
          $jtp8 = mysql_query("SELECT count(id_transaksi) as jmlkasus FROM transaksi1 WHERE tanggal>='$ctahun-08-01' AND tanggal<='$ctahun-08-31'")or die(mysql_error());
          $r = mysql_fetch_array($jtp8);
          $jtglp8 = $r['jmlkasus'];
          ?>

          <?php 
          $jtp9 = mysql_query("SELECT count(id_transaksi) as jmlkasus FROM transaksi1 WHERE tanggal>='$ctahun-09-01' AND tanggal<='$ctahun-09-30'")or die(mysql_error());
          $r = mysql_fetch_array($jtp9);
          $jtglp9 = $r['jmlkasus'];
          ?>
      
          <?php 
          $jtp10 = mysql_query("SELECT count(id_transaksi) as jmlkasus FROM transaksi1 WHERE tanggal>='$ctahun-10-01' AND tanggal<='$ctahun-10-31'")or die(mysql_error());
          $r = mysql_fetch_array($jtp10);
          $jtglp10 = $r['jmlkasus'];
          ?>
      
          <?php 
          $jtp11 = mysql_query("SELECT count(id_transaksi) as jmlkasus FROM transaksi1 WHERE tanggal>='$ctahun-11-01' AND tanggal<='$ctahun-11-30'")or die(mysql_error());
          $r = mysql_fetch_array($jtp11);
          $jtglp11 = $r['jmlkasus'];
          ?>
      
          <?php 
          $jtp12 = mysql_query("SELECT count(id_transaksi) as jmlkasus FROM transaksi1 WHERE tanggal>='$ctahun-12-01' AND tanggal<='$ctahun-12-31'")or die(mysql_error());
          $r = mysql_fetch_array($jtp12);
          $jtglp12 = $r['jmlkasus'];
    

                        //ksurat=1
                            $query1     = mysql_query("SELECT count(id_transaksi) as jmldata FROM transaksi1 WHERE tanggal>='$ctahun-01-01' AND tanggal<='$ctahun-01-31' AND ksurat='1'")or die(mysql_error());
                            $r   = mysql_fetch_array($query1);
                            $jmldata1 = $r['jmldata'];
                            $jan1 = $jmldata1;

                            $query2     = mysql_query("SELECT count(id_transaksi) as jmldata FROM transaksi1 WHERE tanggal>='$ctahun-02-01' AND tanggal<='$ctahun-02-28' AND ksurat='1'")or die(mysql_error());
                            $r   = mysql_fetch_array($query2);
                            $jmldata2 = $r['jmldata'];
                            $feb1 = $jmldata2;

                            $query3     = mysql_query("SELECT count(id_transaksi) as jmldata FROM transaksi1 WHERE tanggal>='$ctahun-03-01' AND tanggal<='$ctahun-03-31' AND ksurat='1'")or die(mysql_error());
                            $r   = mysql_fetch_array($query3);
                            $jmldata3 = $r['jmldata'];
                            $mar1 = $jmldata3;

                            $query4     = mysql_query("SELECT count(id_transaksi) as jmldata FROM transaksi1 WHERE tanggal>='$ctahun-04-01' AND tanggal<='$ctahun-04-30' AND ksurat='1'")or die(mysql_error());
                            $r   = mysql_fetch_array($query4);
                            $jmldata4 = $r['jmldata'];
                            $apr1 = $jmldata4;

                            $query5     = mysql_query("SELECT count(id_transaksi) as jmldata FROM transaksi1 WHERE tanggal>='$ctahun-05-01' AND tanggal<='$ctahun-05-31' AND ksurat='1'")or die(mysql_error());
                            $r   = mysql_fetch_array($query5);
                            $jmldata5 = $r['jmldata'];
                            $mei1 = $jmldata5;

                            $query6     = mysql_query("SELECT count(id_transaksi) as jmldata FROM transaksi1 WHERE tanggal>='$ctahun-06-01' AND tanggal<='$ctahun-06-30' AND ksurat='1'")or die(mysql_error());
                            $r   = mysql_fetch_array($query6);
                            $jmldata6 = $r['jmldata'];
                            $jun1 = $jmldata6;

                            $query7     = mysql_query("SELECT count(id_transaksi) as jmldata FROM transaksi1 WHERE tanggal>='$ctahun-07-01' AND tanggal<='$ctahun-07-31' AND ksurat='1'")or die(mysql_error());
                            $r   = mysql_fetch_array($query7);
                            $jmldata7 = $r['jmldata'];
                            $jul1 = $jmldata7;

                            $query8     = mysql_query("SELECT count(id_transaksi) as jmldata FROM transaksi1 WHERE tanggal>='$ctahun-08-01' AND tanggal<='$ctahun-08-31' AND ksurat='1'")or die(mysql_error());
                            $r   = mysql_fetch_array($query8);
                            $jmldata8 = $r['jmldata'];
                            $agu1 = $jmldata8;

                            $query9     = mysql_query("SELECT count(id_transaksi) as jmldata FROM transaksi1 WHERE tanggal>='$ctahun-09-01' AND tanggal<='$ctahun-09-30' AND ksurat='1'")or die(mysql_error());
                            $r   = mysql_fetch_array($query9);
                            $jmldata9 = $r['jmldata'];
                            $sep1 = $jmldata9;

                            $query10     = mysql_query("SELECT count(id_transaksi) as jmldata FROM transaksi1 WHERE tanggal>='$ctahun-10-01' AND tanggal<='$ctahun-10-31' AND ksurat='1'")or die(mysql_error());
                            $r   = mysql_fetch_array($query10);
                            $jmldata10 = $r['jmldata'];
                            $okt1 = $jmldata10;

                            $query11     = mysql_query("SELECT count(id_transaksi) as jmldata FROM transaksi1 WHERE tanggal>='$ctahun-11-01' AND tanggal<='$ctahun-11-30' AND ksurat='1'")or die(mysql_error());
                            $r   = mysql_fetch_array($query11);
                            $jmldata11 = $r['jmldata'];
                            $nov1 = $jmldata11;

                            $query12     = mysql_query("SELECT count(id_transaksi) as jmldata FROM transaksi1 WHERE tanggal>='$ctahun-12-01' AND tanggal<='$ctahun-12-31' AND ksurat='1'")or die(mysql_error());
                            $r   = mysql_fetch_array($query12);
                            $jmldata12 = $r['jmldata'];
                            $des1 = $jmldata12;

                            //ksurat=2
                            $query1     = mysql_query("SELECT count(id_transaksi) as jmldata FROM transaksi1 WHERE tanggal>='$ctahun-01-01' AND tanggal<='$ctahun-01-31' AND ksurat='2'")or die(mysql_error());
                            $r   = mysql_fetch_array($query1);
                            $jmldata1 = $r['jmldata'];
                            $jan2 = $jmldata1;

                            $query2     = mysql_query("SELECT count(id_transaksi) as jmldata FROM transaksi1 WHERE tanggal>='$ctahun-02-01' AND tanggal<='$ctahun-02-28' AND ksurat='2'")or die(mysql_error());
                            $r   = mysql_fetch_array($query2);
                            $jmldata2 = $r['jmldata'];
                            $feb2 = $jmldata2;

                            $query3     = mysql_query("SELECT count(id_transaksi) as jmldata FROM transaksi1 WHERE tanggal>='$ctahun-03-01' AND tanggal<='$ctahun-03-31' AND ksurat='2'")or die(mysql_error());
                            $r   = mysql_fetch_array($query3);
                            $jmldata3 = $r['jmldata'];
                            $mar2 = $jmldata3;

                            $query4     = mysql_query("SELECT count(id_transaksi) as jmldata FROM transaksi1 WHERE tanggal>='$ctahun-04-01' AND tanggal<='$ctahun-04-30' AND ksurat='2'")or die(mysql_error());
                            $r   = mysql_fetch_array($query4);
                            $jmldata4 = $r['jmldata'];
                            $apr2 = $jmldata4;

                            $query5     = mysql_query("SELECT count(id_transaksi) as jmldata FROM transaksi1 WHERE tanggal>='$ctahun-05-01' AND tanggal<='$ctahun-05-31' AND ksurat='2'")or die(mysql_error());
                            $r   = mysql_fetch_array($query5);
                            $jmldata5 = $r['jmldata'];
                            $mei2 = $jmldata5;

                            $query6     = mysql_query("SELECT count(id_transaksi) as jmldata FROM transaksi1 WHERE tanggal>='$ctahun-06-01' AND tanggal<='$ctahun-06-30' AND ksurat='2'")or die(mysql_error());
                            $r   = mysql_fetch_array($query6);
                            $jmldata6 = $r['jmldata'];
                            $jun2 = $jmldata6;

                            $query7     = mysql_query("SELECT count(id_transaksi) as jmldata FROM transaksi1 WHERE tanggal>='$ctahun-07-01' AND tanggal<='$ctahun-07-31' AND ksurat='2'")or die(mysql_error());
                            $r   = mysql_fetch_array($query7);
                            $jmldata7 = $r['jmldata'];
                            $jul2 = $jmldata7;

                            $query8     = mysql_query("SELECT count(id_transaksi) as jmldata FROM transaksi1 WHERE tanggal>='$ctahun-08-01' AND tanggal<='$ctahun-08-31' AND ksurat='2'")or die(mysql_error());
                            $r   = mysql_fetch_array($query8);
                            $jmldata8 = $r['jmldata'];
                            $agu2 = $jmldata8;

                            $query9     = mysql_query("SELECT count(id_transaksi) as jmldata FROM transaksi1 WHERE tanggal>='$ctahun-09-01' AND tanggal<='$ctahun-09-30' AND ksurat='2'")or die(mysql_error());
                            $r   = mysql_fetch_array($query9);
                            $jmldata9 = $r['jmldata'];
                            $sep2 = $jmldata9;

                            $query10     = mysql_query("SELECT count(id_transaksi) as jmldata FROM transaksi1 WHERE tanggal>='$ctahun-10-01' AND tanggal<='$ctahun-10-31' AND ksurat='2'")or die(mysql_error());
                            $r   = mysql_fetch_array($query10);
                            $jmldata10 = $r['jmldata'];
                            $okt2 = $jmldata10;

                            $query11     = mysql_query("SELECT count(id_transaksi) as jmldata FROM transaksi1 WHERE tanggal>='$ctahun-11-01' AND tanggal<='$ctahun-11-30' AND ksurat='2'")or die(mysql_error());
                            $r   = mysql_fetch_array($query11);
                            $jmldata11 = $r['jmldata'];
                            $nov2 = $jmldata11;

                            $query12     = mysql_query("SELECT count(id_transaksi) as jmldata FROM transaksi1 WHERE tanggal>='$ctahun-12-01' AND tanggal<='$ctahun-12-31' AND ksurat='2'")or die(mysql_error());
                            $r   = mysql_fetch_array($query12);
                            $jmldata12 = $r['jmldata'];
                            $des2 = $jmldata12;

                            //ksurat=3
                            $query1     = mysql_query("SELECT count(id_transaksi) as jmldata FROM transaksi1 WHERE tanggal>='$ctahun-01-01' AND tanggal<='$ctahun-01-31' AND ksurat='3'")or die(mysql_error());
                            $r   = mysql_fetch_array($query1);
                            $jmldata1 = $r['jmldata'];
                            $jan3 = $jmldata1;

                            $query2     = mysql_query("SELECT count(id_transaksi) as jmldata FROM transaksi1 WHERE tanggal>='$ctahun-02-01' AND tanggal<='$ctahun-02-28' AND ksurat='3'")or die(mysql_error());
                            $r   = mysql_fetch_array($query2);
                            $jmldata2 = $r['jmldata'];
                            $feb3 = $jmldata2;

                            $query3     = mysql_query("SELECT count(id_transaksi) as jmldata FROM transaksi1 WHERE tanggal>='$ctahun-03-01' AND tanggal<='$ctahun-03-31' AND ksurat='3'")or die(mysql_error());
                            $r   = mysql_fetch_array($query3);
                            $jmldata3 = $r['jmldata'];
                            $mar3 = $jmldata3;

                            $query4     = mysql_query("SELECT count(id_transaksi) as jmldata FROM transaksi1 WHERE tanggal>='$ctahun-04-01' AND tanggal<='$ctahun-04-30' AND ksurat='3'")or die(mysql_error());
                            $r   = mysql_fetch_array($query4);
                            $jmldata4 = $r['jmldata'];
                            $apr3 = $jmldata4;

                            $query5     = mysql_query("SELECT count(id_transaksi) as jmldata FROM transaksi1 WHERE tanggal>='$ctahun-05-01' AND tanggal<='$ctahun-05-31' AND ksurat='3'")or die(mysql_error());
                            $r   = mysql_fetch_array($query5);
                            $jmldata5 = $r['jmldata'];
                            $mei3 = $jmldata5;

                            $query6     = mysql_query("SELECT count(id_transaksi) as jmldata FROM transaksi1 WHERE tanggal>='$ctahun-06-01' AND tanggal<='$ctahun-06-30' AND ksurat='3'")or die(mysql_error());
                            $r   = mysql_fetch_array($query6);
                            $jmldata6 = $r['jmldata'];
                            $jun3 = $jmldata6;

                            $query7     = mysql_query("SELECT count(id_transaksi) as jmldata FROM transaksi1 WHERE tanggal>='$ctahun-07-01' AND tanggal<='$ctahun-07-31' AND ksurat='3'")or die(mysql_error());
                            $r   = mysql_fetch_array($query7);
                            $jmldata7 = $r['jmldata'];
                            $jul3 = $jmldata7;

                            $query8     = mysql_query("SELECT count(id_transaksi) as jmldata FROM transaksi1 WHERE tanggal>='$ctahun-08-01' AND tanggal<='$ctahun-08-31' AND ksurat='3'")or die(mysql_error());
                            $r   = mysql_fetch_array($query8);
                            $jmldata8 = $r['jmldata'];
                            $agu3 = $jmldata8;

                            $query9     = mysql_query("SELECT count(id_transaksi) as jmldata FROM transaksi1 WHERE tanggal>='$ctahun-09-01' AND tanggal<='$ctahun-09-30' AND ksurat='3'")or die(mysql_error());
                            $r   = mysql_fetch_array($query9);
                            $jmldata9 = $r['jmldata'];
                            $sep3 = $jmldata9;

                            $query10     = mysql_query("SELECT count(id_transaksi) as jmldata FROM transaksi1 WHERE tanggal>='$ctahun-10-01' AND tanggal<='$ctahun-10-31' AND ksurat='3'")or die(mysql_error());
                            $r   = mysql_fetch_array($query10);
                            $jmldata10 = $r['jmldata'];
                            $okt3 = $jmldata10;

                            $query11     = mysql_query("SELECT count(id_transaksi) as jmldata FROM transaksi1 WHERE tanggal>='$ctahun-11-01' AND tanggal<='$ctahun-11-30' AND ksurat='3'")or die(mysql_error());
                            $r   = mysql_fetch_array($query11);
                            $jmldata11 = $r['jmldata'];
                            $nov3 = $jmldata11;

                            $query12     = mysql_query("SELECT count(id_transaksi) as jmldata FROM transaksi1 WHERE tanggal>='$ctahun-12-01' AND tanggal<='$ctahun-12-31' AND ksurat='3'")or die(mysql_error());
                            $r   = mysql_fetch_array($query12);
                            $jmldata12 = $r['jmldata'];
                            $des3 = $jmldata12;

                        
                            $drop = mysql_query("DROP TABLE IF EXISTS arsip.grafik_arsip")or die(mysql_error());
							
                            $create = mysql_query("CREATE TABLE IF NOT EXISTS arsip.grafik_arsip (
                            `bulan` char(20) NOT NULL,
                            `surat_masuk` int(4) NOT NULL,
                            `surat_keluar` int(4) NOT NULL,
                            `hasil_pemeriksaan` int(4) NOT NULL,
							`jml_surat` int(4) NOT NULL
                          )")or die(mysql_error());
						  
                            
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('Januari','$jan1','$jan2','$jan3','$jtglp1') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('Februari','$feb1','$feb2','$feb3','$jtglp2') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('Maret','$mar1','$mar2','$mar3','$jtglp3') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('April','$apr1','$apr2','$apr3','$jtglp4') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('Mei','$mei1','$mei2','$mei3','$jtglp5') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('Juni','$jun1','$jun2','$jun3','$jtglp6') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('Juli','$jul1','$jul2','$jul3','$jtglp7') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('Agustus','$agu1','$agu2','$agu3','$jtglp8') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('September','$sep1','$sep2','$sep3','$jtglp9') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('Oktober','$okt1','$okt2','$okt3','$jtglp10') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('November','$nov1','$nov2','$nov3','$jtglp11') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('Desember','$des1','$des2','$des3','$jtglp12') ") or die(mysql_error());
                            
                        
                        $grafik_arsip 	= mysql_query("SELECT * FROM grafik_arsip")or die(mysql_error());
                           
                        
                        while($r = mysql_fetch_array($grafik_arsip)){
                        $bulan = $r['bulan'];
                        $jumlah1 = $r['surat_masuk'];
                        $jumlah2 = $r['surat_keluar'];
                        $jumlah3 = $r['hasil_pemeriksaan'];

                        $jmlsurat = $r['jml_surat'];
                        $jumlah=$jumlah1 / $jmlsurat * 100;

    					$grafik1[] = array($bulan, intval($jumlah1));
                        $grafik2[] = array($bulan, intval($jumlah2));
                        $grafik3[] = array($bulan, intval($jumlah3));

						}

						$data_grafik1 = json_encode($grafik1);
                        $data_grafik2 = json_encode($grafik2);
                        $data_grafik3 = json_encode($grafik3);

                           
					?>
<style>
body {
    font-family: Arial, Verdana, sans-serif;
}
</style>

<div id="container" style="height:400px"></div>
<script>
$(document).ready(function(){
$(function () {
	var nm_surat3 = '<?php echo $nm_surat3 ?>'
    var chart = Highcharts.chart('container', {
        chart: {
            type: 'column'
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        plotOptions: {
            series: {
                allowPointSelect: true
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
        },
        {
            data: <?=$data_grafik3?>,
            name: "Hasil Pemeriksaan"
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
</body>
</html>