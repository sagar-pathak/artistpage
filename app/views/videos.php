<?php
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
				<div class="video col-xs-6 col-sm-6 col-md-4">
					<a
						class="thumbnail"
						href="https://www.youtube.com/watch?v=8XlYXl111XI?autoplay=1"
						data-youtube="8XlYXl111XI"
						title="Fruits"
						type="text/html"
						data-poster="https://img.youtube.com/vi/8XlYXl111XI/maxresdefault.jpg"
						><img id="first-img" class="img-responsive" src="https://img.youtube.com/vi/8XlYXl111XI/maxresdefault.jpg" alt="">
					</a>
					<div class="caption">
						<h4>Thumbnail label</h4>
						<p></p>
						<p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p>
					</div>
				</div>
				<div class="video col-xs-6 col-sm-6 col-md-4">
					<a
						class="thumbnail"
						href="https://www.youtube.com/watch?v=8XlYXl111XI?autoplay=1"
						data-youtube="8XlYXl111XI"
						title="Fruits"
						type="text/html"
						data-poster="https://img.youtube.com/vi/8XlYXl111XI/maxresdefault.jpg"
						><img class="img-responsive" src="https://img.youtube.com/vi/8XlYXl111XI/maxresdefault.jpg" alt="">
					</a>
					<div class="caption">
						<h4>Thumbnail label</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit</p>
						<p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p>
					</div>
				</div>
				<div class="video col-xs-6 col-sm-6 col-md-4">
					<a
						class="thumbnail"
						href="https://www.youtube.com/watch?v=8XlYXl111XI?autoplay=1"
						data-youtube="8XlYXl111XI"
						title="Fruits"
						type="text/html"
						data-poster="https://img.youtube.com/vi/8XlYXl111XI/maxresdefault.jpg"
						><img class="img-responsive" src="https://img.youtube.com/vi/8XlYXl111XI/maxresdefault.jpg" alt="">
					</a>
					<div class="caption">
						<h4>Thumbnail label</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit</p>
						<p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p>
					</div>
				</div>
				<div class="video col-xs-6 col-sm-6 col-md-4">
					<a
						class="thumbnail"
						href="https://www.youtube.com/watch?v=8XlYXl111XI?autoplay=1"
						data-youtube="8XlYXl111XI"
						title="Fruits"
						type="text/html"
						data-poster="https://img.youtube.com/vi/8XlYXl111XI/maxresdefault.jpg"
						><img class="img-responsive" src="https://img.youtube.com/vi/8XlYXl111XI/maxresdefault.jpg" alt="">
					</a>
					<div class="caption">
						<h4>Thumbnail label</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit</p>
						<p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p>
					</div>
				</div>
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
				<button type="button" class="btn btn-default pull-left prev">
				<i class="glyphicon glyphicon-chevron-left"></i>
				Previous
				</button>
				<button type="button" class="btn btn-primary next">
				Next
				<i class="glyphicon glyphicon-chevron-right"></i>
				</button>
			</div>
		</div>
	</div>
</div>
</div>
<!-- gallery model: ends -->
<?php
include(FOOTER);
?>