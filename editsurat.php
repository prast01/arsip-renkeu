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
$id = isset($_GET['id']) ? $_GET['id'] : '';
$ksurat = isset($_GET['ksurat']) ? $_GET['ksurat'] : '';
$rw = mysql_query("SELECT * from transaksi where id='$id'")or die(mysql_error()); 
$r = mysql_fetch_array($rw);
	$id_jns_surat = $r['id_jns_surat'];
//	$ksurat = $r['ksurat'];
	$tanggal = $r['tanggal'];
	$tglterima = $r['tglterima'];
	$asalsurat = $r['asalsurat'];
	$tujuan = $r['tujuan'];
	$nomor = $r['nomor'];
	$periksa = $r['jns_pemeriksaan'];
	$sifat = $r['sifat'];
	$lampiran = $r['lampiran'];
	$perihal = $r['perihal'];
//	$foto = $r['foto'];
	$idtrans = $r['idtrans'];
	$disposisi = $r['disposisi'];
	$catatan = $r['catatan'];
?>
<div class="table-responsive">
<table class="table table-hover table-bordered table-striped">
<form method="post" enctype="multipart/form-data">
    <thead>
    <tr>
	<?php if($ksurat=='1'){?>
   	  <th width="100%" colspan="7"><center><b><h4>Edit Surat Masuk</h4></b></center></th>
	<?php } ?>
	<?php if($ksurat=='2'){?>
   	  <th width="100%" colspan="7"><center><b><h4>Edit Surat Keluar</h4></b></center></th>
	<?php } ?>
   	</tr>
  	</thead>
   	  
   	 <tbody>
 <tr>
  	<tr>
  		<td>Tanggal</td>
  		<td>:</td>
  		<td>
		<input type="text" id="datepicker" name="tanggal" size="10" value="<?php echo $tanggal ?>" />
		<input type="hidden" name="idtrans" size="10" value="<?php echo $idtrans ?>" />
		</td>
  	</tr>
	<?php if($ksurat=='1'){?>
  	<tr>
  		<td>Tanggal Terima</td>
  		<td>:</td>
  		<td><input type="date" name="tglterima" size="50" value="<?php echo $tglterima ?>" /></td>
  	</tr>
	<?php } ?>
  	<tr>
  		<td>Jenis Surat</td>
  		<td>:</td>
  		<td>
		<select name="id_jns_surat">
			<?php
				$q = mysql_query("SELECT * from jenis_srt where id='$id_jns_surat'")or die(mysql_error());
				$r = mysql_fetch_array($q);	
				$id_jenis_srt = $r['id'];	
				$jenis = $r['jenis'];	
			?>
			<option value="<?php echo $id_jenis_srt ?>"><?php echo $jenis ?></option>
			<option value="">-Pilih-</option>
			<?php
				$q = mysql_query("SELECT * from jenis_srt")or die(mysql_error());
				while($r = mysql_fetch_array($q)) {	
				$id_jenis_srt = $r['id'];	
				$jenis = $r['jenis'];	
			?>
			<option value="<?php echo $id_jenis_srt ?>"><?php echo $jenis ?></option>
			<?php } ?>
		</select>
		</td>
  	</tr>
	<?php if($ksurat=='1'){?>
  	<tr>
  		<td>Asal Surat</td>
  		<td>:</td>
  		<td><input type="text" name="asalsurat" size="50" value="<?php echo $asalsurat ?>" /></td>
  	</tr>
	<?php } ?>
	<?php if($ksurat=='2'){?>
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
  		<td><input type="text"  size="10" name="lampiran" value="<?php echo $lampiran ?>" /></td>
  	</tr>
  	<tr>
  		<td>Perihal</td>
  		<td>:</td>
  		<td><input type="text"  size="50" name="perihal" value="<?php echo $perihal ?>" /></td>
  	</tr>
  	<tr>
  		<td>Disposisi</td>
  		<td>:</td>
  		<td>
		<select name="disposisi">
			<?php
				$q = mysql_query("SELECT * from pegawai where kode='1' and kd_peg='$disposisi'")or die(mysql_error());
				$r = mysql_fetch_array($q);	
				$kd_peg = $r['kd_peg'];	
				$nama = $r['nama'];	
			?>
			<option value="<?php echo $kd_peg ?>"><?php echo $nama ?></option>
			<option value="">-Pilih-</option>
			<?php
				$q = mysql_query("SELECT * from pegawai where kode='1'")or die(mysql_error());
				while($r = mysql_fetch_array($q)) {	
				$kd_peg = $r['kd_peg'];	
				$nama = $r['nama'];	
			?>
			<option value="<?php echo $kd_peg ?>"><?php echo $nama ?></option>
			<?php } ?>
		</select>
		</td>
  	</tr>
  	<tr>
  		<td>Catatan</td>
  		<td>:</td>
  		<td><textarea name="catatan" rows="5" cols="50"><?php echo $catatan ?></textarea></td>
  	</tr>
  	<tr>
  		<td>Foto</td>
  		<td>:</td>
  		<td>
			<table class="table table-hover table-bordered table-striped" id="dataTables-example">
			<tr>
			<?php
			$kolom=6;
            $i=0;
			$rw = mysql_query("SELECT * from file_foto where idtrans='$idtrans'")or die(mysql_error()); 
			while($r = mysql_fetch_array($rw)){
				$idfoto = $r['id'];
				$foto = $r['foto'];
				$idfoto = $r['id'];
					
            if ($i>=$kolom){
            ?>
            <tr class="odd gradeX">                  
            </tr>
                  <?php
                  $i=0;
                  }
                  $i++;
                  ?>
			<td align="center">	  
			<?php				
			if($foto==""){
				echo "<img id='' src='img/no_image.png' width='120' height='100' />";
			}else{
			?>
			<a href="<?php echo "foto/$foto" ?>" target="_blank"><img height="250" width="150" src="<?php echo "foto/$foto" ?>"></a>
			<br />
			
				<a href="?page=editsurat&del&idfoto=<?php echo $idfoto; ?>&ksurat=<?php echo $ksurat; ?>&id=<?php echo $id; ?> " onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini ??')"><img src='img/hapus.png' title="Hapus" /></a>
			<?php
			}
			?>
			</td>
			<?php
			}
			?>
			</tr>
			</table>
		</td>
  	</tr>
  	<tr>
  		<td>Tambah Foto</td>
  		<td>:</td>
  		<td><input type="file" name="gambar[]" multiple /> <input type="submit" name="upload" value="Upload" /></td>
  	</tr>
  	<tr>
  		<td>Hasil</td>
  		<td>:</td>
  		<td>
			<table class="table table-hover table-bordered table-striped" id="dataTables-example">
			<tr>
			<?php
			$kolom=6;
            $i=0;
			$rw = mysql_query("SELECT * from file_hasil where idtrans='$idtrans'")or die(mysql_error()); 
			while($r = mysql_fetch_array($rw)){
				$idhasil = $r['id'];
				$hasil = $r['hasil'];
				$idhasil = $r['id'];
					
            if ($i>=$kolom){
            ?>
            <tr class="odd gradeX">                  
            </tr>
                  <?php
                  $i=0;
                  }
                  $i++;
                  ?>
			<td align="center">	  
			<?php				
			if($hasil==""){
				echo "<img id='' src='img/no_image.png' width='120' height='100' />";
			}else{
			?>
			<a href="<?php echo "hasil/$hasil" ?>" target="_blank"><img height="250" width="150" src="<?php echo "hasil/$hasil" ?>"></a>
			<br />
			
				<a href="?page=editsurat&del2&idhasil=<?php echo $idhasil; ?>&ksurat=<?php echo $ksurat; ?>&id=<?php echo $id; ?> " onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini ??')"><img src='img/hapus.png' title="Hapus" /></a>
			<?php
			}
			?>
			</td>
			<?php
			}
			?>
			</tr>
			</table>
		</td>
  	</tr>
  	<tr>
  		<td>Tambah Hasil</td>
  		<td>:</td>
  		<td><input type="file" name="gambar2[]" multiple /> <input type="submit" name="upload2" value="Upload" /></td>
  	</tr>	
	
  	<tr>
  		<td>&nbsp;</td>
  		<td>&nbsp;</td>
  		<td><input type="submit" name="simpan" value="Update" /></td>
  	</tr>
	</tr>
   </tbody>
</form>
</table>
</div>
<?php
$id_jns_surat = isset($_POST['id_jns_surat']) ? $_POST['id_jns_surat'] : '';
$idtrans = isset($_POST['idtrans']) ? $_POST['idtrans'] : '';
$tanggal = isset($_POST['tanggal']) ? $_POST['tanggal'] : '';
$tglterima = isset($_POST['tglterima']) ? $_POST['tglterima'] : '';
$asalsurat = mysql_real_escape_string(isset($_POST['asalsurat']) ? $_POST['asalsurat'] : '');
$tujuan = mysql_real_escape_string(isset($_POST['tujuan']) ? $_POST['tujuan'] : '');
$nomor = mysql_real_escape_string(isset($_POST['nomor']) ? $_POST['nomor'] : '');
$sifat = mysql_real_escape_string(isset($_POST['sifat']) ? $_POST['sifat'] : '');
$lampiran = mysql_real_escape_string(isset($_POST['lampiran']) ? $_POST['lampiran'] : '');
$perihal = mysql_real_escape_string(isset($_POST['perihal']) ? $_POST['perihal'] : '');
$disposisi = mysql_real_escape_string(isset($_POST['disposisi']) ? $_POST['disposisi'] : '');
$catatan = mysql_real_escape_string(isset($_POST['catatan']) ? $_POST['catatan'] : '');
$jumlah = count($_FILES['gambar']['name']);
$simpan = isset($_POST['simpan']) ? $_POST['simpan'] : '';
$upload = isset($_POST['upload']) ? $_POST['upload'] : '';

if ($upload){
			if ($jumlah > 0) {
				for ($i=0; $i < $jumlah; $i++) { 
					$file_name = $_FILES['gambar']['name'][$i];
					$tmp_name = $_FILES['gambar']['tmp_name'][$i];				
					$acak = rand(000000,999999);
					$nama_gambar_unik = $acak.$file_name;
					move_uploaded_file($tmp_name, "foto/".$nama_gambar_unik);
					
					if($file_name!=''){			
					mysql_query("INSERT INTO file_foto(idtrans,foto) VALUES('$idtrans','$nama_gambar_unik')") or die (mysql_error());
					}
				}
				?>
				<script language="javascript">
				document.location='?page=editsurat&edit&id=<?php echo $id ?>&ksurat=<?php echo $ksurat ?>'</script>
				<?php
			}else{
				?>
				<script language="javascript">alert('File Tidak Ada');
				document.location='?page=editsurat&edit&id=<?php echo $id ?>&ksurat=<?php echo $ksurat ?>'</script>
				<?php
			}
}


if ($simpan){
	if ($ksurat=="1"){
				$sql=mysql_query("update transaksi set id_jns_surat='$id_jns_surat',tanggal='$tanggal',tglterima='$tglterima',asalsurat='$asalsurat',nomor='$nomor',sifat='$sifat',lampiran='$lampiran',perihal='$perihal',disposisi='$disposisi',catatan='$catatan' where id='$id'") or die (mysql_error());
				echo "<script>window.location='?page=cariarsip&id=$id'</script>";
	}if($ksurat=="2"){
			$sql=mysql_query("update transaksi set id_jns_surat='$id_jns_surat',tanggal='$tanggal',tujuan='$tujuan',nomor='$nomor',sifat='$sifat',lampiran='$lampiran',perihal='$perihal' where id='$id'") or die (mysql_error());
			echo "<script>window.location='?page=cariarsip&id=$id'</script>";
		}
}
?>

<?php 
if(isset($_GET['del'])){
    $idfoto = isset($_GET['idfoto']) ? $_GET['idfoto'] : '';
    $id = isset($_GET['id']) ? $_GET['id'] : '';
    $ksurat = isset($_GET['ksurat']) ? $_GET['ksurat'] : '';
	$cari=mysql_query("select * from file_foto where id='{$idfoto}'" );
	$dt=mysql_fetch_array($cari);
	$foto=$dt['foto'];
	$tmpfile = "foto/$foto";
   
    $ff = mysql_query("delete from file_foto WHERE id='{$idfoto}'")or die(mysql_error());
    
    if($ff) { 
	unlink ($tmpfile);
            echo "<script>alert('Data Berhasil Dihapus'); window.location='?page=editsurat&edit&id=$id&ksurat=$ksurat'</script>";
    }
}
?>

<?php 
if(isset($_GET['del'])){
    $idhasil = isset($_GET['idhasil']) ? $_GET['idhasil'] : '';
    $id = isset($_GET['id']) ? $_GET['id'] : '';
    $ksurat = isset($_GET['ksurat']) ? $_GET['ksurat'] : '';
	$cari=mysql_query("select * from file_hasil where id='{$idhasil}'" );
	$dt=mysql_fetch_array($cari);
	$hasil=$dt['hasil'];
	$tmpfile = "hasil/$hasil";
   
    $ff = mysql_query("delete from file_hasil WHERE id='{$idhasil}'")or die(mysql_error());
    
    if($ff) { 
	unlink ($tmpfile);
            echo "<script>alert('Data Berhasil Dihapus'); window.location='?page=editsurat&edit&id=$id&ksurat=$ksurat'</script>";
    }
}
?>