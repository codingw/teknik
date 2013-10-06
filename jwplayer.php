<script type="text/javascript" src="jwplayer/jwplayer.js"></script>
<script>jwplayer.key="6ds+L0qV9birN8Uox+W70b0ignGMSHohgRW5JQ=="</script>
 <script type="text/javascript">
           /*  jwplayer('video-preview').setup({
                'flashplayer': 'http://assets.liputan6.com/facelift/swf/player510.swf',
                'width'      : '500',
                'height'     : '400',
                'autostart'  : true,
                'skin'       : 'http://assets.liputan6.com/facelift/skin/glow510.zip',
                'plugins': {
                    'http://assets.liputan6.com/facelift/js/livestream.js': {}
                },
                'playlist': [{
                    'title'    : 'Web SCTV',
                    'image'    : 'http://assets.liputan6.com/facelift/images/streaming/stream-sctv.jpg',
                    'provider' : 'rtmp',
                    'streamer' : 'rtmp://stream.telin.swiftserve.com/vod/0001-SCTV/flv',
                    'levels'   : [{ bitrate:"320", file:"sctv-testvod/seleb/100621celebrity4.flv" },{ bitrate:"480", file:"sclive_256" },{ bitrate:"650", file:"sclive_500" }]
                }]
            }); */
            </script>
			
<div id="myElement">Loading the player...</div>
<script type="text/javascript">
   /*  jwplayer("myElement").setup({
        file: "http://localhost/teknik/upload/Inkscape_Buttons_Tutorial.mp4",		
        image: "http://localhost/teknik/upload/medium.jpg",
		width   : "655",
		height  : "340",
		"autostart"  : true
    }); */
</script>
<script type="text/javascript">
    jwplayer("myElement").setup({
		rtmp: {
			bufferlength: 0.1
		},
		file: "rtmp://v.liputan6.com/sclive",        
        image: "http://assets.liputan6.com/facelift/images/streaming/stream-sctv.jpg",
		height: 360,
		primary: "flash",
		width: 640,
		autostart : true
    });
</script>