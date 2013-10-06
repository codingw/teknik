
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="UTF-8">
<title>sctv-channel-01</title>
<meta name="Description" content="sctv_live_channel-01" />
<script type="text/javascript" src="http://edge.telin.swiftserve.com/viocorp-sctv/vioplayer/liveplayer/js/swfobject.js"></script>
<style>
	html,body {
		width: 100%;
		height: 100%;
		margin:0;
		padding:0;
		background:#FFFFFF;
		font: bold 1em "Helvetica Neue", Helvetica, Arial, sans serif;
		color:#000;
	}
	#player {
		width: 810px;
		height: 456px;
		position: relative;
        /*display: none;*/
	}
	
	video {
		width: 810px;
		height: 456px;
	}
	.float-right{
		float:right;
		display:inline;
		margin-top:10px;
		}

	#vioplayer{
		background: #000000;
	}
    

</style>
<script type="text/javascript">
	/****************************************************
	AUTHOR: 	Viocorp
	COMPANY: 	Viocorp
	WEBSITE: 	www.viocorp.com
	****************************************************/
		
	 function initSWFPlayer(media, w, h, live) {
        var flashvars = {};
        flashvars.currentSrc = media;
        flashvars.themeColour = "000000";
        flashvars.iconColour = "FFFFFF";
        flashvars.modules = "http://edge.telin.swiftserve.com/viocorp-sctv/vioplayer/liveplayer/ModuleOSMFPlayer.swf,http://edge.telin.swiftserve.com/viocorp-sctv/vioplayer/liveplayer/ModuleJsControls.swf,http://edge.telin.swiftserve.com/viocorp-sctv/vioplayer/liveplayer/ModuleSkin.swf";
        flashvars.controls = "PlayPause,Volume,####,Fullscreen";
        flashvars.hdEnabled = "false";
        flashvars.skinUrl = "http://edge.telin.swiftserve.com/viocorp-sctv/vioplayer/liveplayer/skin.swf";
        flashvars.autoPlay = 'true';
        flashvars.controlsY = 0;
        flashvars.invertedControlsOrigin = "true";
        flashvars.autoHide = "3";
        flashvars.debug = "false";
        flashvars.posterFrameDefault = "";
        flashvars.posterFrameEnabled = "false";
        flashvars.posterFrameCentered = "false";
        flashvars.posterFrameFitScreen = "false";
        flashvars.hdEnabled = "false";
        flashvars.progressReportInterval = "10";
        flashvars.volume = "0.85";

        var params = {};
        params.allowfullscreen = "true";
        params.allowscriptaccess = "always";
        params.scale = "showall";
        params.bgcolor = "#000000";
        params.wmode = "transparent";
        var attributes = { id: "vioplayer" };
        swfobject.embedSWF("http://edge.telin.swiftserve.com/viocorp-sctv/vioplayer/liveplayer/Vioplayer.swf", "vioplayer", w, h, "10.0.0", "", flashvars, params, attributes, swfCallBack);
        //console.log("SWF");
    }
	
	
	function swfCallBack(e) {
			var iPhoneAgent = navigator.userAgent.match(/iPhone/i)
			var iPadAgent = navigator.userAgent.match(/iPad/i) 
			var iPodAgent = navigator.userAgent.match(/iPhone/i)
			var AndroidAgent = navigator.userAgent.match(/Android/i)
			var WebOSAgent = navigator.userAgent.match(/webOS/i)
			var BlackBerryAgent = navigator.userAgent.match(/BlackBerry/i)
			var WindowsPhoneAgent = navigator.userAgent.match(/Windows Phone/i)
			var GalaxyTablets = navigator.userAgent.match(/(GT-P1000|GT-P1000R|GT-P1000M|SGH-T849|SHW-M180S)/i)
			var WindowsTablets = navigator.userAgent.match(/Tablet PC/i)
				
				if( AndroidAgent || WebOSAgent || BlackBerryAgent || WindowsPhoneAgent){
					url ="http://edge.telin.swiftserve.com/live/viocorp-sctv/amlst:sctv-channel-01m/playlist.m3u8"
					document.getElementById("vioplayer").setAttribute("src", url);
				 }
				  
				else if( iPhoneAgent || iPodAgent){
					url ="http://edge.telin.swiftserve.com/live/viocorp-sctv/amlst:sctv-channel-01m/playlist.m3u8";
					document.getElementById("vioplayer").setAttribute("src", url);
				}
				
				else if(iPadAgent){
					url ="http://edge.telin.swiftserve.com/live/viocorp-sctv/amlst:sctv-channel-01m/playlist.m3u8"
					document.getElementById("vioplayer").setAttribute("src", url);
				 }
				 
				else if(GalaxyTablets || WindowsTablets){
					url ="http://edge.telin.swiftserve.com/live/viocorp-sctv/amlst:sctv-channel-01m/playlist.m3u8";
					document.getElementById("vioplayer").setAttribute("src", url);
				 }
				 
				else{
					url ="http://edge.telin.swiftserve.com/live/viocorp-sctv/amlst:sctv-channel-01m/manifest.f4m"
					document.getElementById("vioplayer").setAttribute("src", url);
				}
				
			}
	
	
		initSWFPlayer('http://edge.telin.swiftserve.com/live/viocorp-sctv/amlst:sctv-channel-01/manifest.f4m','600','338','true');

</script>
</head>
<body>

	<div id="player">
		<video id="vioplayer" src="" x-webkit-airplay="allow" controls="controls"></video>
	</div>
	<div class="overlay-image">
		<!-- Comment or umcomment code below for - The webcast will start shortly -->
	    <!--<img src="http://webcast.viocorp.com/live/20130707_hungergames_singtel/images/pre.jpg" width="640"  height="360" border="0" alt="Hunger Games" />-->
	    
	    <!-- Comment or umcomment code below for - We will resume shortly -->
	    <!--<img src="http://webcast.viocorp.com/live/20130707_hungergames_singtel/images/live.jpg" width="640"  height="360" border="0" alt="Hunger Games" />-->
	    
	    <!-- Comment or umcomment code below for - The webcast has finished -->
	    <!--<img src="http://webcast.viocorp.com/live/20130707_hungergames_singtel/images/post.jpg" width="640"  height="360" border="0" alt="Hunger Games" />-->
	</div>

 <script>
   (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
   (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
   m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
   })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
 
   ga('create', 'UA-42233406-1', 'viocorp.com');
   ga('send', 'pageview');
 
 </script>	
</body>
</html>
