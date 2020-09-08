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
    $cnoarsip = isset($_GET['cnoarsip']) ? $_GET['cnoarsip'] : '';
    $jns_surat = isset($_GET['jns_surat']) ? $_GET['jns_surat'] : '';
    $datepicker = isset($_GET['datepicker']) ? $_GET['datepicker'] : '';
    $datepicker1 = isset($_GET['datepicker1']) ? $_GET['datepicker1'] : '';
    $datepicker2 = isset($_GET['datepicker2']) ? $_GET['datepicker2'] : '';
    $casalsurat = isset($_GET['casalsurat']) ? $_GET['casalsurat'] : '';
    $ctujuan = isset($_GET['ctujuan']) ? $_GET['ctujuan'] : '';
    $cnomor = isset($_GET['cnomor']) ? $_GET['cnomor'] : '';
    $csifat = isset($_GET['csifat']) ? $_GET['csifat'] : '';  
    $clampiran = isset($_GET['clampiran']) ? $_GET['clampiran'] : '';
    $cperihal = isset($_GET['cperihal']) ? $_GET['cperihal'] : '';
    $jns_pemeriksaan = isset($_GET['jns_pemeriksaan']) ? $_GET['jns_pemeriksaan'] : '';
    $id_jns_surat = isset($_GET['id_jns_surat']) ? $_GET['id_jns_surat'] : '';
?>
<div class="row">
    <div class="col-md-12">
        <section class="panel">
            <header class="panel-heading">
            <?php if($jns_surat=="1"){ ?>
                DAFTAR ARSIP SURAT MASUK
            <?php } if($jns_surat=="2"){ ?> 
                DAFTAR ARSIP SURAT KELUAR
            <?php } if($jns_surat==""){ ?>
                DAFTAR ARSIP
            <?php } ?>   

            </header>
                    <br>
                    <table border="1" width="100%" class="" bgcolor="">
                        <thead>
                            <tr bgcolor="">
                                <td>No</td>
								<td>No. Arsip</td>
                                <td>Jenis Surat</td>
                                <td>Tanggal</td>
                                <?php if($jns_surat=="1" || $jns_surat==""){ ?>
								<td>Tanggal Terima</td>
                                <td>Asal Surat</td>
                                <?php } if($jns_surat=="2" || $jns_surat==""){ ?>
                                <td>Tujuan Surat</td>
                                <?php } ?>
                                <td>Nomor</td>
                                <?php if($jns_surat=="1" || $jns_surat=="2" || $jns_surat==""){ ?>
                                <td>Sifat</td>
                                <?php } ?>
                                <td>Lampiran</td>
                                <td>Perihal</td>
                            </tr>
                        </thead>
					<?php
						$no=1;   
						$rw = mysql_query("SELECT * from transaksi where notrans like '%$cnoarsip%' AND tanggal >='$datepicker1' AND tanggal <='$datepicker2' AND id_jns_surat like '%$id_jns_surat%' and ksurat like '%$jns_surat%' AND asalsurat like '%$casalsurat%' AND tujuan like '%$ctujuan%' AND nomor like '%$cnomor%' AND sifat like '%$csifat%' AND jns_pemeriksaan like '%$jns_pemeriksaan%' AND lampiran like '%$clampiran%' AND perihal like '%$cperihal%' ORDER BY tanggal desc, ksurat")or die(mysql_error());
                        while($r = mysql_fetch_array($rw)){
						$notrans = $r['notrans'];
                        $ksurat = $r['ksurat'];
                        $tanggal = $r['tanggal'];
						$tglterima = $r['tglterima'];
                        $asalsurat = $r['asalsurat'];
                        $tujuan = $r['tujuan'];
                        $nomor = $r['nomor'];
                        $sifat = $r['sifat'];
                        $lampiran = $r['lampiran'];
                        $perihal = $r['perihal'];
                        $jns_pemeriksaan = $r['jns_pemeriksaan'];
                        ?>
                        <tbody>
                        <tr bgcolor="">
                            <td><?php echo $no ?></td>
							<td><?php echo $notrans ?></td>
                            <?php 
                            $sql1 = mysql_query("SELECT * from jns_surat where ksurat='$ksurat'")or die(mysql_error());
                            while ($data=mysql_fetch_array($sql1)){
                            $ksurat1=$data['nm_surat'];
                            ?>
                            <td><?php echo $ksurat1 ?></td>
                            <?php } ?>
                            <td><?php echo $tanggal ?></td>
                            <?php if($jns_surat=="1" || $jns_surat==""){ ?>
							<td><?php if($tglterima!='0000-00-00'){ echo $tglterima; }else{ echo "-"; }?></td>
                            <td><?php if($asalsurat==''){echo "-";} else {echo $asalsurat;} ?></td>
                            <?php } if($jns_surat=="2" || $jns_surat==""){ ?>
                            <td><?php if ($tujuan==''){echo "-";} else {echo $tujuan;} ?></td>
                            <?php } ?>
                            <td><?php echo $nomor ?></td>
                            <?php if($jns_surat=="1" || $jns_surat=="2" || $jns_surat==""){ ?>
                            <td><?php echo $sifat ?></td>
                            <?php } ?>
                            <td><?php echo $lampiran ?></td>
                            <td><?php echo $perihal ?></td>
                        </tr>
                        </tbody>
                        <?php 
                        $no++;
						}
                        ?>
                    </table>
                    
                </div>
                </div>
       </section>

    </div>

</div>