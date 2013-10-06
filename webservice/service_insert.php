<?php

// koneksi ke database
mysql_connect("localhost", "root", "root");
mysql_select_db("ws");

$nama = $_GET['nama'];
$email = $_GET['email'];
// membaca kode API dari GET request
$api = $_GET['api'];

// jika kode API nya '1234' maka lakukan proses validasi username dan password
// jika kode API nya salah, maka proses validasi tidak dilakukan (diberikan respon "FALSE")
if ($api == "1234")
{
   
   $query = "INSERT INTO profile (nama,email) VALUES ('$nama','$email')";
   $hasil = mysql_query($query);
   
    $response = "TRUE";  
}
else $response = "FALSE";

// membuat header dokumen XML
header('Content-Type: text/xml');
echo "<?xml version='1.0'?>";

// membuat tag data respon pada dokumen XML
echo "<data>";
echo "<response>".$response."</response>";
echo "</data>";
?>