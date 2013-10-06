<?php	
	/* error_reporting(0);
	#variabel kab
	$kab			= $_GET['kab'];
	$perkab			= $_GET['perkab'];
	$per2kab		= $_GET['per2kab'];
	$tot			= $_GET['tot'];
	$key			= $_GET['key'];
	$valid_key		= md5('PilkadaBaliKab2013');
	
	if($key == $valid_key)
	{
		$txt = $perkab.';'.$per2kab.';'.$tot.';';
		$file = "data.suara.kab.".$kab.".txt";	
		
		//file_put_contents('/mnt/quickcount/'.$file, $txt);      
		file_put_contents($file,$txt);
		$response = "TRUE";
		
		#bikin memcHED
		include ("class.cache.php");
		$cache = new cache;	
		
		$_key = 'l6_pilkada';		
		$result = $cache->get($_key);
		if (empty($result)) {
			$cache->set($_key, $_GET);
		} else {
			$cache->replace($_key, $_GET);
		}		
		echo "succes";
	
	}
	else{ 
		echo "error";
	}    */

?>