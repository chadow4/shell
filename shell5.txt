<?php
$f = file_get_contents('index.php');
$fdata = base64_encode($f);  
echo $fdata;
?>
