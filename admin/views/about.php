<?php
	$title = "About";
	$active_about = ' class="active"';
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
							<h4 class="title">About</h4>
						</div>
						<div class="content">
							<form>
								<div class="row">
									<div class="col-md-5">
										<div class="form-group">
											<label>First Name</label>
											<input type="text" class="form-control" placeholder="Sagar" >
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label>Middle Name</label>
											<input type="text" class="form-control" placeholder="Middle name" >
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label for="exampleInputEmail1">Last Name</label>
											<input type="text" class="form-control" placeholder="Pathak">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Address</label>
											<input type="text" class="form-control" placeholder="Home Address">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Background Image URL</label>
											<input type="text" class="form-control" placeholder="image url">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>About Me</label>
											<textarea rows="5" class="form-control" placeholder="Here can be your description" value="Mike"></textarea>
										</div>
									</div>
								</div>
								<button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
								<div class="clearfix"></div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
		require ADMIN_FOOTER;
	?>