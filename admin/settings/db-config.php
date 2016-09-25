<?php
	define('DBHOST', 'localhost');
	define('DBNAME', 'artistdb');
	define('DBUSER', 'root');
	define('DBPASSWORD', '');

	// Create connection
	$conn = new mysqli(DBHOST, DBUSER, DBPASSWORD);

	// Check connection
	if ($conn->connect_error) {
		die("error connecting database");
	}
	mysqli_select_db($conn, "artistdb");

	function check_session($conn){
		if(isset($_SESSION['sessionid'])){
			$query = 'SELECT username FROM tbl_login WHERE sessionid="'.$_SESSION['sessionid'].'"';
			if(mysqli_query($conn, $query)){
				return true;
			}else{
				unset($_SESSION['sessionid']);
				session_destroy();
			}
		}else{
			header('Location: '.ROOT_PATH."admin/login");
		}
	}
?>