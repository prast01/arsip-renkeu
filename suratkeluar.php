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

$jb = mysql_query("SELECT max(id)+1 as notrans FROM transaksi")or die(mysql_error());        
$r = mysql_fetch_array($jb);
$notrans = $r['notrans'];
$idtrans = sprintf("%02s", $notrans);

$q = mysql_query("SELECT count(id) as jml_trans FROM transaksi where ksurat='2'")or die(mysql_error());        
$r = mysql_fetch_array($q);
$jml_trans = $r['jml_trans'];

if($jml_trans=='0'){
$no_arsip = "1";
}else{
$jb = mysql_query("SELECT max(notrans)+1 as nomor FROM transaksi where ksurat='2'")or die(mysql_error());        
$r = mysql_fetch_array($jb);
$no_arsip = $r['nomor'];
}

?>
<div class="table-responsive">
<table class="table table-hover table-bordered table-striped">
<form method="post" enctype="multipart/form-data">
    <thead>
    <tr>
   	  <th width="100%" colspan="7"><center><b><h4>Surat Keluar</h4></b></center></th>
   	</tr>
  	</thead>
   	  
   	 <tbody>
 <tr>
  	<tr>
  		<td>No Arsip</td>
  		<td>:</td>
  		<td>
		<?php echo $no_arsip ?>
		</td>
  	</tr>
  	<tr>
  		<td>Tanggal</td>
  		<td>:</td>
  		<td>
		<input id="idtrans" type="hidden" name="idtrans" value="<?php echo $idtrans ?>" />
		<input type="text" id="datepicker" name="tanggal" size="10" />
		</td>
  	</tr>
  	<tr>
  		<td>Jenis Surat</td>
  		<td>:</td>
  		<td>
		<select name="id_jns_surat">
			<option value="">-Pilih-</option>
			<?php
				$q = mysql_query("SELECT * from jenis_srt")or die(mysql_error());
				while($r = mysql_fetch_array($q)) {	
				$id = $r['id'];	
				$jenis = $r['jenis'];	
				?>
			<option value="<?php echo $id ?>"><?php echo $jenis ?></option>
			<?php } ?>
		</select>
		</td>
  	</tr>
  	<tr>
  		<td>Tujuan</td>
  		<td>:</td>
  		<td><input type="text" name="tujuan" value="" size="50" /></td>
  	</tr>
  	<tr>
  		<td>Nomor</td>
  		<td>:</td>
  		<td><input type="text" name="nomor" value="" /></td>
  	</tr>
  	<tr>
  		<td>Sifat</td>
  		<td>:</td>
  		<td><input type="text" name="sifat" value="" /></td>
  	</tr>
  	<tr>
  		<td>Lampiran</td>
  		<td>:</td>
  		<td><input type="text" name="lampiran" value=""size="50" /></td>
  	</tr>
  	<tr>
  		<td>Perihal</td>
  		<td>:</td>
  		<td><input type="text" name="perihal" value="" size="50" /></td>
  	</tr>
  	<tr>
  		<td>Foto</td>
  		<td>:</td>
  		<td><input type="file" name="gambar[]" multiple required /></td>
  	</tr>
  	<tr>
  		<td>&nbsp;</td>
  		<td>&nbsp;</td>
  		<td><input type="submit" name="simpan" value="Simpan" /></td>
  	</tr>
	</tr>
   </tbody>
</form>
</table>
</div>
<?php
$idtrans = isset($_POST['idtrans']) ? $_POST['idtrans'] : '';
$tanggal = isset($_POST['tanggal']) ? $_POST['tanggal'] : '';
$id_jns_surat = isset($_POST['id_jns_surat']) ? $_POST['id_jns_surat'] : '';
$tujuan = mysql_real_escape_string(isset($_POST['tujuan']) ? $_POST['tujuan'] : '');
$nomor = mysql_real_escape_string(isset($_POST['nomor']) ? $_POST['nomor'] : '');
$sifat = mysql_real_escape_string(isset($_POST['sifat']) ? $_POST['sifat'] : '');
$lampiran = mysql_real_escape_string(isset($_POST['lampiran']) ? $_POST['lampiran'] : '');
$perihal = mysql_real_escape_string(isset($_POST['perihal']) ? $_POST['perihal'] : '');
$jumlah = count($_FILES['gambar']['name']);
$simpan = isset($_POST['simpan']) ? $_POST['simpan'] : '';

$q = mysql_query("SELECT count(id) as jml_trans FROM transaksi where ksurat='2'")or die(mysql_error());        
$r = mysql_fetch_array($q);
$jml_trans = $r['jml_trans'];

if($jml_trans=='0'){
$no_arsip = "1";
}else{
$jb = mysql_query("SELECT max(notrans)+1 as nomor FROM transaksi where ksurat='2'")or die(mysql_error());        
$r = mysql_fetch_array($jb);
$no_arsip = $r['nomor'];
}		

if ($simpan){
		if ($jumlah > 0) {
			mysql_query("INSERT INTO transaksi(idtrans,ksurat,tanggal,id_jns_surat,tujuan,nomor,sifat,lampiran,perihal,notrans) VALUES('$idtrans','2','$tanggal','$id_jns_surat','$tujuan','$nomor','$sifat','$lampiran','$perihal','$no_arsip')") or die (mysql_error());
			for ($i=0; $i < $jumlah; $i++) { 
				$file_name = $_FILES['gambar']['name'][$i];
				$tmp_name = $_FILES['gambar']['tmp_name'][$i];				
				$acak = rand(000000,999999);
				$nama_gambar_unik = $acak.$file_name;
				move_uploaded_file($tmp_name, "foto/".$nama_gambar_unik);
								
				mysql_query("INSERT INTO file_foto(idtrans,foto) VALUES('$idtrans','$nama_gambar_unik')") or die (mysql_error());
			}
			?>
			<script language="javascript">alert('Berhasil Upload');
			document.location='?page=cariarsip'</script>
			<?php
		}
		else{
			?>
			<script language="javascript">alert('Gambar tidak ada');
			document.location='?page=cariarsip'</script>
			<?php
		}
}

?>