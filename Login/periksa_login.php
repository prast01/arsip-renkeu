<?php
session_start();
include "koneksi.php";
                  
//$username = isset($_POST['username']) ? $_POST['username'] : ''; 
$username = mysql_real_escape_string(isset($_POST['username']) ? $_POST['username'] : '');

$password = isset($_POST['password']) ? $_POST['password'] : '';

$userklinik = mysql_query("SELECT entry,nama,kpuskesmas,nip_baru FROM nakes_pusk WHERE nama='$username'")or die(mysql_error());
$r = mysql_fetch_array($userklinik);
$nama = $r['nama'];
$kpuskesmas = $r['kpuskesmas'];
$nip_baru = $r['nip_baru'];
$entry = $r['entry'];
$jumlah_entry = $entry+1;

$user = mysql_query("select * from nakes_pusk where nama='$nama' and nip_baru='$password'");

$tot= mysql_num_rows($user);
$r= mysql_fetch_array($user);

if ($tot > 0) {//jika data ada maka akan diproses
 $_SESSION['nama'] = $r['nama'];
 $_SESSION['kpuskesmas'] = $r['kpuskesmas'];
  $_SESSION['nip_baru'] = $r['nip_baru'];

	 if ($password == '3320') {
	 echo "<script> window.location='../home.php?cat=data&page=grafik_jumlah_bayi1'</script>";
 	 } else {
		mysql_query("UPDATE nakes_pusk SET entry='$jumlah_entry' where nip_baru='$nip_baru' ")or die(mysql_error());
	 echo "<script> window.location='../home.php?cat=data/grafik&page=grafik_bayi'</script>";
	 }
                   
} else {
    ?> <script> alert('Login Gagal <?php echo $username."--".$password; ?>!!!'); 	
        document.location="index.php"; 	      
      </script> <?php
}
                  
?>