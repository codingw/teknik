<?php
	#
	# Ambil Content
	# Author : Yuda PC
	# E-mail : boxguecom@gmail.com
	#
	$url='http://www.livescore.com/default.dll';
	$content=@file_get_contents($url);
	$awal=explode('<td width="468" valign="top" bgcolor="#111111">',$content); #tag awal 
	$ahir=explode('<td width="4" bgcolor="#111111">',$awal[1]); #tag akhir
	$temp=$ahir[0];
	
	$result =  str_replace('/default.dll','http://www.livescore.com/default.dll',$temp); #ganti link
	$replace_css  = str_replace('#333333','#f9f9f9',$result); #ganti css
	$replace_fix = str_replace('468','100%',$replace_css); #ganti width

	#koneksi ke mysql
	mysql_connect('localhost','root','root');
	mysql_select_db('live_skor');
	$sql = "INSERT INTO `live_skor`.`tbl_skor` (`content`) VALUES ('".mysql_real_escape_string($replace_fix)."');";
	mysql_query($sql) or die(mysql_error());	
	/* $exe = mysql_query($sql) or die(mysql_error());	
	if($exe)
	{
		echo "ok";
	}else{
		echo "error";
	} */
	
?>