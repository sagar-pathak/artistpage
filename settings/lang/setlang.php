<?php
if(isset($_SERVER['HTTP_REFERER'])){
	$referrerUrl = $_SERVER['HTTP_REFERER'];
	//echo $referrerUrl;
	if(isset($_GET['lang'])){
		$lang = $_GET['lang'];
		if($lang == 'ne'){
			$_SESSION['lang'] = 'ne';
		}else{
			$_SESSION['lang'] = 'en';
		}
	}

	$redirectTo = $referrerUrl;

	if (strpos($referrerUrl, '/en') !== false) {
		$redirectTo = str_replace("/en","/ne", $referrerUrl);
	}
	if (strpos($referrerUrl, '/ne') !== false) {
		$redirectTo = str_replace("/ne","/en", $referrerUrl);
	}
	
	header('Location: '.$redirectTo);
}else{
	header('Location: '.ROOT_PATH);
}
?>