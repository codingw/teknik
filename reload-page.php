<html>
<head>
<!-- For ease i'm just using a JQuery version hosted by JQuery- you can download any version and link to it locally -->
<script src="http://code.jquery.com/jquery-latest.js"></script>
 
<script>
var refreshId = setInterval(function()
{
     $('#responsecontainer').load('memcached_videoliputan6.php?id=123');
}, 30000);
</script>
</head>
<body>
 
<div id="responsecontainer" style="display:none;">
</div>
</body>