<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
    $host	 = "localhost";
    $user	 = "root";
    $pass	 = "";
    $dabname     = "arsib-renkeu";

    $conn = mysql_connect( $host, $user, $pass) or die('Could not connect to mysql server.' );
	
    mysql_select_db($dabname, $conn) or die('Could not select database.');
	
?>