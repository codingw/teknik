<div id="streamingcontent" style="position:relative;height:400px;">
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
	$url_target = 'http://devil.liputanchampions.com';
	$kodeHTML =  bacaHTML($url_target);
	$pecah = explode('<div id="streamingcontent" style="position:relative;height:400px;">', $kodeHTML); //tag awal, harus unik
	$pecahLagi = explode('<div class="boundaryshortfull"></div>', $pecah[1]); //tag akhir harus unik
	echo $pecahLagi[0]; // hasil ori dari target	
	?>
</div>