<?php
	require(DB_CONFIG);
	$method = $_POST['method'];

	function videoscontroller($method, $conn){
		switch($method){
			case 'add':
				model_add_videos($conn);
				break;
			case 'delete':
				model_delete_videos($conn);
				break;
		}
		header('Location: '.ROOT_PATH.'admin/videos');
	}
	videoscontroller($method, $conn);
?>