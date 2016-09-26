<?php
function model_add_videos($conn){
	for($i = 1; $i < 4; $i++){
		${'url_'.$i} = $_POST['url_'.$i];

		if(trim(${'url_'.$i}) != ''){
			${'title_'.$i} = base64_encode($_POST['title_'.$i]);
			${'desc_'.$i} = base64_encode($_POST['desc_'.$i]);

			$query = 'INSERT INTO `tbl_videos` (url, title, description) VALUES("'.${'url_'.$i} .'", "'.${'title_'.$i} .'","'.${'desc_'.$i} .'")';
			mysqli_query($conn, $query);
		}
	}
}

function model_delete_videos($conn){
	$vid = $_POST['vid'];
	$query = 'DELETE FROM `tbl_videos` WHERE vid='.$vid;
	mysqli_query($conn, $query);
}

function model_get_videos($conn){
	$sql = 'SELECT * FROM `tbl_videos`';
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