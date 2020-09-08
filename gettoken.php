<html>
<head>
<title></title>
</head>
<body>
<?php
// contoh alamat url dan no askes yang berhasil di ARC chrome--> http://dvlp.bpjs-kesehatan.go.id:9080/pcare-rest-dev/v1/peserta/0001101972352
$username = 'kotajepara';
$password = '3320';
//$consumerID = '1000';
//$consumersecret = '7789';

//Timestamp
date_default_timezone_set('UTC');
$tStamp = strval(time()-strtotime('1970-01-01 00:00:00'));

// Computes the signature by hashing the salt with the secret key as the key
$signature = hash_hmac('sha256', $username."&".$tStamp, $password, true);

// base64 encode…
$encodedSignature = base64_encode($signature);

// username dan pass puskesmas kedung I

?>
X-cons-id : <?php echo $username;?><br>
X-Timestamp : <?php echo $tStamp;?><br>
X-Signature : <?php echo $encodedSignature; ?><br>
X-Authorization : Basic <?php echo $Authorization;?>
                           
</body>
</html>
