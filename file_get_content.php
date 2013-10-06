<?php
$homepage = file_get_contents('http://blog.codingwear.com/');
echo strip_tags($homepage);
?>