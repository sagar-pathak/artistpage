<?php
  include(ACTIVE_PAGE_CHECKER);
  include(HEADER); 
  include(FEED_HEADER);
  include(IMG_SLIDER); 
?>
<div class="container latest-videos">
<!-- Latest Videos: starts -->
  <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 clear-padding-l">
    <?php $_GET['title'] = "Latest Videos"; include(HEADING); ?>
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
  <!-- Latest Videos: ends -->
  <div class="hidden-sm hidden-xs col-md-4 col-lg-4 clear-padding-l">
  <?php $_GET['title'] = "Social Network"; include(HEADING); ?>
  <a class="btn btn-block btn-social btn-facebook" onclick="_gaq.push(['_trackEvent', 'btn-social', 'click', 'btn-facebook']);">
            <span class="fa fa-facebook"></span> Connect with me in Facebook
          </a>
  <a class="btn btn-block btn-social btn-twitter" onclick="_gaq.push(['_trackEvent', 'btn-social', 'click', 'btn-twitter']);">
            <span class="fa fa-twitter"></span> Follow me in Twitter
          </a>
<a class="btn btn-block btn-social btn-google" onclick="_gaq.push(['_trackEvent', 'btn-social', 'click', 'btn-google']);">
            <span class="fa fa-youtube"></span> Subscribe our channel
          </a>
  </div>
</div>
<?php
  include(FOOTER); 
?>