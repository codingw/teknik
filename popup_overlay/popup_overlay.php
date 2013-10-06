<a href="javascript:popup('pop up overlay')">klik untuk melihat</a>
<div id="dialog-overlay"></div>
<div id="dialog-box">
	<div class="dialog-content">
		<div style="text-align: center;">
			<p>************************************************************************************************</p>
			<p>BAGIAN INI ADALAH TEMPAT KAMU BISA MENGISI DENGAN TEKS ATAU WIDGET LAINYA</p>
			<p>************************************************************************************************</p>

			<div id="dialog-message"></div>
			<a class="button" href="#">tutup kembali</a>
		</div>
	</div>
<style type="text/css">
	#dialog-overlay {
		width:100%; 
		height:100%;
		filter:alpha(opacity=50);
		-moz-opacity:0.5;
		-khtml-opacity: 0.5;
		opacity: 0.5;
		background:#000;
		position:absolute;
		top:0; 
		left:0;
		z-index:3000;
		display:none;
	}
	
	#dialog-box {
		-webkit-box-shadow: 2px 4px 60px red;
		-moz-box-shadow: 2px 4px 60px red;
		-moz-border-radius: 10px;
		-webkit-border-radius:10px;
		background:#eee;
		width:628px;
		position:absolute;
		z-index:5000;
		display:none;
	}
	
	#dialog-box .dialog-content {
		text-align:left;
		padding:5px;
		margin:13px;
		color:#000; 
		text-shadow: 1px 1px 2px #000;
		font-family:arial;
		font-size:15px;
	}
	
	a.button {
		margin:10px auto 0 auto;
		text-align:center;
		display: block;
		width:50px;
		padding: 5px 10px 6px;
		color: #fff;
		text-decoration: none;
		font-weight: bold;
		line-height: 1;
		background-color:blue;
		-moz-border-radius: 5px;
		-webkit-border-radius: 5px;
		-moz-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
		-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
		text-shadow: 0 -1px 1px rgba(0,0,0,0.25);
		border-bottom: 1px solid rgba(0,0,0,0.25);
		position: relative;
		cursor: pointer;
	}
	a.button:hover {
		background-color: #c33100;
	}
	
	#dialog-box .dialog-content p {
		font-weight:700; 
		margin:0;
	}
	
	#dialog-box .dialog-content ul {
		margin:10px 0 10px 10px;
		padding:0;
		height:50px;
	}
</style>
<script src="latoverlay.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function () {
	$('a.btn-ok, #dialog-overlay, #dialog-box').click(function () {
		$('#dialog-overlay, #dialog-box').hide();
		return false;
	});
	$(window).resize(function () {
		if (!$('#dialog-box').is(':hidden')) popup();
	}); 
});
function popup(message) {
	var maskHeight = $(document).height();
	var maskWidth = $(window).width();
	var dialogTop = (maskHeight/3) - ($('#dialog-box').height());
	var dialogLeft = (maskWidth/2) - ($('#dialog-box').width()/2);
	$('#dialog-overlay').css({height:maskHeight, width:maskWidth}).show();
	$('#dialog-box').css({top:dialogTop, left:dialogLeft}).show();
	$('#dialog-message').html(message);
}
</script>
</div>