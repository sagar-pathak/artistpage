<?php
	require(DB_CONFIG); check_session($conn);
	$title = "Setting";
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
							<h4 class="title">Change Password</h4>
						</div>
						<div class="content">
						<?php if(isset($_SESSION['changepassword_success'])){ ?>
							<div class="alert alert-success">
	                            <button type="button" aria-hidden="true" class="close">×</button>
	                            <span><b> Success - </b> Password changed successfully!!</span>
	                        </div>
	                    <?php unset($_SESSION['changepassword_success']); } if(isset($_SESSION['changepassword_error'])){ ?>
	                    	<div class="alert alert-danger">
                                <button type="button" aria-hidden="true" class="close">×</button>
                                <span><b> Failed - </b> <?php echo $_SESSION['changepassword_error']; ?></span>
                             </div>
	                    <?php unset($_SESSION['changepassword_error']); } ?>
							<form method="POST" action="<?php echo ROOT_PATH.'admin/api/setting/changepassword'; ?>">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Old Password</label>
											<input type="password" name="oldpassword"  class="form-control" placeholder="Old Password" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>New Password</label>
											<input type="password" name="newpassword"  class="form-control" placeholder="New Password" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label>Confirm Password</label>
											<input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password" required>
										</div>
									</div>
								</div>
								<button type="submit" class="btn btn-info btn-fill pull-right">Change Password</button>
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