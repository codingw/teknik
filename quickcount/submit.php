<title>Push Data Quick Count</title>
<?php

	#error_reporting(0);
	$ip 		= $_SERVER['REMOTE_ADDR'];
	$valid_ip 	= ;
	#cek valid ip address
	if($ip != $valid_ip)
	{		
		exit("IP anda tidak valid");
	}
	else
	{
		#koneksi ke database
		$con_sctv   = mysql_connect('172.17.2.251:3306', 'root', '') or die(mysql_error());
		#echo "SCTV DB CONN OK<br>\n";
		$con_ivm    = mysql_connect('172.17.235.196:3306', 'pilkada', 'pilkada2012') or die(mysql_error());
		#echo "IVM DB CONN OK<br>\n";
		#database
		mysql_selectdb('pilkada2012', $con_ivm) or die(mysql_error());
		mysql_selectdb('app_ticker', $con_sctv) or die(mysql_error());

		#http://devil.cms.scm.co.id/pilkada/quickcount/submit.php?nama1=PAS&percent1=20&nama2=PASTIKERTA&percent2=80&totalpercent=25.2&key=PilkadaBali2013

		#variabel
		$nama1 			= $_GET['nama1'];
		$percent1		= $_GET['percent1'];
		$nama2 			= $_GET['nama2'];
		$percent2 		= $_GET['percent2'];
		$totalpercent 	= $_GET['totalpercent'];
		$updateddate	= date("Y-m-d H:i:s");
		$valid_key		= md5('PilkadaBali2013');

		#key API
		$api = $_GET['key'];

		// jika kode API nya 'PilkadaBali2013' maka lakukan proses kirim data
		// jika kode API nya salah, maka proses validasi tidak dilakukan (diberikan respon "FALSE")
		if ($api == $valid_key)
		{   
		   $query   = "INSERT INTO tbl_pilkada (nama1, persen1, nama2, persen2, total, publish) ";
		   $query  .= "VALUES('".$nama1."', ".$percent1.", '".$nama2."', ".$percent2.", ".$totalpercent.", '".$updateddate."')";
		   
		   #insert ke indosiar
		   mysql_query("TRUNCATE TABLE tbl_pilkada", $con_ivm) or die(mysql_error());
		   mysql_query($query, $con_ivm) or die('IVM: '.mysql_error());
			
		   #insert ke sctv
		   mysql_query("TRUNCATE TABLE tbl_pilkada", $con_sctv) or die(mysql_error());
		   mysql_query($query, $con_sctv) or die('SCTV: '.mysql_error());

			
		   mysql_close($con_ivm);
		   mysql_close($con_sctv);
			 
		   $response = "succes";
		}
		else $response = "error";

		echo $response;
	}
?>