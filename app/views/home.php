<?php
  include(HEADER); 
  include(FEED_HEADER);
  include(IMG_SLIDER); 
  $_GET['title'] = "Latest Videos"; include(HEADING); 
?>
<!-- Latest Videos: starts -->
<div class="container latest-videos">
  <div class="col-xs-12 col-sm-12 col-md-8 clear-padding-l">
    <div class="col-xs-6 col-sm-4 col-md-4 clear-padding-l">
      <a href="https://www.youtube.com/watch?v=HomAZcKm3Jo" data-title="Sintel Movie Project" class="latest-video img-rounded" id="latest_vid1"></a>
    </div>
    <div class="col-xs-6 col-sm-4 col-md-4 clear-padding-l">
      <a href="https://www.youtube.com/watch?v=FFJ2mQ40bAs" data-title="Addhishree Cover Train" class="latest-video img-rounded" id="latest_vid2"></a>
    </div>
    <div class="hidden-xs col-sm-4 col-md-4 clear-padding-l">
      <a href="https://www.youtube.com/watch?v=Q1JTjLiV3ls" data-title="Jigloo Short Movie" class="latest-video img-rounded" id="latest_vid3"></a>
    </div>
  </div>
</div>
<!-- Latest Videos: ends -->
<?php
  include(FOOTER); 
?>