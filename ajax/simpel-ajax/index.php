<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>jQuery Ajax</title>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
$(function() {
	$('#loading').ajaxStart(function(){
		$(this).fadeIn();
	}).ajaxStop(function(){
		$(this).fadeOut();
	});

	$('#menu a').click(function() {
		var url = $(this).attr('href');
		$('#content').load(url);
		return false;
	});
});
</script>

<style>
body { font-family: Arial; font-size:12px; margin:0px auto; }
#content { 
width: 500px;
margin: 0px auto;
padding: 10px;
border: 1px dashed #999; 
}
a{
text-decoration:none;
color:#FF9900;
font-weight:bold;
}
.input{
background-color:#FF9900;
border:1px solid #333333;
padding:5px;
font-family:Arial;
font-size:12px;
}
.tombol{
background-color:#000000;
color:#FFFFFF;
border:1px solid #333333;
padding:5px;
}
.tombol:hover{
background-color:#FF9900;
cursor:pointer;
color:#FFFFFF;
border:1px solid #333333;
padding:5px;
color:#000000;
}
#menu{
height:40px;
padding:10px;
width:500px;
margin:0px auto;
}
#bg-menu{
background-color:#000000;
float:left;
padding:10px;
border: 1px dashed #CC9900; 
}
#bg-menu:hover{
background-color:#CC9900;
float:left;
padding:10px;
border: 1px dashed #000; 
}
#menu a{
text-decoration:none;
color:#FF9900;
}
#menu a:hover{
text-decoration:none;
color:#FFFFFF;
}
#loading {
position:absolute;
bottom:0;
width:100%; 
color:#FFFFFF;
text-align:center;
padding:8px 0px 8px 0px;
margin:0px auto;
background-color:#000000;
}
</style>
</head>
<body>
<div id="loading" style="display:none"><img src="images/loading.gif" /><br />Mohon tunggu. Data sedang dimuat.....</div>
<div>
	<div id="menu">
		<a href="isi.php?modul=home"><div id="bg-menu">Beranda</div></a>
		<a href="isi.php?modul=about"><div id="bg-menu">Tentang Saya</div></a>
		<a href="isi.php?modul=guestbook"><div id="bg-menu">Guestbook</div></a>
		<a href="isi.php?modul=hubungi"><div id="bg-menu">Hubungi Saya</div></a>
	</div>
</div>
	<div id="content">
		AJAX adalah sebuah teknik pemrograman yang memungkinkan kita melakukan pertukaran data dengan server di belakang layar, sehingga halaman web tidak harus dipanggil ulang hanya untuk mengganti sebagian kecil dari isi halaman.<br><br>
Salah satu fungsi di jQuery untuk mempermudah penggunaan ajax adalah fungsi load(), yang memiliki 3 buah parameter sebagai berikut:
<br><br>
<b>load(url, params, callback)</b><br><br>
Keterangan :
<ul>
<li>url (String): Alamat url dari file yang akan di load</li>
<li>params (Object): Data yang akan dikirimkan ke server </li>
<li>callback (Function): Fungsi yang akan dipanggil ketika data berhasil di ambil dari server</li>
</ul>
Contoh Penggunaan :
<pre>
$(function() {
	$('#loading').ajaxStart(function(){
		$(this).fadeIn();
	}).ajaxStop(function(){
		$(this).fadeOut();
	});

	$('#menu a').click(function() {
		var url = $(this).attr('href');
		$('#content').load(url);
		return false;
	});
});
</pre>
	</div>
</body>
</html>