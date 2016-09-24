	        <footer class="footer">
	            <div class="container-fluid">
	                <nav class="pull-left">
	                    <ul>
	                        <li>
	                            <a href="#">
	                                Home
	                            </a>
	                        </li>
	                        <li>
	                            <a href="#">
	                                ABOUT
	                            </a>
	                        </li>
	                        <li>
	                            <a href="#">
	                                GALLERY
	                            </a>
	                        </li>
	                        <li>
	                            <a href="#">
	                               VIDEOS
	                            </a>
	                        </li>
	                        <li>
	                            <a href="#">
	                               FEEDBACK
	                            </a>
	                        </li>
	                    </ul>
	                </nav>
	                <p class="copyright pull-right">
	                    &copy; 2016 <a href="http://www.sagarpathak.com.np">Sagar Pathak</a>, made with love for a better web
	                </p>
	            </div>
	        </footer>
		</div> <!-- main-panel: ends -->
	</div>
</body>
    <!--   Core JS Files   -->
    <script src="<?php echo ADMIN_JS_DIR; ?>jquery-1.10.2.js" type="text/javascript"></script>
	<script src="<?php echo ADMIN_JS_DIR; ?>bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="<?php echo ADMIN_JS_DIR; ?>bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="<?php echo ADMIN_JS_DIR; ?>chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo ADMIN_JS_DIR; ?>bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="<?php echo ADMIN_JS_DIR; ?>light-bootstrap-dashboard.js"></script>

	<?php if(isset($active_gallery) || isset($active_videos)){ ?>
	<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
	<script src="<?php echo ADMIN_LIB_DIR;?>jQuery-File-Upload-9.12.5/js/vendor/jquery.ui.widget.js"></script>
	<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
	<script src="<?php echo ADMIN_LIB_DIR;?>jQuery-File-Upload-9.12.5/js/load-image.all.min.js"></script>
	<!-- The Canvas to Blob plugin is included for image resizing functionality -->
	<script src="<?php echo ADMIN_LIB_DIR;?>jQuery-File-Upload-9.12.5/js/canvas-to-blob.min.js"></script>
	<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
	<script src="<?php echo ADMIN_LIB_DIR;?>jQuery-File-Upload-9.12.5/js/jquery.iframe-transport.js"></script>
	<!-- The basic File Upload plugin -->
	<script src="<?php echo ADMIN_LIB_DIR;?>jQuery-File-Upload-9.12.5/js/jquery.fileupload.js"></script>
	<!-- The File Upload processing plugin -->
	<script src="<?php echo ADMIN_LIB_DIR;?>jQuery-File-Upload-9.12.5/js/jquery.fileupload-process.js"></script>
	<!-- The File Upload image preview & resize plugin -->
	<script src="<?php echo ADMIN_LIB_DIR;?>jQuery-File-Upload-9.12.5/js/jquery.fileupload-image.js"></script>
	<!-- The File Upload validation plugin -->
	<script src="<?php echo ADMIN_LIB_DIR;?>jQuery-File-Upload-9.12.5/js/jquery.fileupload-validate.js"></script>
	
<script language="javascript">
$(function(){
	'use strict';
	var fi = $('#fileupload'); //file input 
	var process_url = 'http://localhost/WebProjects/artist/admin/assets/lib/jQuery-File-Upload-9.12.5/upload.php'; //PHP script
	var progressBar = $('<div/>').addClass('progress').append($('<div/>').addClass('progress-bar')); //progress bar
	var uploadButton = $('<button/>').addClass('button btn-blue upload').text('Upload');	//upload button
	
	uploadButton.on('click', function () {
		var $this = $(this), data = $this.data();
		data.submit().always(function () {
				$this.parent().find('.progress').show();
				$this.parent().find('.remove').remove();
				$this.remove();
        });
	});

	//initialize blueimp fileupload plugin
	fi.fileupload({
		url: process_url,
		dataType: 'json',
		autoUpload: false,
		acceptFileTypes: /(\.|\/)(jpg|jpeg|png)$/i,
		maxFileSize: 1048576, //1MB
		// Enable image resizing, except for Android and Opera,
		// which actually support image resizing, but fail to
		// send Blob objects via XHR requests:
		disableImageResize: /Android(?!.*Chrome)|Opera/ 
		.test(window.navigator.userAgent),
		previewMaxWidth: 50,
		previewMaxHeight: 50,
		previewCrop: true,
		dropZone: $('#dropzone')
	});
	
	fi.on('fileuploadadd', function (e, data) {
			data.context = $('<div/>').addClass('file-wrapper').appendTo('#files');
			$.each(data.files, function (index, file){	
			var node = $('<div/>').addClass('file-row');
			var removeBtn  = $('<button/>').addClass('button btn-red remove').text('Remove');
			removeBtn.on('click', function(e, data){
				$(this).parent().parent().remove();
			});
			
			var file_txt = $('<div/>').addClass('file-row-text').append('<span>'+file.name + ' (' +format_size(file.size) + ')' + '</span>');
			
			file_txt.append(removeBtn);
			file_txt.prependTo(node).append(uploadButton.clone(true).data(data));
			progressBar.clone().appendTo(file_txt);
			if (!index){
				node.prepend(file.preview);
			}
			
			node.appendTo(data.context);
		});
	});

	fi.on('fileuploadprocessalways', function (e, data) {
		var index = data.index,
			file = data.files[index],
			node = $(data.context.children()[index]);
			if (file.preview) {
				node .prepend(file.preview);
			}
			if (file.error) {
				node.append($('<span class="text-danger"/>').text(file.error));
			}
			if (index + 1 === data.files.length) {
				data.context.find('button.upload').prop('disabled', !!data.files.error);
			}
	});
	
	fi.on('fileuploadprogress', function (e, data) {
		var progress = parseInt(data.loaded / data.total * 100, 10);
		if (data.context) {
			data.context.each(function () {
				$(this).find('.progress').attr('aria-valuenow', progress).children().first().css('width',progress + '%').text(progress + '%');
			});
		}
	});

	fi.on('fileuploaddone', function (e, data) {
        $.each(data.result.files, function (index, file) {
            if (file.url) {
                var link = $('<a>') .attr('target', '_blank') .prop('href', file.url);
				$(data.context.children()[index]).addClass('file-uploaded');
				$(data.context.children()[index]).find('canvas').wrap(link);
				$(data.context.children()[index]).find('.file-remove').hide(); 
				var done = $('<span class="text-success"/>').text('Uploaded!');
				$(data.context.children()[index]).append(done);
				window.location.reload();
            } else if (file.error) {
                var error = $('<span class="text-danger"/>').text(file.error);
                $(data.context.children()[index]).append(error);
            }
        });
    });
	
	fi.on('fileuploadfail', function (e, data) {
   	 $('#error_output').html(data.jqXHR.responseText);
	});
	
	function format_size(bytes) {
            if (typeof bytes !== 'number') {
                return '';
            }
            if (bytes >= 1000000000) {
                return (bytes / 1000000000).toFixed(2) + ' GB';
            }
            if (bytes >= 1000000) {
                return (bytes / 1000000).toFixed(2) + ' MB';
            }
            return (bytes / 1000).toFixed(2) + ' KB';
    }


    var jqxr = $.get("http://localhost/WebProjects/artist/admin/upload?getfiles=1");
		jqxr.done(function(data){
		data = JSON.parse(data);
		var html = '';
		$.each(data.files, function(index, value){
			html += '\
						<tr>\
	                    	<td>'+(index+1)+'</td>\
	                    	<td>'+value.name+'</td>\
	                    	<td>'+format_size(value.size)+' </td>\
	                    	<td>'+value.url+'</td>\
	                    	<td><a href="#" data-filename="'+value.name+'" class="btn btn-danger btn-xs delete-img">DELETE</a></td>\
	                    </tr>\
			';
		});
			
		$("#image-list").html(html);

		$(".delete-img").on('click', function(e){
			e.preventDefault();
			var element = $($(this).context);
			var filename = element.data('filename');
			var req = $.ajax({
				data: {filename: filename},
				url: <?php echo "'".DELETE_URL."'"; ?>,
				type: 'POST'
			});
			req.done(function(){
				element.context.closest('tr').remove();
			});
		})
	});
});
	</script>

<?php } ?>
</html>