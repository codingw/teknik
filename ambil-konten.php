<?php
/* $link = "";
$x = file_get_contents($link);
//print_r($x);
echo mysql_real_escape_string($x); */
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

$kodeHTML =  bacaHTML('http://news.detik.com/read/2013/03/23/104450/2201781/10/pelaku-tembak-4-tahanan-di-lapas-sleman-dari-jarak-1-meter?9911012');

$pecah = explode('</div><strong>', $kodeHTML); //awal yg mau diambil, harus unik
//print_r($pecah);
$pecahLagi = explode('<div class="septiadi test">', $pecah[1]); //akhir dari target yg diambil , harus unik
//print_r($pecahLagi);

echo strip_tags($pecahLagi[0]); 

?>
