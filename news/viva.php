<title>Viva</title>
<b><h2>Viva</h2></b>
<?php
$content = file_get_contents("http://rss.viva.co.id/get/all");
$xml = simplexml_load_string($content);
//print_r($xml);	
foreach($xml->channel->item as $row)
{
	$date = substr($row->pubDate, 0, -9);

	echo "<div style=height:190px;width:250px;font-size:12px;background-color:#D80000;color:white;>";	
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
