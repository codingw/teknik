<?php
/* merubah ke PHP object */
$xmlfile = "http://api.twitter.com/1/users/show.xml?screen_name=rumahdot";
$data = simplexml_load_file($xmlfile);

/* print array object */
echo "<pre>";
print_r($data);
echo "</pre>";

echo "<br /><hr /><br />";

// ok. Mari kita echo deskripsi dan twetnya saja.
// pikirkan $data sudah mewakili posisi root element <user>

/* echo deskripsi */
echo "<strong>";
echo $data->description;
echo "</strong>";

echo "<br /><hr /><br />";

/* echo satu tweet */
echo "<strong>";
echo $data->status->text;
// atau echo $data->status[0]->text; //sama saja
echo "</strong>";
?>