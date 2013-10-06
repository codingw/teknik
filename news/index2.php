<?php
if (file_exists('filexml.xml'))
  {
  $xml = simplexml_load_file('filexml.xml');
  }

echo $xml->getName() . "<br />";

foreach($xml->children() as $child)
  {
  echo $child->getName() . "<br />";
  }
?>
