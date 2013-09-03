<?php
function bacaHTML($url){
     // inisialisasi CURL
     $data = curl_init();
     // setting CURL
     curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($data, CURLOPT_URL, $url);
     // menjalankan CURL untuk membaca isi file
     $hasil = curl_exec($data);
     curl_close($data);
     return $hasil;
}

$kodeHTML =  bacaHTML('http://www.klikbca.com');
$pecah = explode('<table width="139" border="0" cellspacing="0" cellpadding="0">', $kodeHTML);
$pecahLagi = explode('</table>', $pecah[2]);
//print_r($pecahLagi);

?>
<table width="139" border="1" cellspacing="0" cellpadding="0">
<tr>
	<td>Kurs</td>
	<td>Jual</td>
	<td>Beli</td>
</tr>
<?=$pecahLagi[0];?>
</table>
