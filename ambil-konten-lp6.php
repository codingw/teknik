<?php

function koneksi(){
	mysql_connect('127.0.0.1','root','root');
	mysql_select_db('live_skor');
}

function cek_url($url){
	koneksi();
	$sql = mysql_query("Select * from tbl_news where source='".$url."'");
	if(mysql_num_rows($sql) > 0){
		return FALSE; #data sudah ada		
	}else{
		return TRUE; #data belum ada
	}
}

$rss = 'http://bola.liputan6.com/rss';
$content=@file_get_contents($rss);
$xml = simplexml_load_string($content);
foreach($xml->channel->item as $row)
{	
	$title = $row->title;	
	$desc = strip_tags($row->description);
	$url = $row->link;
	$datenow = date("Y-m-d H:i:s");
	#cek apakah link sudah ada atau belum
	if (cek_url($url) === TRUE){		
		#insert content ke tbl_news
		error_reporting(0);
		$content=@file_get_contents($url);
		$awal=explode('<strong>Liputan6.com,',$content); #tag awal 
		$akhir=explode('<div style="float: right;background-color: #DFDFDF">',$awal[1]); #tag akhir
		$temp=strip_tags($akhir[0]);
		if(strlen($temp) > 0)
		{
			koneksi();
			mysql_query("INSERT INTO `tbl_news` (`source`, `date`, `title`, `desc`, `content`) VALUES
					('".$url."','".$datenow."','".$title."','".$desc."','".$temp."')
					");
		}		
		echo "sukses<br>";
	}else{echo "data udah ada<br>";}
} 
		

?>
