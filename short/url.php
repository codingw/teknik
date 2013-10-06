<?php
	/* $url = "http://202.58.124.161:18288/cmsmobile/remote/stream?file=/data/devel/mobile/app/media/uploaded/Episode-26-01.3gp";
	file_get_contents($url); */
?>

<?php 
    /* $file_name = 'Episode-26-01.3gp';
    $file_url = 'http://202.58.124.161:18288/cmsmobile/remote/stream?file=/data/devel/mobile/app/media/uploaded/Episode-26-01.3gp';
    header('Content-Type: video/3gpp');
    header("Content-Transfer-Encoding: Binary"); 
    header("Content-disposition: attachment; filename=\"".$file_name."\""); 
    readfile($file_url); */?>
	
<?php
	#$file = 'Episode-26-01.3gp';
	$file_url = 'http://202.58.124.161:18288/cmsmobile/remote/stream?file=/data/devel/mobile/app/media/uploaded/Episode-26-01.3gp';
	/* header('Content-Description: File Transfer'); 
	header('Content-Type: video/3gpp'); 
	header('Content-Disposition: attachment; filename='.basename($file_url)); 
	header('Content-Transfer-Encoding: binary'); 
	header('Expires: 0'); 
	header('Cache-Control: must-revalidate, post-check=0, pre-check=0'); 
	header('Pragma: public'); 
	header('Content-Length: ' . filesize($file_url)); 
	ob_clean(); flush(); */ 
	//readfile($file_url);
	file_put_contents($file_url);
?>