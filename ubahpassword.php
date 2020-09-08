<?php
session_start(); 
$sql = mysql_query("SELECT * FROM user where id='1'");
	while ($data=mysql_fetch_array($sql)) {
	$id = $data['id'];
	$username = $data['username'];
	$password = $data['password'];
	}
?>

<table class="table table-hover table-bordered table-striped">
<form method="post" enctype="multipart/form-data">
    <thead>
    <tr>
   	  <th width="100%" colspan="7"><center><b><h4>Ubah Password</h4></b></center></th>
   	</tr>
  	</thead>
   	  
   	 <tbody>
 <tr>
  	<tr>
  		<td>Username</td>
  		<td>:</td>
  		<td><input type="text" name="username" value="" placeholder="Username" /></td>
  	</tr>
  	<tr>
  		<td>Password</td>
  		<td>:</td>
  		<td><input type="password" name="password" value="" placeholder="Password" /></td>
  	</tr>
  	<tr>
  		<td>&nbsp;</td>
  		<td>&nbsp;</td>
  		<td><input type="submit" name="simpan" value="Ganti" /></td>
  	</tr>
	</tr>
   </tbody>
</table>
</form>
<?php
$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$simpan = isset($_POST['simpan']) ? $_POST['simpan'] : '';

if ($simpan){
	$sql=mysql_query("update user set username='$username',password='$password' where id='$id'") or die (mysql_error());
	if(!$sql){ 
			?>
			<script language="javascript">alert('Username & Password Gagal Diubah');
			document.location='?page=ubahpassword'</script>
			<?php
	} else {
			?>
			<script language="javascript">alert('Username & Password Berhasil Diubah');
			document.location='?page=ubahpassword'</script>
			<?php
	}
}
?>