<?php
  include(DB_CONFIG);
  include(MODEL_HOME);

  include(ACTIVE_PAGE_CHECKER);
  include(HEADER); 
  include(FEED_HEADER);
  include(IMG_SLIDER);
?>
<div class="container">
<!-- Latest Videos: starts -->
    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 clear-padding-l latest-videos">
      <?php $_GET['title'] = "Latest Videos"; include(HEADING); ?>
      <?php $rows = model_get_latestvideos($conn); for($i=0; $i<count($rows); $i++){ ?>
      <div class="col-xs-6 col-sm-6 col-md-4 clear-padding-l">
        <a href="<?php echo $rows[$i]['url']; ?>" data-title="<?php echo $rows[$i]['title']; ?>" class="latest-video img-rounded" id="latest_vid<?php echo ($i+1); ?>"></a>
      </div>
      <?php } ?>
    </div>
  <!-- Latest Videos: ends -->
    <div class="col-sm-4 col-xs-12 col-md-4 col-lg-4 clear-padding-l social-networks">
    <?php $_GET['title'] = "Social Network"; include(HEADING); ?>
    <?php $rows = model_get_socialnetworks($conn); ?>
    <a class="btn btn-block btn-social btn-facebook" target="_blank" href="<?php echo $rows[0]['facebook']; ?>">
              <span class="fa fa-facebook"></span> Connect with me in Facebook
            </a>
    <a class="btn btn-block btn-social btn-twitter" target="_blank" href="<?php echo $rows[0]['twitter']; ?>">
              <span class="fa fa-twitter"></span> Follow me in Twitter
            </a>
  <a class="btn btn-block btn-social btn-google" target="_blank" href="<?php echo $rows[0]['youtube']; ?>">
              <span class="fa fa-youtube"></span> Subscribe our channel
            </a>
    </div>
  </div>
<?php
  include(FOOTER); 
?>