<?php
$nama = $_POST['nama'];
$email = $_POST['email'];
//validasi
if(strlen($nama)==0 || strlen($email)==0)
{
	//echo "<b style='color:red;'>ERROR.!!!</b><br /><br /><br />";	
	echo "<script>alert('Error..!');window.location='http://teknik.net/ws/insert.html';</script>";
	//header('Location:http://teknik.net/ws/insert.html');	
}
else
{
		$url = "http://teknik.net/ws/service_insert.php?nama=".$nama."&email=".$email."&api=1234"; 
		$bacaxml = simplexml_load_file($url);
		foreach($bacaxml->response as $respon)
		{
		  if ($respon == "TRUE") echo "Insert Sukses";
		  else if ($respon == "FALSE") echo "Insert Gagal";
		}  
}
?>