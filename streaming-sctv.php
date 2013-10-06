<script type="text/javascript" src="http://assets.liputan6.com/facelift/js/jwplayer.js"></script>
 <script type="text/javascript">
            jwplayer('video-preview').setup({
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
                    'streamer' : 'rtmp://v.liputan6.com/sclive',
                    'levels'   : [{ bitrate:"320", file:"sclive_128" },{ bitrate:"480", file:"sclive_256" },{ bitrate:"650", file:"sclive_500" }]
                }]
            });
            </script>