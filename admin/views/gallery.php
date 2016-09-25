<?php
	require(DB_CONFIG); check_session($conn);
	$title = "Gallery";
	$active_gallery = ' class="active"';
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
							<h4 class="title">Upload Images</h4>
						</div>
						<div class="content">
							<br>
							<div class="upload-wrapper">
								<div id="error_output"></div>
								    <!-- file drop zone -->
								    <div id="dropzone">
								        <!-- upload button -->
								         <span class="btn btn-success fileinput-button">
									        <i class="glyphicon glyphicon-plus"></i>
									        <span>Add files...</span>
									        <!-- The file input field used as target for the file upload widget -->
									        <input id="fileupload" type="file" name="files[]" multiple>
									    </span>
								    </div>
								    <!-- The container for the uploaded files -->
								    <div id="files" class="files"></div>
								</div>
							<br>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Image List</h4>
                                <p class="category">Manage your gallery list.</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>Name</th>
                                    	<th>Size</th>
                                    	<th>URL</th>
                                    	<th>Action</th>
                                    </thead>
                                    <tbody id="image-list">
                                        <tr>
                                        	<td>1</td>
                                        	<td>Dakota Rice</td>
                                        	<td>$36,738</td>
                                        	<td>Niger</td>
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