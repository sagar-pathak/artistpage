<?php
	// for lang check
	function getCurrentLang($rootPath, $actual_link){
		$langStrArr = explode($rootPath, $actual_link);

		if(array_key_exists(1, $langStrArr)){
			$langStrTemp = $langStrArr[1]; 
			$langStr = substr($langStrTemp, 0, 3);
			if($langStr == "ne" || $langStr == "ne/"){
				$_SESSION['lang'] = 'ne';
				define('ACTIVE_NE', 'underline');
			}else{
				define('ACTIVE_EN', 'underline');
			}
		}
		return $_SESSION['lang'];
	}
?>