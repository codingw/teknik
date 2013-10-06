<title>Memcache video liputan6</title>
<div style="background-color:orange;height:100px;">
	<center>
		<br><h2> Get Key Memcache Video Liputan6</h2>	
	</center>
</div>

<div style="margin-left:300px;">
<?php
# created by yuda
# support Indra
# yuda.pc@gmail.com
	error_reporting(0);	
	$id = abs((int) $_GET['id']);
	$key = "web:l6_video_detail_".$id;
	if (strlen($id) != 0 && $id !=0)
	{
		$get_memcached = md5($key);
	}
	else
	{
		$get_memcached ="";
		$id = "";
	}
	$url_link_memcached = 'http://202.58.124.66/memcached/commands.php';
	$server = '&nbsp; - &nbsp;192.168.7.1:11211';
?>
<?php
if (strlen($id) != 0)
{
?>
<br />
ID video:<?=$id?> 
<br />
Key : <?=$get_memcached?>
<br />
Url : <a target="_blank" href='<?=$url_link_memcached?>'><?=$url_link_memcached?></a>
<br />
Server : <?=$server?>
<br />
<a href="memcached_videoliputan6.php?id=">
<input type="submit" value="Ulangi" style="margin-left:185px;width:200px;height:50px;" >
</a>
<?php
}

if (strlen($id) == 0 || $id == "")
{
?>
 <br /><br /><br />
<form action="memcached_videoliputan6.php" method="get" name="memcached">
ID steraming (didapat dari url):<input type="number" required name="id" onkeypress="return restrictInput(this, event, digitsOnly);">
<br><br>
<input type="submit" value="kirim" style="margin-left:185px;width:200px;height:50px;" >
</form>
<?php }?>
</div>

<div style="margin-top:250px;background-color:orange;height:100px;">
<hr>
	<center>
		<p style="margin-top:30px;align:center;">Develop by Tim IT <a href="http://liputan6.com">liputan6.com</a></p>
	</center>
</div>
<script type="text/javascript">
    // Restrict user input in a text field
    // create as many regular expressions here as you need:
    var digitsOnly = /[1234567890]/g;
    var integerOnly = /[0-9\.]/g;
    var alphaOnly = /[A-Za-z]/g;
    var usernameOnly = /[0-9A-Za-z\._-]/g;

    function restrictInput(myfield, e, restrictionType, checkdot){
        if (!e) var e = window.event
        if (e.keyCode) code = e.keyCode;
        else if (e.which) code = e.which;
        var character = String.fromCharCode(code);

        // if user pressed esc... remove focus from field...
        if (code==27) { this.blur(); return false; }

        // ignore if the user presses other keys
        // strange because code: 39 is the down key AND ' key...
        // and DEL also equals .
        if (!e.ctrlKey && code!=9 && code!=8 && code!=36 && code!=37 && code!=38 && (code!=39 || (code==39 && character=="'")) && code!=40) {
            if (character.match(restrictionType)) {
                if(checkdot == "checkdot"){
                    return !isNaN(myfield.value.toString() + character);
                } else {
                    return true;
                }
            } else {
                return false;
            }
        }
    }
</script>