
<nav class="navbar navbar-default hidden-xs">
  <div class="container container-fluid">
    <div class="navbar-header" style="margin-top: 20px;">
      <a href="<?php echo DOMAIN_NAME; ?>">
		<div class='animate-text content'>
		  <div class='animate-text visible'>
		    <p>
		      <a href="#" class="btn btn-primary btn-xs" style="font-size:10px;">NEWS:</a>
		    </p>
		    <ul>
		    <?php $rows = model_get_news($conn); for($i=0; $i<count($rows); $i++){ ?>
		      <li><a href="<?php echo $rows[$i]['url']; ?>"><?php echo base64_decode($rows[$i]['title_ne']); ?></a></li>
		    <?php } ?>
		    </ul>
		  </div>
		</div>
      </a>
    </div>
  </div>
</nav>