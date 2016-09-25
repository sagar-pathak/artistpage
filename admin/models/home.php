<?php
function model_update_video_slider($conn){
	$videourl1 = $_POST['videourl1'];
	$videourl2 = $_POST['videourl2'];
	$videourl3 = $_POST['videourl3'];
	$videourl4 = $_POST['videourl4'];

	for($id=1; $id<=4; $id++){
		$query = 'UPDATE `tbl_videoslider` SET video_url="'.${"videourl".$id}.'" WHERE video_slider_id='.$id;
		mysqli_query($conn, $query);
	}
}

function model_get_video_slider($conn){
	$sql = 'SELECT * FROM `tbl_videoslider`';
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