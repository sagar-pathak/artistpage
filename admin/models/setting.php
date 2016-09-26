<?php
function model_check_password($conn, $oldpassword){
	$query = 'SELECT password FROM `tbl_login` WHERE u_id=1 AND password="'.$oldpassword.'"';
	if($result = mysqli_query($conn, $query)){
		$rowcount = mysqli_num_rows($result);
		if($rowcount == 1){
			return true;
		}else{
			return false;
		}
	}
	return false;
}

function model_change_password($conn){
	$oldpassword = $_POST['oldpassword'];
	$newpassword = $_POST['newpassword'];
	$confirmpassword = $_POST['confirmpassword'];
	if($newpassword == $confirmpassword){
		if(model_check_password($conn, $oldpassword)){
			$query = 'UPDATE `tbl_login` SET password="'.$confirmpassword.'" WHERE u_id=1';
			mysqli_query($conn, $query);
			$_SESSION['changepassword_success'] = 'Password successfully changed!';
		}else{
			$_SESSION['changepassword_error'] = "Old password doesn't match!!";
		}
	}else{
		$_SESSION['changepassword_error'] = "Confirm password doesn't match!!";
	}
}
?>