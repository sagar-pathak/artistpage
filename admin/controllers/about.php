<?php
	require(DB_CONFIG);
	$method = $_POST['method'];

	function aboutcontroller($method, $conn){
		switch($method){
			case 'profile':
				model_update_profileinfo($conn);
				break;
		}
		header('Location: '.ROOT_PATH.'admin/about');
	}
	aboutcontroller($method, $conn);
?>