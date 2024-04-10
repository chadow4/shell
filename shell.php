<?php

$phpinfo = phpinfo();
$base64_php_info = base64_encode($php_info);

echo "<?php echo \"$base64_php_info\"; ?>";

?>
