<link href="assets/css/bootstrap.css" rel="stylesheet" />
<link rel="stylesheet" href="jquery-ui.css" type="text/css"/>
  <script src="jquery-1.10.2.js" type="text/javascript"></script>
  <script src="jquery-ui.js" type="text/javascript"></script>
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
  <script>
  $(function() {
    $( "#datepicker1" ).datepicker();
  });
  </script>
  <script>
  $(function() {
    $( "#datepicker2" ).datepicker();
  });
  </script>
  
<style type="text/css">
  select {
    width: 80px;
  }
input, button,  textarea {
    font-family: 'Open Sans';
    width: 63px;
}
</style>

<?php 
$tanggal=date('Y-m-d'); 

$cnoarsip = isset($_REQUEST['cnoarsip']) ? $_REQUEST['cnoarsip'] : '';
$id_jns_surat = isset($_REQUEST['id_jns_surat']) ? $_REQUEST['id_jns_surat'] : '';
$jns_surat = isset($_REQUEST['jns_surat']) ? $_REQUEST['jns_surat'] : '';
$datepicker = isset($_REQUEST['datepicker']) ? $_REQUEST['datepicker'] : '';
$datepicker1 = isset($_REQUEST['datepicker1']) ? $_REQUEST['datepicker1'] : '';
$datepicker2 = isset($_REQUEST['datepicker2']) ? $_REQUEST['datepicker2'] : '';
$casalsurat = isset($_REQUEST['casalsurat']) ? $_REQUEST['casalsurat'] : '';
$ctujuan = isset($_REQUEST['ctujuan']) ? $_REQUEST['ctujuan'] : '';
$cnomor = isset($_REQUEST['cnomor']) ? $_REQUEST['cnomor'] : '';
$csifat = isset($_REQUEST['csifat']) ? $_REQUEST['csifat'] : '';
$clampiran = isset($_REQUEST['clampiran']) ? $_REQUEST['clampiran'] : '';
$cperihal = isset($_REQUEST['cperihal']) ? $_REQUEST['cperihal'] : '';
$cbulan = isset($_REQUEST['cbulan']) ? $_REQUEST['cbulan'] : '';
$ctahun = isset($_REQUEST['ctahun']) ? $_REQUEST['ctahun'] : '';

?>
<div class="table-responsive">
		<form id="form-wizard" class="form-horizontal" method="post" onsubmit="">
			<table class="table table-hover table-bordered table-striped">
				<thead>
					<tr>
						<th><center>No. Arsip</center></th>
						<th><center>Kelompok</center></th>
						<th><center>Jenis</center></th>
						<th><center>Dari Tgl</center></th>
						<th><center>Sampai Tgl</center></th>
						<th><center>Asal Surat</center></th>
						<th><center>Tujuan Surat</center></th>
						<th><center>Nomor</center></th>
						<th><center>Sifat</center></th>
                        <th><center>Lampiran</center></th>
                        <th><center>Perihal</center></th>
						<th colspan="2"></th>
					</tr>
				</thead>
				<tbody>
					<tr class="gradeX">
						<td>
							<center>
							<?php if($cnoarsip!=''){ ?>
								<input type="text" name="cnoarsip" id="cnoarsip" value="<?php echo $cnoarsip ?>" size="2">
							<?php }else{ ?>
								<input type="text" name="cnoarsip" id="cnoarsip" size="2">
							<?php } ?>
							</center>
						</td>	
						<td><center>
							<select name="jns_surat" id="jns_surat" class="">
								<?php
								  if ($jns_surat==""){ 	
								  ?>
								  <option value="">--Pilih Semua--</option>
								  <?php		
										$query=mysql_query("select * from jns_surat");
										while($row=mysql_fetch_array($query)){
										$ksurat = $row['ksurat'];
										?>
										<option value="<?php  echo $row['ksurat']; ?>">
										<?php  echo $row['nm_surat']; ?>
										</option>
										<?php 
										}
								  } 
								  if ($jns_surat!=""){
								  $query=mysql_query("select * from jns_surat where ksurat='$jns_surat'");
								  while($row=mysql_fetch_array($query)){
								  $ksurat = $row['ksurat'];
								  ?>
								  <option value="<?php  echo $row['ksurat']; ?>">
								  <?php  echo $row['nm_surat']; ?>
								  </option>
								  <?php 
								  ?>
								  <option value="">--Pilih Semua--</option>
								  <?php
								  $query=mysql_query("select * from jns_surat");
								  while($row=mysql_fetch_array($query)){
								  $ksurat = $row['ksurat'];
								  ?>
								  <option value="<?php  echo $row['ksurat']; ?>">
								  <?php  echo $row['nm_surat']; ?>
								  </option>
								  <?php
								  }
								  }
								  }
								?>
							</select>
							</center>
						</td>	
						<td>
							<center>
							<select name="id_jns_surat">
								<?php if ($id_jns_surat==""){ ?>
								<option value="">-Pilih Semua-</option>
								<?php
									$q = mysql_query("SELECT * from jenis_srt")or die(mysql_error());
									while($r = mysql_fetch_array($q)) {	
									$id = $r['id'];	
									$jenis = $r['jenis'];	
								?>
								<option value="<?php echo $id ?>"><?php echo $jenis ?></option>
								<?php 
								} 
								}
								?>
								<?php
								  if ($id_jns_surat!=""){ 	
								?>
								<?php
									$q = mysql_query("SELECT * from jenis_srt where id='$id_jns_surat'")or die(mysql_error());
									while($r = mysql_fetch_array($q)) {	
									$id = $r['id'];	
									$jenis = $r['jenis'];	
								?>
								<option value="<?php echo $id ?>"><?php echo $jenis ?></option>
								<?php } ?>
								<option value="">-Pilih Semua-</option>
								<?php
									$q = mysql_query("SELECT * from jenis_srt")or die(mysql_error());
									while($r = mysql_fetch_array($q)) {	
									$id = $r['id'];	
									$jenis = $r['jenis'];	
								?>
								<option value="<?php echo $id ?>"><?php echo $jenis ?></option>
								<?php 
								} 
								}
								?>
							</select>
							</center>
						</td>	
						<td>
							<center>
							<?php if($datepicker1!=''){ ?>
								<input type="text" name="datepicker1" id="datepicker1" value="<?php echo $datepicker1 ?>" size="8" required>
							<?php }else{ ?>
								<input type="text" name="datepicker1" id="datepicker1" size="8" required>
							<?php } ?>
							</center>
						</td>
						<td>
							<center>
							<?php if($datepicker2!=''){ ?>
								<input type="text" name="datepicker2" id="datepicker2" value="<?php echo $datepicker2 ?>" size="8" required>
							<?php }else{ ?>
								<input type="text" name="datepicker2" id="datepicker2" size="8" required>
							<?php } ?>
							</center>
						</td>	
						<td>
							<center>
							<?php if($casalsurat!=''){ ?>
								<input type="text" name="casalsurat" id="casalsurat" value="<?php echo $casalsurat ?>" size="10">
							<?php }else{ ?>
								<input type="text" name="casalsurat" id="casalsurat" size="10">
							<?php } ?>
							</center>
						</td>	
						<td>
							<center>
							<?php if($ctujuan!=''){ ?>
								<input type="text" name="ctujuan" id="ctujuan" value="<?php echo $ctujuan ?>" size="10">
							<?php }else{ ?>
								<input type="text" name="ctujuan" id="ctujuan" size="10">
							<?php } ?>
							</center>
						</td>	
						<td>
							<center>
							<?php if($cnomor!=''){ ?>
								<input type="text" name="cnomor" id="cnomor" value="<?php echo $cnomor ?>" size="8">
							<?php }else{ ?>
								<input type="text" name="cnomor" id="cnomor" size="8">
							<?php } ?>
							</center>
						</td>	
						<td>
							<center>
							<?php if($csifat!=''){ ?>
								<input type="text" name="csifat" id="csifat" value="<?php echo $csifat ?>" size="8">
							<?php }else{ ?>
								<input type="text" name="csifat" id="csifat" size="8">
							<?php } ?>
							</center>
						</td>	
						<td>
							<center>
							<?php if($clampiran!=''){ ?>
								<input type="text" name="clampiran" id="clampiran" value="<?php echo $clampiran ?>" size="8">
							<?php }else{ ?>
								<input type="text" name="clampiran" id="clampiran" size="8">
							<?php } ?>
							</center>
						</td>	
						<td>
							<center>
							<?php if($cperihal!=''){ ?>
								<input type="text" name="cperihal" id="cperihal" value="<?php echo $cperihal ?>" size="8">
							<?php }else{ ?>
								<input type="text" name="cperihal" id="cperihal" size="8">
							<?php } ?>
							</center>
						</td>	
						<td>
							<center>
							<input type="submit" name="lihat" value="&nbsp;Cari&nbsp;"> 
								<?php if ($id_jns_surat=="" && $jns_surat=="" && $datepicker=="" && $datepicker1=="" && $datepicker2=="" && $casalsurat=="" && $ctujuan=="" && $cnomor=="" && $csifat=="" && $clampiran=="" && $cperihal=="" ){ ?>
							<a href="cetak_laporan.php?jns_surat=<?php echo "" ?>&datepicker=<?php echo "" ?>&datepicker1=<?php echo "" ?>&datepicker2=<?php echo "" ?>&casalsurat=<?php echo "" ?>&ctujuan=<?php echo "" ?>&cnomor=<?php echo "" ?>&csifat=<?php echo "" ?>&clampiran=<?php echo "" ?>&cperihal=<?php echo "" ?>" target="_blank"><input type="button" value="Cetak"></a>
								<?php } else { ?>
							<a href="cetak_laporan.php?id_jns_surat=<?php echo $id_jns_surat ?>&jns_surat=<?php echo $jns_surat ?>&datepicker=<?php echo $datepicker ?>&datepicker1=<?php echo $datepicker1 ?>&datepicker2=<?php echo $datepicker2 ?>&casalsurat=<?php echo $casalsurat ?>&ctujuan=<?php echo $ctujuan ?>&cnomor=<?php echo $cnomor ?>&csifat=<?php echo $csifat ?>&clampiran=<?php echo $clampiran ?>&cperihal=<?php echo $cperihal ?>" target="_blank"><input type="button" value="Cetak"></a>
							<?php } ?>	
							</center>
						</td>
					</tr>
				</tbody>
			</table>
</div>
<div class="table-responsive">	
	<div class="widget-box">
		<div class="widget-header">
			<h5 class="widget-title">Daftar Arsip</h5>

    <span class="widget-toolbar">
				<a href="#" data-action="reload">
					<i class="ace-icon fa fa-refresh"></i>
				</a>

				<a href="#" data-action="collapse">
					<i class="ace-icon fa fa-chevron-up"></i>
				</a>

				<a href="#" data-action="close">
					<i class="ace-icon fa fa-times"></i>
				</a>
		  </span>
			<span class="widget-toolbar">
			</span>
		</div>
			<div class="widget-body">
				<div class="widget-main">
				<table id="table1" class="table table-bordered table-hover" width="100%">
                    <thead>
						<tr>
							<td>No. Arsip</td>
							<td>Kelompok</td>
							<td>Jenis</td>
							<td>Tanggal</td>
							<td>Tanggal Terima</td>
							<td>Asal Surat</td>
							<td>Tujuan Surat</td>
							<td>Nomor</td>
							<td>Sifat</td>
							<td>Lampiran</td>
							<td>Perihal</td>
							<td>Disposisi</td>
							<td>File</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
                    </thead>
					<tbody>
							<?php
							$no=1;
							$lihat = isset($_POST['lihat']) ? $_POST['lihat'] : '';
							$lihat1 = isset($_POST['lihat1']) ? $_POST['lihat1'] : '';
						
							$cbulan1 = sprintf("%02s", $cbulan);
							$thnbln = $ctahun."-".$cbulan1;
						
							if($lihat){
								$sql = mysql_query("SELECT * from transaksi where notrans like '%$cnoarsip%' AND tanggal >='$datepicker1' AND tanggal <='$datepicker2' AND id_jns_surat like '%$id_jns_surat%' and ksurat like '%$jns_surat%' AND asalsurat like '%$casalsurat%' AND tujuan like '%$ctujuan%' AND nomor like '%$cnomor%' AND sifat like '%$csifat%' AND lampiran like '%$clampiran%' AND perihal like '%$cperihal%' ORDER BY tanggal desc, ksurat")or die(mysql_error());
							} else {
								$id = isset($_GET['id']) ? $_GET['id'] : '';
								if($id==''){
									$sql = mysql_query("SELECT * from transaksi where id='xxx' order by id desc");
								}else {
									$sql = mysql_query("SELECT * from transaksi where id='$id' order by id desc");
								}
							}
							while($fetch1 = mysql_fetch_array($sql)) {	
							$notrans = $fetch1['notrans'];
							$idtrans = $fetch1['idtrans'];
							$ksurat = $fetch1['ksurat'];
							$tanggal = $fetch1['tanggal'];
							$tglterima = $fetch1['tglterima'];
							$id_jns_surat = $fetch1['id_jns_surat'];
							$asalsurat = $fetch1['asalsurat'];
							$tujuan = $fetch1['tujuan'];
							$nomor = $fetch1['nomor'];
							$sifat = $fetch1['sifat'];
							$lampiran = $fetch1['lampiran'];
							$perihal = $fetch1['perihal'];	
							$disposisi = $fetch1['disposisi'];
							
							$q = mysql_query("SELECT * from file_foto where idtrans='$idtrans'")or die(mysql_error());
							$r=mysql_fetch_array($q);
							$foto = $r['foto'];		
							?>
					<tr>
						<td><?php echo $notrans ?></td>
						<?php 
						$sql1 = mysql_query("SELECT * from jns_surat where ksurat='$ksurat'")or die(mysql_error());
						$data=mysql_fetch_array($sql1);
						$ksurat1=$data['nm_surat'];
						?>
						<td><?php echo $ksurat1 ?></td>
						<?php 
						$q = mysql_query("SELECT * from jenis_srt where id='$id_jns_surat'")or die(mysql_error());
						$r=mysql_fetch_array($q);
						$jenis_surat=$r['jenis'];
						?>
						<td><?php echo $jenis_surat ?></td>
						<td><?php echo $tanggal ?></td>
						<td><?php if($tglterima!='0000-00-00'){ echo $tglterima; }else{ echo "-"; }?></td>
						<td><?php if($asalsurat==''){echo "-";} else {echo $asalsurat;} ?></td>
						<td><?php if($tujuan==''){echo "-";} else {echo $tujuan;} ?></td>
						<td><?php echo $nomor ?></td>
						<td><?php echo $sifat ?></td>
						<td><?php echo $lampiran ?></td>
						<td><?php echo $perihal ?></td>
						<?php 
						$q = mysql_query("SELECT * from pegawai where kd_peg='$disposisi'")or die(mysql_error());
						$r=mysql_fetch_array($q);
						$disposisi=$r['nama'];
						?>
						<td><?php echo $disposisi ?></td>
						<?php 
						$q = mysql_query("SELECT count(id) as jmltrans from file_foto where idtrans='$idtrans'")or die(mysql_error());
						$r=mysql_fetch_array($q);
						$jmltrans=$r['jmltrans'];
						?>
						<td align="center"><?php echo $jmltrans ?></td>
						<td align="center">
						<a href="?page=editsurat&edit&id=<?php echo $fetch1['id']; ?>&ksurat=<?php echo $ksurat ?>"><img src='img/edit.png' title="Edit" /></a>&nbsp;&nbsp;
						</td>
						<td align="center">
						<a href="?page=cariarsip&del&id=<?php echo $fetch1['id']; ?> " onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini ??')"><img src='img/hapus.png' title="Hapus" /></a>&nbsp;&nbsp;
						</td>
						<td align="center">
					    <?php if ($foto==""){ ?><a href="img/no_image.png" target="_blank"><img src='img/print.png' title="Cetak"/></a> <?php } else { ?><a href="?page=detail_file_surat&id=<?php echo $fetch1['id']; ?>" target="_blank"><img src='img/print.png' title="Cetak"/></a><?php } ?>
						</td>
					</tr>
						<?php
						$no++;
						}
						?>
			   </tbody>
			</table>
			</form>
			</div>
		</div>
	</div>
</div>

<?php 
if(isset($_GET['del'])){
    $id = isset($_GET['id']) ? $_GET['id'] : '';
	$cari=mysql_query("select * from transaksi where id='{$id}'" );
	$dt=mysql_fetch_array($cari);
	$idtrans=$dt['idtrans'];
	
	$cari1=mysql_query("select * from file_foto where idtrans='{$idtrans}'" );
	while($dt1=mysql_fetch_array($cari1)) {
	$foto=$dt1['foto'];
	$tmpfile = "foto/$foto";
	unlink ($tmpfile);

    }
	$cari2=mysql_query("select * from file_hasil where idtrans='{$idtrans}'" );
	while($dt2=mysql_fetch_array($cari2)) {
	$hasil=$dt2['hasil'];
	$tmpfile = "hasil/$hasil";
	unlink ($tmpfile);

    }
	
    $ff1 = mysql_query("delete from file_foto WHERE idtrans='{$idtrans}'")or die(mysql_error());
    $ff2 = mysql_query("delete from file_hasil WHERE idtrans='{$idtrans}'")or die(mysql_error());
    $ff = mysql_query("delete from transaksi WHERE id='{$id}'")or die(mysql_error());
    
    if($ff) { 
            echo "<script>alert('Data Berhasil Dihapus'); window.location='?page=cariarsip'</script>";
    }
}
?>


<script src="assets/lib/jquery/jquery.js"></script>
<script>
  $(function () {
	$('#table1').DataTable({
	  "paging": true,
	  "lengthChange": true,
	  "searching": true,
	  "ordering": true,
	  "info": true,
	  "autoWidth": false
	});
  });
</script>