<?php
//cek ip address
/* $ip_client = $_SERVER['REMOTE_ADDR']; 
$ip_allow = '::1';//'202.58.124.112';
if ($ip_client != $ip_allow)
	header('Location:http://google.com'); */
?>
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
?>
<?php
$kodeHTML =  bacaHTML('http://www.livescore.com/default.dll');
$pecah = explode('<td width="468" valign="top" bgcolor="#111111">',$kodeHTML); //awal yg mau diambil, harus unik
$pecahLagi = explode('<td width="4" bgcolor="#111111">', $pecah[1]); //akhir dari target yg diambil , harus unik
$result =  str_replace('/default.dll','http://www.livescore.com/default.dll',$pecahLagi[0]); //ganti link
$replace_css = str_replace('#333333','#336699',$result);

echo $replace_css;
?>
