<?php
	require(DB_CONFIG);
	$method = $_POST['method'];

	function homecontroller($method, $conn){
		switch($method){
			case 'videoslider':
				model_update_video_slider($conn);
				break;
		}
	}
	homecontroller($method, $conn);
?>