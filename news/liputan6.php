<title>Liputan6</title>
<b><h2>Liputan6</h2></b>
<?php
error_reporting(0);
$content = file_get_contents("http://news.liputan6.com/rss");
$xml = simplexml_load_string($content);
//print_r($xml);	
foreach($xml->channel->item as $row)
{
	$date = substr($row->pubDate, 0, -9);

	echo "<div style=height:130px;width:250px;font-size:12px;background-color:#0099CC;color:white;>";	
	echo "<b><a target=_blank href=read.php?go=".$row->link.">";
	echo $row->title;
	echo "</a></b><br>";
	//echo $date;
	echo $row->description;
	echo "<br>";
	echo "</div>";

}		

?>
