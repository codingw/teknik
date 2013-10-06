<?php
$current_url        = "http://".$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
echo "{$current_url}";
echo '<br><pre>';
print_r($_SERVER);
echo '</pre>';
?>