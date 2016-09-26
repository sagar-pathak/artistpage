<?php
function model_update_profileinfo($conn){
	$firstname = $_POST['firstname'];
	$middlename = $_POST['middlename'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$backgroundimgUrl = $_POST['backgroundimageurl'];
	$description = base64_encode($_POST['description']);

	$query = 'UPDATE `tbl_about` SET firstname="'.$firstname.'", lastname="'.$lastname.'", middlename="'.$middlename.'", email="'.$email.'", address="'.$address.'", backgroundimageurl="'.$backgroundimgUrl.'", description="'.$description.'"  WHERE uid=1';
	echo $query;
	mysqli_query($conn, $query);
}

function model_get_profileinfo($conn){
	$sql = 'SELECT * FROM `tbl_about`';
	$rows = array();
	if ($result=mysqli_query($conn,$sql)){
	  while ($row=mysqli_fetch_assoc($result)){
	    $rows[] = $row;
	  }
	}else{
	  die(mysqli_error($conn));
	}
	return $rows;
}
?>