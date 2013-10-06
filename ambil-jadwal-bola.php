	<?php
	//$host = $_SERVER['HTTP_HOST'];
	//if($host === "boxgue.com" || $host === "www.boxgue.com")
	//{
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
		$url_target = 'http://www.liputanchampions.com';
		$kodeHTML =  bacaHTML($url_target);
		$pecah = explode('<div style="height:190px;overflow:auto;">', $kodeHTML); //tag awal, harus unik
		$pecahLagi = explode('</div><div id="rightcontent">', $pecah[1]); //tag akhir harus unik
		echo $_SERVER['HTTP_HOST'];
		echo "<br>";
		echo $pecahLagi[0]; // hasil ori dari target
	//}else{
	//	echo "hore,, anda berhasil :P";
	//}
	
	?>
