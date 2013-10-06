<?php
	$ip 		= $_SERVER['REMOTE_ADDR'];
	$valid_ip 	= array(
					"127.0.0.1",
					"202.152.5.36"
				);
	
	#cek valid ip address
	if($ip == $valid_ip[0] || $ip == $valid_ip[1])
	{		
		echo "hore";
	}
	else
	{
		exit("IP anda tidak valid");
	}
	
?>