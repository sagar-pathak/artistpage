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
		if($_SESSION['lang'] == 'ne'){
			$redirectTo = str_replace("/en","/ne", $referrerUrl);
		}
	}else if(strpos($referrerUrl, '/ne') !== false) {
		if($_SESSION['lang'] == 'en'){
			$redirectTo = str_replace("/ne","/en", $referrerUrl);
		}
	}else{
		$rootPath = $_GET['root'];
		$otherParamsArr = explode($rootPath, $referrerUrl);
		if(array_key_exists(1, $otherParamsArr)){
			$otherParamStr = $otherParamsArr[1]; 
			$redirectTo = $rootPath.$lang."/".$otherParamStr;
		}
	}
	
	header('Location: '.$redirectTo);
}else{
	header('Location: '.ROOT_PATH);
}
?>