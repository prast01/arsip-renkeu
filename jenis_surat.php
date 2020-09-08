<?php 
session_start();
$act = isset($_GET['act']) ? $_GET['act'] : '';   
?>
<div class="table-responsive">
<form method="post" enctype="multipart/form-data">
<table class="table table-hover table-bordered table-striped">
    <thead>
    <tr>
	<?php if($act=='edit'){ ?>
   	  <th width="100%" colspan="3"><center><b><h4>Edit Jenis Surat</h4></b></center></th>
	<?php }else{ ?>
   	  <th width="100%" colspan="3"><center><b><h4>Input Jenis Surat</h4></b></center></th>
	<?php } ?>
   	</tr>
  	</thead>
   	  
   	<tbody>
	<?php if($act=='edit'){ ?>
	<?php
		$id = isset($_GET['id']) ? $_GET['id'] : '';   
	    $q = mysql_query("SELECT * from jenis_srt where id='$id'")or die(mysql_error());
		$r = mysql_fetch_array($q);
		$nomor = $r['nomor'];	
		$jenis = $r['jenis'];	
	?>
	<tr>
		<tr>
			<td>Nomor</td>
			<td>:</td>
			<td><input type="text" name="nomor" value="<?php echo $nomor ?>" size="30" required /></td>
		</tr>
		<tr>
			<td>Jenis</td>
			<td>:</td>
			<td><input type="text" name="jenis" value="<?php echo $jenis ?>" size="50" required /></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><input type="submit" name="update" value="Update" /></td>
		</tr>
	</tr>
	<?php }else{ ?>
	<tr>
		<tr>
			<td>Nomor</td>
			<td>:</td>
			<td><input type="text" name="nomor" value="" size="30" required /></td>
		</tr>
		<tr>
			<td>Jenis</td>
			<td>:</td>
			<td><input type="text" name="jenis" value="" size="50" required /></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><input type="submit" name="simpan" value="Simpan" /></td>
		</tr>
	</tr>
	<?php } ?>
   </tbody>
</table>
</form>
</div>
<?php
$nomor = isset($_POST['nomor']) ? $_POST['nomor'] : '';
$jenis = mysql_real_escape_string ($_POST["jenis"]);
$simpan = isset($_POST['simpan']) ? $_POST['simpan'] : '';
$update = isset($_POST['update']) ? $_POST['update'] : '';

if ($simpan){
	$sql=mysql_query("INSERT INTO jenis_srt(nomor,jenis) VALUES('$nomor','$jenis')") or die (mysql_error());
    echo "<script>alert('Data Berhasil Disimpan'); window.location='?page=jenis_surat'</script>";
}

if ($update){
	$sql=mysql_query("UPDATE jenis_srt set nomor='$nomor',jenis='$jenis' where id='$id'") or die (mysql_error());
    echo "<script>alert('Data Berhasil Diupdate'); window.location='?page=jenis_surat'</script>";
}


?>
<div class="table-responsive">
<form method="post" enctype="multipart/form-data">
<table class="table table-hover table-bordered table-striped">
    <thead>
    <tr>
   	  <th width="" colspan="4"><center><b><h4>Daftar Jenis Surat</h4></b></center></th>
   	</tr>
  	</thead>
   	  
   	 <tbody>
  	<tr>
		<td>No</td>
		<td>Nomor</td>
  		<td>Jenis</td>
  		<td>Aksi</td>
  	</tr>
	<?php
		$no=1;
	    $q = mysql_query("SELECT * from jenis_srt")or die(mysql_error());
		while($r = mysql_fetch_array($q)) {	
		$nomor = $r['nomor'];	
		$jenis = $r['jenis'];	
	?>

  	<tr>
		<td><?php echo $no; ?></td>
  		<td><?php echo $nomor; ?></td>
  		<td><?php echo $jenis; ?></td>
  		<td>
  		<a href="?page=jenis_surat&act=edit&id=<?php echo $r['id']; ?>"><img src='img/edit.png' title="Edit" /></a>&nbsp;&nbsp;&nbsp;&nbsp;
  		<a href="?page=jenis_surat&del&id=<?php echo $r['id']; ?> " onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini ??')"><img src='img/hapus.png' title="Hapus" /></a>&nbsp;&nbsp;&nbsp;&nbsp;
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
<?php 
if(isset($_GET['del'])){
    $id = isset($_GET['id']) ? $_GET['id'] : '';   
    $ff = mysql_query("delete from jenis_srt WHERE id='{$id}'")or die(mysql_error());
    
    if($ff) { 
            echo "<script>alert('Data Berhasil Dihapus'); window.location='?page=jenis_surat'</script>";
    }
}
?>