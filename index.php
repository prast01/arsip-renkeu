<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="icon" type="image/png" href="img/archive_icon.png" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>E-ARSIP</title>
<link rel="stylesheet" href="style-login.css" />
<link href='http://fonts.googleapis.com/css?family=Oleo+Script' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="jquery-1.7.min.js"></script>
<script type="text/javascript">
	<!-- Javascript code here -->
</script>
</head>

<body>
<div class="lg-container">
	<h1>E-ARSIP</h1>
	<h4 align="center">SUBAG REN-KEU <BR />DKK JEPARA</h4>
	<form action="" id="lg-form" name="lg-form" method="post">

		<div>
			<label for="username">Username:</label>
			<input type="text" name="username" id="username" placeholder="username"/>
		</div>

		<div>
			<label for="password">Password:</label>
			<input type="password" name="password" id="password" placeholder="password" />
		</div>

		<div>
			
			<input type="submit" name="login" value="Login">
		</div>

	</form>
	<div id="message"></div>
</div>
</body>
</html>

<?php
include "koneksi.php";

$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$login = isset($_POST['login']) ? $_POST['login'] : '';

if($login){
$user = mysql_query("SELECT * from user where username='$username' and password='$password'") or die(mysql_error());
$tot = mysql_num_rows($user);
$r = mysql_fetch_array($user);
if ($tot > 0) { //jika data ada maka akan diproses
	session_start();
    $_SESSION['SESS_USERNAME']     = $r['username'];
    $_SESSION['SESS_PASSWORD']     = $r['password'];
    echo "<script> window.location='hal_admin.php?page=dashboard'</script>";
} else {
?> <script> alert('Login Gagal !!!');   
        document.location="index.php";        
      </script> <?php
}
}
?>
