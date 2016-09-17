<?php
  include(ACTIVE_PAGE_CHECKER);
  include(HEADER); 
  //include(FEED_HEADER);
?>
<div class="container about">
	<div class="col-md-6 about-sidebar">
		<img src="<?php echo IMG_DIR; ?>about-sidebar.png" />			
	</div>
	<div class="col-md-6" style="margin-top: 50px;">
		<?php $_GET['title']="Firstname Lastname";include(HEADING); ?>
		<div class="about-content">
				I’m a queer Trinidadian cisgender woman of color. I work as a Frontend Engineer in New York, and I’ve been active in the engineering world for 6 years.

				I was lucky enough to have a supportive mother, who got me thalida.com for my 16th birthday. It was one of the best gifts I’ve ever received, and is the reason I've become the developer I am today.

				I now work with a great group of engineers at Kinnek (we’re hiring!) during the day, and in the wee hours of the night I hack away at one of my many side projects. I'm always looking for a coding buddy, so if you're 
		</div>
		<div class="social-media">
			<a class="btn btn-social-icon btn-facebook" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-facebook']);"><span class="fa fa-facebook"></span></a>
			<a class="btn btn-social-icon btn-twitter" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-twitter']);"><span class="fa fa-twitter"></span></a>
			<a class="btn btn-social-icon btn-instagram" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-instagram']);"><span class="fa fa-instagram"></span></a>
			<a class="btn btn-social-icon btn-linkedin" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-linkedin']);"><span class="fa fa-linkedin"></span></a>
			<a class="btn btn-social-icon btn-google" onclick="_gaq.push(['_trackEvent', 'btn-social-icon', 'click', 'btn-google']);"><span class="fa fa-google"></span></a>
		</div>
	</div>
</div>
<?php
  include(FOOTER); 
?>