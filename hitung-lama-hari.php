<?php
/* $n = 10;

// menentukan timestamp 10 hari berikutnya dari tanggal hari ini
$nextN = mktime(0, 0, 0, date("m"), date("d") + $n, date("Y"));

// menentukan timestamp 10 hari sebelumnya dari tanggal hari ini
$prevN = mktime(0, 0, 0, date("m"), date("d") - $n, date("Y"));

// menampilkan tanggal 10 hari berikutnya dari tanggal hari ini berdasarkan timestamp nya
echo date("d-m-Y", $nextN);

echo "<br>";

// menampilkan tanggal 10 hari sebelumnya dari tanggal hari ini berdasarkan timestamp nya
echo date("d-m-Y", $prevN); */

?>
<?php
$datetime1 = new DateTime('2009-10-11');
$datetime2 = new DateTime('2009-10-13');
$interval = $datetime1->diff($datetime2);
//echo $interval->format('%R%a days'); //+ 2
echo $interval->format('%a days');
echo "<br><br><br>";

?>