<?php
	require(DB_CONFIG); check_session($conn);
	require(MODEL_VIDEOS);
	$title = "Videos";
	$active_videos = ' class="active"';
	require ADMIN_HEADER;
	require ADMIN_SIDEBAR;
?>
<div class="main-panel">
	<?php
		require ADMIN_PANEL_TOP;
	?>
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="header">
							<h4 class="title">Videos</h4>
						</div>
						<div class="content">
							<form method="POST" action="<?php echo ROOT_PATH.'admin/api/videos/add'; ?>">
								<?php for($i=1; $i<4; $i++){ ?>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label>Youtube ID</label>
											<input type="text" name="<?php echo 'url_'.$i; ?>" class="form-control" placeholder="e.g. ze7rEqixCaQ">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Title</label>
											<input type="text" name="<?php echo 'title_'.$i; ?>" class="form-control" placeholder="e.g. (Paddy Sun) Sunflower - Gabriella Quevedo" >
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="exampleInputEmail1">Description</label>
											<input type="text" name="<?php echo 'desc_'.$i; ?>" class="form-control" placeholder="e.g. Sunflower by Paddy Sun">
										</div>
									</div>
								</div>
								<?php } ?>
								<button type="submit" class="btn btn-info btn-fill pull-right">Submit</button>
								<div class="clearfix"></div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="header">
							<h4 class="title">Video List</h4>
							<p class="category">Manage your video list.</p>
						</div>
						<div class="content table-responsive table-full-width">
						<?php $rows = model_get_videos($conn); if(count($rows)>0){?>
							<table class="table table-hover table-striped">
								<thead>
									<th>S/N</th>
									<th>Title</th>
									<th>Youtube ID</th>
									<th>Description</th>
									<th>Action</th>
								</thead>
								<tbody id="video-list">
								<?php for($i=0; $i<count($rows); $i++){ ?>
									<tr>
										<td><?php echo ($i+1); ?></td>
										<td><?php echo base64_decode($rows[$i]['title']); ?></td>
										<td><?php echo $rows[$i]['url']; ?></td>
										<td><?php echo base64_decode($rows[$i]['description']); ?></td>
										<td><a href="#" data-vid="<?php echo $rows[$i]['vid']; ?>" class="btn btn-danger btn-xs delete-vid">DELETE</a></td>
									</tr>
								<?php } ?>
								</tbody>
							</table>
							<?php }else{ ?>
								<div class="header">
									<p class="category">No videos.</p>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php
		require ADMIN_FOOTER;
	?>
	<script>
	$(function(){
		$('.delete-vid').on('click', function(e){
			e.preventDefault();
			var vid = $(e.target).data('vid');
			var jQxhr = $.ajax({
				url: "<?php echo ROOT_PATH.'admin/api/videos/delete'; ?>",
				type: 'POST',
				data: {vid: vid}
			});
			jQxhr.done(function(){
				$(e.target).closest('tr').remove();
			});
		});
	});
	</script>