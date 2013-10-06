<?php

require_once('../../lib/nusoap.php');

// dua bilangan yang akan dijumlahkan atau dikurangi
$bil1 = 10;
$bil2 = 25;

// instansiasi obyek untuk class nusoap client
$client = new nusoap_client('http://teknik.net/webservice/nusoap/blog.rosihanari.net/contoh2/server.php');
// proses call method 'jumlahkan' di script server.php yang ada di komputer B
$result = $client->call('jumlahkan', array('x' => $bil1, 'y' => $bil2));

// menampilkan format XML hasil response
echo $client->response;

?>