<?php
	require(DB_CONFIG);
	$method = $_POST['method'];

	function settingcontroller($method, $conn){
		switch($method){
			case 'changepassword':
				model_change_password($conn);
				break;
		}
		header('Location: '.ROOT_PATH.'admin/password');
	}
	settingcontroller($method, $conn);
?>