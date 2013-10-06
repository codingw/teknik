<?php
$x = $_GET['key'];
echo "KEY : ".$x."<br />";
echo "Enkripsi : ".md5($x);
?>