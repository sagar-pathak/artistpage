<?php
  include(DB_CONFIG);
  include(MODEL_ABOUT);
  include(MODEL_HOME);

  include(ACTIVE_PAGE_CHECKER);
  include(HEADER); 
  //include(FEED_HEADER);
?>
<div class="container about" style="margin-top: -1px;">
	<?php $rows = model_get_profileinfo($conn); ?>
	<div class="col-md-6 about-sidebar">
		<img src="<?php echo $rows[0]['backgroundimageurl']; ?>" />			
	</div>
	<div class="col-md-6 clear-padding-lr" style="border:1px solid #ccc;">
		<div class="menu-heading"><span class="title">ABOUT</span></div>
		<div class="about-content" style="margin-top: 50px;">
		<?php $_GET['title']=$rows[0]['firstname']." ".$rows[0]['middlename']." ".$rows[0]['lastname']; include(HEADING); ?>
			<?php echo $rows[0]['description']; ?>	
		</div>
		<div class="social-media">
		<?php $rows = model_get_socialnetworks($conn); ?>
			<a class="btn btn-social-icon btn-facebook" target="_blank" href="<?php echo $rows[0]['facebook']; ?>"><span class="fa fa-facebook"></span></a>
			<a class="btn btn-social-icon btn-twitter" target="_blank" href="<?php echo $rows[0]['twitter']; ?>"><span class="fa fa-twitter"></span></a>
		</div>
	</div>
</div>
<?php
  include(FOOTER); 
?>