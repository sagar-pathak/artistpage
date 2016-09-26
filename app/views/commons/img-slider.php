<div class="container slider">
	<ul class="bxslider">
	<?php $rows=model_get_video_slider($conn); for($i=0; $i<count($rows); $i++){ ?>
	  <li>
	  	<iframe title='YouTube video player' width='100%' height='50%' src='http://www.youtube.com/embed/<?php echo $rows[$i]['video_url']; ?>?autoplay=0&showinfo=0&controls=0' frameborder='0'  allowfullscreen></iframe>
	  </li>
	 <?php } ?>
	</ul>
</div>