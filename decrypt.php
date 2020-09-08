<?php

    $host	 = "localhost";
    $user	 = "root";
    $pass	 = "";
    $dabname     = "mysql";

    $conn = mysql_connect( $host, $user, $pass) or die('Could not connect to mysql server.' );
    mysql_select_db($dabname, $conn) or die('Could not select database.');

    include 'koneksi.php';
	
	$input 		= isset($_REQUEST['input']) ? $_REQUEST['input']:'';
	$puskesmas  = isset($_POST['puskesmas']) ? $_POST['puskesmas']:'';
	$kpuskesmas = isset($_REQUEST['kpuskesmas']) ? $_REQUEST['kpuskesmas']: '';
	$status 	= isset($_REQUEST['status']) ? $_REQUEST['status']:'';
	$password 	= isset($_REQUEST['password']) ? $_REQUEST['password']:'';
	$no 		= 1;


?>
<body bgcolor="black">
<form method="post" action="">

<center><img src="img/icon.png" width="10%;auto"></center>
<center><h2>Tools Decrypt </h2></center>
<table align="center">
<tr>
	<td>
		<select name="puskesmas">
			<option></option>
				<?php 
					$select = mysql_query("SELECT * FROM sik.tpuskesmas ORDER BY puskesmas ") or die(mysql_error());
					while($x=mysql_fetch_array($select)){
				?>
			<option value="<?php echo $x['kpuskesmas'];?>"><?php echo $x['puskesmas'];?></option>
				<?php
				}
				?>
		</select>
	</td>
	<td><center><input type="text" name="input"><center></td>
	<td><button type="submit" name="btncari" > Cari </button></td>
</tr>
</table>
</form>
<br />

	<table width="60% auto;" align="center" bgcolor="black">
	<thead>
		<th bgcolor="white">No</th>
		<th bgcolor="white">Username</th>
		<th bgcolor="white">Decrypt</th>
		<th bgcolor="white">Password</th>
	</thead>

				<?php
				$btncari= isset($_POST['btncari']);
				if($btncari){
                $query  = mysql_query("SELECT (user) AS user,(status) as status,(pasword) as password,DES_DECRYPT(pasword) AS pasword FROM mysql.password WHERE status LIKE '%$input%'") or die(mysql_error());
                 while ($data=mysql_fetch_array($query)) {
                   $status 	= $data['status'];
                   $password = $data['password'];
                   $user 	= $data['user'];
                   $pwd 	= $data['pasword'];
                 ?>
	<tbody>
		<tr>
			<td bgcolor="white"><?php echo $no++; ?></td>
			<td bgcolor="white"><?php echo $status; ?></td>
		<!--	<td bgcolor="white"><?php echo $password; ?></td> -->
			<td bgcolor="white"><?php echo $pwd;?></td>
		</tr>
	</tbody>
	<?php
}
}
?>
</table>



</body>