<title>Monitoring Berita Online</title>
<meta name="keyword" content="monitor,berita,online,detik,kompas,viva,liputan6,okezone">
<meta name="description" content="Portal Untuk melihat berita dari berbagai portal-portal berita Indonesia. Beritanya selalu terupdate. Cocok untuk anda yang selalu ingin tahu info terkini.">
<style>
body{color:black;}
a:link {text-decoration:none;color:#330000;}    /* unvisited link */
a:visited {text-decoration:none;} /* visited link */
a:hover {text-decoration:underline;}   /* mouse over link */
a:active {text-decoration:underline;}  /* selected link */
b{
color:orange;
}
</style>

<body>
<center>
<table style="margin-top:3px;" algin="center">
<tr colspan=4>
<td valign=top><?php include "detik.php";?></td>
<td valign=top><?php include "kompas.php";?></td>
<td valign=top><?php include "viva.php";?></td>
<td valign=top><?php include "liputan6.php";?></td>
<td valign=top><?php include "merdeka.php";?></td>
</tr>
</table>
</center>
</body>
<script src="js/jquery.js"></script>
<script type="text/javascript">
//untuk cek lama waktu user
var waktu = 60000; // 1 menit atau 60 detik

	setInterval("my_function();",waktu);
	function my_function(){		
		window.location = "http://boxgue.com/news";			
		
	}
//untuk window dialog
/*
function modalWin() {
if (window.showModalDialog) {
window.showModalDialog("xpopupex.htm","name",
"dialogWidth:255px;dialogHeight:250px");
} else {
window.open('xpopupex.htm','name','height=255,width=250,toolbar=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no ,modal=yes');
}
}*/
</script>




