<?php
session_start();
unset($_SESSION['SESS_USERNAME']);
unset($_SESSION['SESS-PASSWORD']);
echo "<script>window.location='index.php'</script>";

?>