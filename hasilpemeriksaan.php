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
?>
<table class="table table-hover table-bordered table-striped">
<form method="post" enctype="multipart/form-data">
    <thead>
    <tr>
   	  <th width="100%" colspan="7"><center><b><h4>Hasil Pemeriksaan</h4></b></center></th>
   	</tr>
  	</thead>
   	  
   	 <tbody>
 <tr>
  	<tr>
  		<td>Tanggal</td>
  		<td>:</td>
  		<td><input type="text" id="datepicker" name="tanggal" size="10" /></td>
  	</tr>
    <tr>
      <td>Tujuan</td>
      <td>:</td>
      <td><input type="text" name="tujuan" value=""  size="50"   /></td>
    </tr>
  	<tr>
  		<td>Nomor</td>
  		<td>:</td>
  		<td><input type="text" name="nomor" value="" /></td>
  	</tr>
  	<tr>
  		<td>Jenis Pemeriksaan</td>
  		<td>:</td>
  		<td><input type="text" name="periksa" value="" /></td>
  	</tr>
  	<tr>
  		<td>Lampiran</td>
  		<td>:</td>
  		<td><input type="text" name="lampiran" value=""  size="50" /></td>
  	</tr>
  	<tr>
  		<td>Perihal</td>
  		<td>:</td>
  		<td><input type="text" name="perihal" value="" size="50"  /></td>
  	</tr>
  	<tr>
  		<td>Foto</td>
  		<td>:</td>
  		<td><input type="file" name="foto" /></td>
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
$tujuan = isset($_POST['tujuan']) ? $_POST['tujuan'] : '';
$nomor = isset($_POST['nomor']) ? $_POST['nomor'] : '';
$periksa = isset($_POST['periksa']) ? $_POST['periksa'] : '';
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
$sql=mysql_query("INSERT INTO transaksi1(ksurat,tanggal,tujuan,nomor,jns_pemeriksaan,lampiran,perihal) VALUES('3','$tanggal','$tujuan','$nomor','$periksa','$lampiran','$perihal')") or die (mysql_error());
	echo "<script>window.location='?page=cariarsip'</script>";
	}
	elseif(!in_array($_FILES['foto']['type'],$typeGambar)){ 
	?>
	<script language="javascript">alert('Format Foto Salah');
	document.location='?page=hasilpemeriksaan'</script>
	<?php
	}
	elseif($fileSize=$_FILES['foto']['size']< 20000 || $fileError < 20000){
	$sql=mysql_query("INSERT INTO transaksi1(ksurat,tanggal,tujuan,nomor,jns_pemeriksaan,lampiran,perihal,foto) VALUES('3','$tanggal','$nomor','$tujuan','$periksa','$lampiran','$perihal','$nama_gambar_unik')") or die (mysql_error());
	$move = move_uploaded_file($_FILES['foto']['tmp_name'],'foto/'.$nama_gambar_unik);
	if(!$sql){ 
			?>
			<script language="javascript">alert('Data Gagal Disimpan');
			document.location='?page=hasilpemeriksaan'</script>
			<?php
	} else {
	echo "<script>window.location='?page=cariarsip'</script>";
	}
	}
}
?>