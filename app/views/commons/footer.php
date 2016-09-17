   <!-- footer text: starts -->
   <footer>
  	<div class="splash">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <!-- <div><img class="logo" src="assets/img/logo.png"></div> -->
              <h2>SUBSCRIBE TO OUR
              <br/>
  	            <span class="fa fa-youtube"></span>
  	            <span>YOUTUBE CHANNEL</span>
              </h2>
  				<script src="https://apis.google.com/js/platform.js"></script>
  				<div class="g-ytsubscribe" data-channel="GoogleDevelopers" data-layout="default" data-count="default"></div>
            </div>
          </div>

        </div>
      </div>
      <div class="container-fluid footer">
  	    <div class="container hidden-xs">
            <div class="copyright pull-left">
	          	Copyrights © 2016 All Rights Reserved by Artist<br/>
				<a href="#">Terms of Use</a>|<a href="#">Privacy Policy</a>
			</div>
			<div class="copyright pull-right">
	          	Developed and maintained by <a href="#">Sagar</a>
			</div>
  	    </div>
        <div class="container visible-xs">
            <div class="copyright pull-left">
                Copyrights © 2016 All Rights Reserved by Arti<br/>
                <a href="#">Terms of Use</a>|<a href="#">Privacy Policy</a>
            </div>
            <div class="copyright pull-right">
                Developed and maintained by <a href="#">Sagar</a>
            </div>
        </div>
  	 </div>
    </footer>
   <!-- footer text: ends -->
    <script src="<?php echo JS_DIR; ?>jquery-1.10.2.min.js"></script>
    <script src="<?php echo JS_DIR; ?>bootstrap/bootstrap.min.js"></script>
    <?php 
      if(ACTIVE_HOME){
        echo '<script src="'.JS_DIR.'jquery.fitvids.js"></script>
        <script src="'.LIB_DIR.'bxslider/jquery.bxslider.js"></script>
        <script src="'.LIB_DIR.'youtube-thumbnails/youtube.thumbnails.js"></script>
        <script src="'.JS_DIR.'custom.js"></script>';
      }
    ?>
  </body>
</html>
