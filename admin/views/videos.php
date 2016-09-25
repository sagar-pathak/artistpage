<?php
	require(DB_CONFIG); check_session($conn);
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
							<form>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label>Youtube ID</label>
											<input type="text" class="form-control" placeholder="e.g. ze7rEqixCaQ">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Title</label>
											<input type="text" class="form-control" placeholder="e.g. (Paddy Sun) Sunflower - Gabriella Quevedo">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="exampleInputEmail1">Description</label>
											<input type="text" class="form-control" placeholder="e.g. Sunflower by Paddy Sun">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label>Youtube ID</label>
											<input type="text" class="form-control" placeholder="e.g. ze7rEqixCaQ">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Title</label>
											<input type="text" class="form-control" placeholder="e.g. (Paddy Sun) Sunflower - Gabriella Quevedo">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="exampleInputEmail1">Description</label>
											<input type="text" class="form-control" placeholder="e.g. Sunflower by Paddy Sun">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label>Youtube ID</label>
											<input type="text" class="form-control" placeholder="e.g. ze7rEqixCaQ">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Title</label>
											<input type="text" class="form-control" placeholder="e.g. (Paddy Sun) Sunflower - Gabriella Quevedo">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="exampleInputEmail1">Description</label>
											<input type="text" class="form-control" placeholder="e.g. Sunflower by Paddy Sun">
										</div>
									</div>
								</div>
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
							<table class="table table-hover table-striped">
								<thead>
									<th>S/N</th>
									<th>Title</th>
									<th>Youtube ID</th>
									<th>Description</th>
									<th>Action</th>
								</thead>
								<tbody id="video-list">
									<tr>
										<td>1</td>
										<td>(Paddy Sun) Sunflower - Gabriella Quevedo</td>
										<td>ze7rEqixCaQ</td>
										<td>Sunflower by Paddy Sun</td>
										<td><a href="#" class="btn btn-danger btn-xs">DELETE</a></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
		require ADMIN_FOOTER;
	?>