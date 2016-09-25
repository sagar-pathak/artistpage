<?php
	require(DB_CONFIG);
	$method = $_POST['method'];

	function homecontroller($method, $conn){
		switch($method){
			case 'videoslider':
				model_update_video_slider($conn);
				break;
			case 'news':
				model_set_news($conn);
				break;
			case 'socialnetwork':
				model_set_socialnetworks($conn);
				break;
			case 'latestvideos':
				model_set_latestvideos($conn);
				break;
		}
		header('Location: '.ROOT_PATH.'admin/');
	}
	homecontroller($method, $conn);
?>