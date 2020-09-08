<link rel="stylesheet" href="jquery-ui.css" type="text/css"/>
  <script src="jquery-1.10.2.js" type="text/javascript"></script>
  <script src="jquery-ui.js" type="text/javascript"></script>
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>

<?php
session_start(); 
$tanggal=date('Y-m-d'); 
$id_transaksi = isset($_GET['id_transaksi']) ? $_GET['id_transaksi'] : '';
$ksurat = isset($_GET['ksurat']) ? $_GET['ksurat'] : '';
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
	$foto = $r['foto'];
}
?>
<table class="table table-hover table-bordered table-striped">
<form method="post" enctype="multipart/form-data">
    <thead>
    <tr>
	<?php if($ksurat=='1'){?>
   	  <th width="100%" colspan="7"><center><b><h4>Surat Masuk</h4></b></center></th>
	<?php } ?>
	<?php if($ksurat=='2'){?>
   	  <th width="100%" colspan="7"><center><b><h4>Surat Keluar</h4></b></center></th>
	<?php } ?>
	<?php if($ksurat=='3'){?>
   	  <th width="100%" colspan="7"><center><b><h4>Hasil Pemeriksaan</h4></b></center></th>
	<?php } ?>
   	</tr>
  	</thead>
   	  
   	 <tbody>
 <tr>
  	<tr>
  		<td>Tanggal</td>
  		<td>:</td>
  		<td><input type="text" id="datepicker" name="tanggal" size="10" value="<?php echo $tanggal ?>" /></td>
  	</tr>
	<?php if($ksurat=='1'){?>
  	<tr>
  		<td>Asal Surat</td>
  		<td>:</td>
  		<td><input type="text" name="asalsurat" size="50" value="<?php echo $asalsurat ?>" /></td>
  	</tr>
	<?php } ?>
	<?php if($ksurat=='2' || $ksurat=='3'){?>
  	<tr>
  		<td>Tujuan</td>
  		<td>:</td>
  		<td><input type="text" name="tujuan" size="50" value="<?php echo $tujuan ?>" /></td>
  	</tr>
	<?php } ?>
  	<tr>
  		<td>Nomor</td>
  		<td>:</td>
  		<td><input type="text" name="nomor" value="<?php echo $nomor ?>" /></td>
  	</tr>
  	<tr>
  		<td>Sifat</td>
  		<td>:</td>
  		<td><input type="text" name="sifat" value="<?php echo $sifat ?>" /></td>
  	</tr>
  	<tr>
  		<td>Lampiran</td>
  		<td>:</td>
  		<td><input type="text"  size="50" name="lampiran" value="<?php echo $lampiran ?>" /></td>
  	</tr>
  	<tr>
  		<td>Perihal</td>
  		<td>:</td>
  		<td><input type="text"  size="50" name="perihal" value="<?php echo $perihal ?>" /></td>
  	</tr>
  	<tr>
  		<td>Foto</td>
  		<td>:</td>
  		<td>
			<?php
	  				if($foto==""){
					echo "<img id='' src='img/no_image.png' width='120' height='100' />";
					} else {
					echo "<img id='' src='foto/$foto' width='120' height='100' />";
					}
				?>
		<br /><?php echo $foto  ?><br />Ganti Foto <input type="file" name="foto" />
		</td>
  	</tr>
  	<tr>
  		<td>&nbsp;</td>
  		<td>&nbsp;</td>
  		<td><input type="submit" name="simpan" value="Simpan" /></td>
  	</tr>
	</tr>
   </tbody>
</table>
</form>
<?php
$tanggal = isset($_POST['tanggal']) ? $_POST['tanggal'] : '';
$asalsurat = isset($_POST['asalsurat']) ? $_POST['asalsurat'] : '';
$tujuan = isset($_POST['tujuan']) ? $_POST['tujuan'] : '';
$nomor = isset($_POST['nomor']) ? $_POST['nomor'] : '';
$sifat = isset($_POST['sifat']) ? $_POST['sifat'] : '';
$lampiran = isset($_POST['lampiran']) ? $_POST['lampiran'] : '';
$perihal = isset($_POST['perihal']) ? $_POST['perihal'] : '';
$foto=$_FILES['foto']['name'];
$acak = rand(000000,999999);
$nama_gambar_unik = $acak.$foto;
$fileError = $_FILES['gambar']['error'];    
$typeGambar = array('image/bmp', 'image/gif', 'image/jpg', 'image/jpeg', 'image/png');
$simpan = isset($_POST['simpan']) ? $_POST['simpan'] : '';

if ($simpan){
	if ($foto == "" ) {
	if ($ksurat=="1") {
		$sql=mysql_query("update transaksi1 set tanggal='$tanggal',asalsurat='$asalsurat',nomor='$nomor',sifat='$sifat',lampiran='$lampiran',perihal='$perihal' where id_transaksi='$id_transaksi'") or die (mysql_error());
		echo "<script>window.location='?page=cariarsip'</script>";
	} if ($ksurat=="2") {
		$sql=mysql_query("update transaksi1 set tanggal='$tanggal',tujuan='$tujuan',nomor='$nomor',sifat='$sifat',lampiran='$lampiran',perihal='$perihal' where id_transaksi='$id_transaksi'") or die (mysql_error());
		echo "<script>window.location='?page=cariarsip'</script>";
	} if ($ksurat=="3") {
		$sql=mysql_query("update transaksi1 set tanggal='$tanggal',tujuan='$tujuan',nomor='$nomor',sifat='$sifat',lampiran='$lampiran',perihal='$perihal' where id_transaksi='$id_transaksi'") or die (mysql_error());
		echo "<script>window.location='?page=cariarsip'</script>";
	}
	}
	elseif(!in_array($_FILES['foto']['type'],$typeGambar)){ 
	?>
	<script language="javascript">alert('Format Foto Salah');
	document.location='?page=suratkeluar'</script>
	<?php
	}
	elseif($fileSize=$_FILES['foto']['size']< 20000 || $fileError < 20000){
	if ($ksurat=="1") {
	$sql=mysql_query("update transaksi1 set tanggal='$tanggal',asalsurat='$asalsurat',nomor='$nomor',sifat='$sifat',lampiran='$lampiran',perihal='$perihal',foto='$nama_gambar_unik' where id_transaksi='$id_transaksi'") or die (mysql_error());
	} if ($ksurat=="2") {
	$sql=mysql_query("update transaksi1 set tanggal='$tanggal',tujuan='$tujuan',nomor='$nomor',sifat='$sifat',lampiran='$lampiran',perihal='$perihal',foto='$nama_gambar_unik' where id_transaksi='$id_transaksi'") or die (mysql_error());
	} if ($ksurat=="3") {
	$sql=mysql_query("update transaksi1 set tanggal='$tanggal',nomor='$nomor',sifat='$sifat',lampiran='$lampiran',perihal='$perihal',foto='$nama_gambar_unik' where id_transaksi='$id_transaksi'") or die (mysql_error());
	}
	$move = move_uploaded_file($_FILES['foto']['tmp_name'],'foto/'.$nama_gambar_unik);
	if(!$sql){ 
			?>
			<script language="javascript">alert('Data Gagal Disimpan');
			document.location='?page=suratkeluar'</script>
			<?php
	} else {
	echo "<script>window.location='?page=cariarsip'</script>";
	}
	}
}
?>