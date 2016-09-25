<?php
	require(DB_CONFIG);
	require(MODEL_LOGIN);
	$method = $_POST['method'];
	print_r($_POST);

	function logincontroller($method, $conn){
		switch($method){
			case 'login':
				$username = $_POST['username'];
				$password = $_POST['password'];
				if(model_login($username, $password, $conn)){
					header('Location: '.ROOT_PATH."admin/");
				}else{
					$_SESSION['login_error']="Login failed. Try again!";
					header('Location: '.ROOT_PATH."admin/login");
				}
				break;
		}
	}
	logincontroller($method, $conn);
?>