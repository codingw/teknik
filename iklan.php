<script type="text/javascript">
var nextVideo = "http://localhost/teknik/video/realvideo.mp4";
var videoPlayer = document.getElementById('videoPlayer');
videoPlayer.onended  = function(){
   videoPlayer.src = nextVideo;   
}
</script>

<video id="videoPlayer" width="320" height="240" controls="controls">
  <source src="http://localhost/teknik/video/ads.mp4" type="video/mp4" />
</video>
