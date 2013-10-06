<title>Detikcom</title>
<b><h2>Detikcom</h2></b>
<?php
$content = file_get_contents("http://rss.detik.com/index.php/news");
$xml = simplexml_load_string($content);
//print_r($xml);	
foreach($xml->channel->item as $row)
{
	$date = substr($row->pubDate, 0, -9);

	echo "<div style=height:190px;width:250px;font-size:12px;background-color:#0099FF;color:white;>";	
	echo "<b><a target=_blank href=read.php?go=".$row->link.">";
	echo $row->title;
	echo "</a></b><br>";
	echo $date;
	echo "<br>";
	echo $row->description;
	echo "<br>";
	echo "</div>";

}		

?>
