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

function model_set_news($conn){

	for($i = 1; $i<=4; $i++){
		${'title_en_'.$i} = $_POST['title_en_'.$i];
		${'title_ne_'.$i} = $_POST['title_ne_'.$i];
		${'url_'.$i} = $_POST['url_'.$i];

		$query = 'UPDATE `tbl_news` SET title_en="'.${'title_en_'.$i} .'", title_ne="'.${'title_ne_'.$i} .'",url="'.${'url_'.$i} .'" WHERE newsid='.$i;
		mysqli_query($conn, $query);
	}
}

function model_get_news($conn){
	$sql = 'SELECT * FROM `tbl_news`';
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

function model_set_socialnetworks($conn){
	$social_facebook = $_POST['social_facebook'];
	$social_twitter = $_POST['social_twitter'];
	$social_youtube = $_POST['social_youtube'];

	$query = 'UPDATE `tbl_socialnetwork` SET facebook="'.$social_facebook.'",twitter="'.$social_twitter.'",youtube="'.$social_youtube.'" WHERE sid=1;';
	mysqli_query($conn, $query);
}

function model_get_socialnetworks($conn){
	$sql = 'SELECT * FROM `tbl_socialnetwork`';
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

function model_set_latestvideos($conn){
	$videourl1 = $_POST['videourl1'];
	$videourl2 = $_POST['videourl2'];
	$videourl3 = $_POST['videourl3'];

	for($id=1; $id<=3; $id++){
		$query = 'UPDATE `tbl_latestvideos` SET url="'.${"videourl".$id}.'" WHERE vid='.$id;
		mysqli_query($conn, $query);
	}
}

function model_get_latestvideos($conn){
	$sql = 'SELECT * FROM `tbl_latestvideos`';
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