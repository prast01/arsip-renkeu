<?php
$direktori = ".";
foreach ($_FILES["fileku"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["fileku"]["tmp_name"][$key];
        $name = $_FILES["fileku"]["name"][$key];
        move_uploaded_file($tmp_name, $direktori."/".$name);
        echo "File $name berhasil diupload <br>";
    }
}
?>