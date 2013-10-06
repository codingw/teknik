<?php
if($_GET['modul']=='home')
{
echo "AJAX adalah sebuah teknik pemrograman yang memungkinkan kita melakukan pertukaran data dengan server di belakang layar, sehingga halaman web tidak harus dipanggil ulang hanya untuk mengganti sebagian kecil dari isi halaman.<br><br>
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
";
}
else if($_GET['modul']=='about')
{
echo "<img src='images/lumbung.jpg' width=150px; style='background-color:#000; border:1px dashed orange; margin:5px; padding:5px; float:left;'>Hehe.. mungkin gak terlalu penting kenalan dengan siapa yang punya blog untuk curhatan dan keluh kesah seorang mahasiswa TI ini. Karena suatu dan lain hal, saya isi aja sedikit informasi pribadi saya yang mungkin gak terlalu penting untuk rekan-rekan yang berkunjung ke blog ini (emang dasarnya gak penting).
<br><br>
Saya ini cuma mahasiswa TI biasa, yang masih sangat kutu kupret + sontoloyo dan jauh dari kata sempurna. Selain itu juga, seorang mahasiswa yang tidak puas dengan keadilan yang diterapkan di kampus. Walopun cuma seorang kutu kupret yang sontoloyo dan gak punya keahlian apa-apa, tapi punya semangat berbagi (kalo bagi-bagi uang, tak pikir-pikir dulu yaw :D ) yang sangat tinggi. Bisa dibilang, saya ini adalah salah satu makhluk open source. Gara-gara semangat open source yang sangat tinggi, akhirnya saya banyak menerima proyek 2M (Makasi Mas) alias proyek TengKyu. Yang penting tetap semangat aja deh, hitung-hitung cari pengalaman (alasan lawas)..";
}
else if($_GET['modul']=='guestbook')
{
?>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
 <script type="text/javascript">
	$(document).ready(function(){
		$("#formkirim").validate({
			debug: false,
			rules: {
				nama: "required",
				pesan: "required",
				email: {
					required: true,
					email: true
				}
			},
			messages: {
				nama: " * Masih kosong",
				email: " * Tidak Valid",
				pesan: " * Masih Kosong",
			},
			submitHandler: function(form) {
				$.post('isi.php?modul=kirim', $("#formkirim").serialize(), function(data) {
					$('#content').html(data);
				});
			}
		});
	});
	</script>
	<form method="post" id="formkirim" name="formkirim" action="">
<table width="100%" cellpadding="5">
<tr><td valign="top">Nama</td><td><input type="text" name="nama" class="input" size="50"></td></tr>
<tr><td valign="top">Email</td><td><input type="text" name="email" class="input" size="50"></td></tr>
<tr><td valign="top">Pesan</td><td><textarea name="pesan" class="input" rows="8" cols="50"></textarea></td></tr>
<tr><td></td><td><input type="submit" value="Kirim Pesan" class="tombol"></td></tr>
</table></form>
	<div id="content" style="display:none"></div>
<?php
}
else if($_GET['modul']=='kirim')
{
echo "Pesan anda Terkirim...!!!<br>";
echo "Nama : ".$_POST['nama']."<br>";
echo "Email : ".$_POST['email']."<br>";
echo "Pesan : ".$_POST['pesan']."<br>";
}
else if($_GET['modul']=='hubungi')
{
?>
<ul>
<li><span style="font-weight: normal;"><a title="Facebook Gede Lumbung" href="http://facebook.com/gede.lumbung.suma.wijaya" target="_blank">Facebook</a></span></li>
<li><span style="font-weight: normal;"><a title="Twitter Gede Lumbung" href="http://twitter.com/sumawijaya" target="_blank">Twitter</a></span></li>
<li><span style="font-weight: normal;"><a title="Koprol Gede Lumbung" href="http://koprol.com/users/gedelumbung" target="_blank">Koprol</a></span></li>
<li><span style="font-weight: normal;"><a title="Everyday Like Sunday" href="http://everydaylikesunday.co.cc" target="_blank">Everyday Like Sunday</a></span></li>
</ul>

<?php
}
?>
