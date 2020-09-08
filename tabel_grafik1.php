<?php
include 'koneksi.php';
error_reporting(0);
    $cjnssurat = isset($_REQUEST['cjnssurat']) ? $_REQUEST['cjnssurat'] : '';
    $ctahun = isset($_REQUEST['ctahun']) ? $_REQUEST['ctahun'] : '';
    $a = mysql_query("SELECT nm_surat,ksurat FROM jns_surat WHERE ksurat='$cjnssurat'")or die(mysql_error());
    $r = mysql_fetch_array($a);
    $nm_surat= $r['nm_surat'];
    $ksurat1=$r['ksurat'];
?>
<?php session_start(); ?>

<?php 		 
					 
						$no = 1;
                        if ($cjnssurat=='1' || $cjnssurat=='2' || $cjnssurat=='3'){
                        $query  = mysql_query("SELECT count(id_transaksi)as jmlsurat FROM transaksi1 where left(tanggal,4) like '%$ctahun%' ")or die(mysql_error());                         
                        } else {
                        $query  = mysql_query("SELECT count(id_transaksi)as jmlsurat FROM transaksi1 where ksurat like '%$cjnssurat%' AND left(tanggal,4) like '%$ctahun%' ")or die(mysql_error());
                        }
						$r   = mysql_fetch_array($query);
						$jmlsurat = $r['jmlsurat'];							
    
						if ($cjnssurat=='1' || $cjnssurat==''){
                            $query2     = mysql_query("SELECT count(id_transaksi)as jmldata FROM transaksi1 where ksurat ='1' AND left(tanggal,4) like '%$ctahun%'")or die(mysql_error());
                            $r   = mysql_fetch_array($query2);
                            $jmldata = $r['jmldata'];
                            $s_masuk = $jmldata;
                        }if ($cjnssurat=='2' || $cjnssurat==''){
                            $query2     = mysql_query("SELECT count(id_transaksi)as jmldata FROM transaksi1 where ksurat ='2' AND left(tanggal,4) like '%$ctahun%'")or die(mysql_error());
                            $r   = mysql_fetch_array($query2);
                            $jmldata = $r['jmldata'];
							$s_keluar = $jmldata;
                        }if ($cjnssurat=='3' || $cjnssurat==''){
                            $query2     = mysql_query("SELECT count(id_transaksi)as jmldata FROM transaksi1 where ksurat ='3' AND left(tanggal,4) like '%$ctahun%'")or die(mysql_error());
                            $r   = mysql_fetch_array($query2);
                            $jmldata = $r['jmldata'];
							$periksa_h = $jmldata;
                            }
                            $drop = mysql_query("DROP TABLE IF EXISTS arsip.grafik_arsip")or die(mysql_error());
							
                            $create = mysql_query("CREATE TABLE IF NOT EXISTS arsip.grafik_arsip (
                            `surat` char(20) NOT NULL,
                           `jumlah` int(4) NOT NULL
                          )")or die(mysql_error());
						  
                            if ($cjnssurat=='1'){
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('Surat Masuk','$s_masuk') ") or die(mysql_error());
                            } elseif ($cjnssurat=='2'){
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('Surat Keluar','$s_keluar') ") or die(mysql_error());
                            } elseif ($cjnssurat=='3') {
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('Hasil Pemeriksaan','$periksa_h') ") or die(mysql_error());
                            } else {
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('Surat Masuk','$s_masuk') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('Surat Keluar','$s_keluar') ") or die(mysql_error());
                            $i = mysql_query("INSERT INTO grafik_arsip VALUES ('Hasil Pemeriksaan','$periksa_h') ") or die(mysql_error());  
                            }
                        if ($cjnssurat=='1'){
                        $grafik_arsip 	= mysql_query("SELECT * FROM grafik_arsip where surat='Surat Masuk'")or die(mysql_error());
                        } elseif ($cjnssurat=='2'){
                        $grafik_arsip   = mysql_query("SELECT * FROM grafik_arsip where surat='Surat Keluar'")or die(mysql_error());
                        } elseif ($cjnssurat=='3'){
                        $grafik_arsip   = mysql_query("SELECT * FROM grafik_arsip where surat='Hasil Pemeriksaan'")or die(mysql_error());    
                        } else {
                        $grafik_arsip   = mysql_query("SELECT * FROM grafik_arsip order by jumlah ")or die(mysql_error());    
                        }
                        while($r = mysql_fetch_array($grafik_arsip)){
                        $surat = $r['surat'];
                        $jumlah1 = $r['jumlah'];
                        $jumlah=$jumlah1 / $jmlsurat * 100;
    					$grafik[] = array($surat, intval($jumlah));
						}

						$data_grafik = json_encode($grafik);
                           
					?>
		  
  </div>
  </div><!-- /content-panel -->
</div>
</div><!-- /col-lg-4 -->	

<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<style type="text/css">
${demo.css}
		</style>
		<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Grafik <?php echo $nm_surat ?> Tahun <?php echo $ctahun ?>'
        },
        subtitle: {
            text: ': <a href="http://en.wikipedia.org/wiki/List_of_cities_proper_by_population"></a>'
        },
        xAxis: {
            type: 'category',
            labels: {
                rotation: -45,
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Jumlah (%)'
            }
        },
        legend: {
            enabled: false
        },
        tooltip: {
            pointFormat: 'Persentase: <b>{point.y:.1f} %</b>'
        },
        series: [{
            name: 'Population',
            data:<?=$data_grafik?>,
            dataLabels: {
                enabled: true,
                rotation: -90,
                color: '#FFFFFF',
                align: 'right',
                format: '{point.y:.1f}', // one decimal
                y: 10, // 10 pixels down from the top
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        }]
    });
});
		</script>
	</head>
	<body>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<div id="container" style="min-width: 300px; height: 80%; margin: 0 auto"></div>

	</body>
</html>

 </form>
	
