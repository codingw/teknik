
<div style="width:200px;margin=0 auto;">
<script src="http://code.jquery.com/jquery-latest.js"></script>
<?php
$username = "berbagitweet";
$trends_url = "http://api.twitter.com/1/statuses/followers/".$username.".json"; 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $trends_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$curlout = curl_exec($ch);
curl_close($ch);
$response = json_decode($curlout, true);
foreach($response as $friends){
$thumb = $friends['profile_image_url'];
$url = $friends['screen_name'];
$name = $friends['name'];
?>
<a title="<?php echo $name;?>" href="http://www.twitter.com/<?php echo $url;?>">
	<img class="photo-img" src="<?php echo $thumb?>" border="0" alt="" width="40" />
</a>
<?php
}
?>
</div>


