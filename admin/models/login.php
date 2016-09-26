<?php
function model_login($username, $password, $conn){
	$query = 'SELECT username FROM `tbl_login` WHERE username="'.$username.'" AND password="'.$password.'"';
	if($result = mysqli_query($conn, $query)){
		$rowcount = mysqli_num_rows($result);
		if($rowcount == 1){
			$sessionid = uniqid();
			$_SESSION['sessionid'] = $sessionid;
			$query = 'UPDATE `tbl_login` SET sessionid="'.$sessionid.'" WHERE username="'.$username.'" AND password="'.$password.'"';
			if(mysqli_query($conn, $query)){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}else{
	  echo mysqli_error($conn);
	}
}
?>