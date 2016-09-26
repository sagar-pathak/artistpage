<?php
include(DB_CONFIG);
include(MODEL_VIDEOS);

include(ACTIVE_PAGE_CHECKER);
include(HEADER);
?>
<!-- Page Content -->
<div class="container gallery" style="margin-top: 30px;">
	<div class="row">
		<div class="col-lg-12">
			<?php $_GET['title']="VIDEOS";include(HEADING); ?>
		</div>
		<!-- image links: starts -->
		<div class="col-md-12">
			<div id="videos" class="clear-padding-l">
			<?php $rows = model_get_videos($conn); for($i=0; $i<count($rows); $i++){ ?>
				<div class="video col-xs-6 col-sm-6 col-md-4">
					<div class="col-md-12">
						<a
							class="thumbnail"
							href="https://www.youtube.com/watch?v=<?php echo trim($rows[$i]['url']); ?>?autoplay=1"
							data-youtube="<?php echo trim($rows[$i]['url']); ?>"
							title="Fruits"
							type="text/html"
							data-poster="https://img.youtube.com/vi/<?php echo trim($rows[$i]['url']); ?>/maxresdefault.jpg"
							><img id="first-img" class="img-responsive" src="https://img.youtube.com/vi/<?php echo trim($rows[$i]['url']); ?>/maxresdefault.jpg" alt="">
						</a>
					</div>
					<div class="col-md-12">
						<div class="caption">
							<h4><?php echo base64_decode(trim($rows[$i]['title'])); ?></h4>
							<p class="hidden-xs"><?php echo base64_decode($rows[$i]['description']); ?></p>
							</div>
					</div>
				</div>
			<?php } ?>
			</div>
		</div>
		<!-- image links: ends -->
	</div>
</div>
<!-- gallery model: starts -->
<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery">
	<!-- The container for the modal slides -->
	<div class="slides"></div>
	<!-- Controls for the borderless lightbox -->
	<h3 class="title"></h3>
	<a class="prev">‹</a>
	<a class="next">›</a>
	<a class="close">×</a>
	<a class="play-pause"></a>
<ol class="indicator"></ol>
<!-- The modal dialog, which will be used to wrap the lightbox content -->
<div class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" aria-hidden="true">&times;</button>
				<h4 class="modal-title"></h4>
			</div>
			<div class="modal-body next"></div>
			<div class="modal-footer">
			</div>
		</div>
	</div>
</div>
</div>
<!-- gallery model: ends -->
<?php
include(FOOTER);
?>