<?php
/*
function explode digunakan untuk memisahkan string berdasarkan simbol tertentu
*/
$str = "http://xbosyuda.blogspot.com;intinya.mp4";
//print_r (explode(";",$str));
$datax = explode(";",$str);
echo $datax[0];
echo "<br>";
echo $datax[1];
echo "<br>";
echo strlen($datax[1]);
?> 
