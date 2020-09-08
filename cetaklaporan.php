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
$ksurat = isset($_GET['ksurat']) ? $_GET['ksurat'] : '';
?>
<div class="row">
    <div class="col-md-12">
        <section class="panel">
            <header class="panel-heading">
                DAFTAR ARSIP
            </header>
                    <br>
                    <table border="1" width="100%" class="" bgcolor="">
                        <thead>
                            <tr bgcolor="">
                                <td>No</td>
                                <td>Jenis Surat</td>
                                <td>Tanggal</td>
                                <?php if($ksurat=='1'){?>
                                <td>Asal Surat</td>
                                <?php } ?>
                                <?php if($ksurat=='2'){?>
                                <td>Tujuan Surat</td>
                                <?php } ?>
                                <td>Nomor</td>
                                <td>Sifat</td>
                                <td>Lampiran</td>
                                <td>Perihal</td>
                            </tr>
                        </thead>
					<?php
						$no=1;   
                        $id_transaksi = isset($_GET['id_transaksi']) ? $_GET['id_transaksi'] : '';
						$rw = mysql_query("SELECT * from transaksi1 where id_transaksi='$id_transaksi'")or die(mysql_error()); 
                        while($r = mysql_fetch_array($rw)){
                        $ksurat = $r['ksurat'];
                        $tanggal = $r['tanggal'];
                        $asalsurat = $r['asalsurat'];
                        $tujuan = $r['tujuan'];
                        $nomor = $r['nomor'];
                        $sifat = $r['sifat'];
                        $lampiran = $r['lampiran'];
                        $perihal = $r['perihal'];
                        ?>
                        <tbody>
                        <tr bgcolor="">
                            <td><?php echo $no ?></td>
                            <?php 
                            $sql1 = mysql_query("SELECT * from jns_surat where ksurat='$ksurat'")or die(mysql_error());
                            while ($data=mysql_fetch_array($sql1)){
                            $ksurat1=$data['nm_surat'];
                            ?>
                            <td><?php echo $ksurat1 ?></td>
                            <?php } ?>
                            <td><?php echo $tanggal ?></td>
                            <?php if($ksurat=='1'){?>
                            <td><?php if ($asalsurat==''){echo "-";} else {echo $asalsurat;} ?></td>
                            <?php } if ($ksurat=='2'){?>
                            <td><?php if ($tujuan==''){echo "-";} else {echo $tujuan;} ?></td>
                            <?php } ?>
                            <td><?php echo $nomor ?></td>
                            <td><?php echo $sifat ?></td>
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