<?php
	//Start session
	session_start();
	
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['SESS_USERNAME']) || (trim($_SESSION['SESS_USERNAME']) == '')) {
	   	?>
		<script language="javascript">alert('Anda Harus login');
		document.location='index.php'</script>
		<?php
		
		exit();
	}
?>