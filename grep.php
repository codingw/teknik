<?php
    $doc = new DOMDocument();
    $doc->loadHTML('&lt;img src="http://example.com/img/image.jpg" ... &quot;');
    $imageTags = $doc->getElementsByTagName('img');

    foreach($imageTags as $tag) {
        echo $tag->getAttribute('src');
    } 
	
?>