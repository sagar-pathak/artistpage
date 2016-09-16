<?php
	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

	if (strpos($actual_link, '/about') !== false) {
		define('ACTIVEPAGE', 'about');
	}
	if(defined('ACTIVEPAGE')){
		switch(ACTIVEPAGE){
			case 'home':
				define('ACTIVE_HOME', 'class="active"');
				break;
			case 'about':
				define('ACTIVE_ABOUT', 'class="active"');
				break;
		}
	}
	if(!(defined('ACTIVEPAGE') && ACTIVEPAGE)){ define('ACTIVEPAGE', 'home');define('ACTIVE_HOME', 'class="active"'); /* default */ }
	if(!(defined('ACTIVE_HOME') && ACTIVE_HOME)){ define('ACTIVE_HOME',''); }
	if(!(defined('ACTIVE_ABOUT') && ACTIVE_ABOUT)){ define('ACTIVE_ABOUT',''); }
?>