<title>Merdeka</title>
<b><h2>Merdeka</h2></b>
<?php
error_reporting(0);
$content = file_get_contents("http://www.merdeka.com/feed/");
$xml = simplexml_load_string($content);
//print_r($xml);	
foreach($xml->channel->item as $row)
{
	$date = substr($row->pubDate, 0, -9);

	echo "<div style=height:130px;width:250px;font-size:12px;background-color:#C0C0C0;color:black;>";	
	echo "<b><a target=_blank href=read.php?go=".$row->link.">";
	echo $row->title;
	echo "</a></b><br>";
	echo $date;
	echo "<br>";
	echo $row->description;
	echo "</div>";

}		

?>
