<?php

// koneksi ke mysql
mysql_connect("localhost", "root", "root");
mysql_select_db("teknik");

// mencari jumlah laki-laki dari database
$query = "SELECT count(*) AS jumCowok FROM mhs WHERE jenisKelamin = 'LAKI-LAKI'";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
$jumCowok = $data['jumCowok'];

// mencari jumlah perempuan dari database
$query = "SELECT count(*) AS jumCewek FROM mhs WHERE jenisKelamin = 'PEREMPUAN'";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
$jumCewek = $data['jumCewek'];

// menghitung total mahasiswa
$total = $jumCowok + $jumCewek;

// menghitung prosentase laki-laki dan perempuan
$prosenCowok = $jumCowok/$total * 100;
$prosenCewek = $jumCewek/$total * 100;

// menentukan panjang grafik batang berdasarkan prosentase
if ($prosenCowok == 0) $panjangGrafikCowok = 1;
else $panjangGrafikCowok = $prosenCowok * 30 / 100;

if ($prosenCewek == 0) $panjangGrafikCewek = 1;
else $panjangGrafikCewek = $prosenCewek * 30 / 100;



?>

<h2>Statistik Mahasiswa Berdasarkan Jenis Kelamin</h2>

<p><b>Laki-laki</b> (Jumlah: <?php echo $jumCowok; ?> | <?php echo $prosenCowok; ?>%) <div style="height: 10px; width: <?php echo $panjangGrafikCowok; ?>%; background-color: red;" title="Laki-laki (Jumlah: <?php echo $jumCowok; ?> | <?php echo $prosenCowok; ?>%)"></div></p>

<p><b>Perempuan</b> (Jumlah: <?php echo $jumCewek; ?> | <?php echo $prosenCewek; ?>%) <div style="height: 10px; width: <?php echo $panjangGrafikCewek; ?>%; background-color: red;" title="Perempuan (Jumlah: <?php echo $jumCewek; ?> | <?php echo $prosenCewek; ?>%)"></div></p>