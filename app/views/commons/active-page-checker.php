<?php
	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

	if (strpos($actual_link, '/about') !== false) {
		define('ACTIVEPAGE', 'about');
	}

	if (strpos($actual_link, '/gallery') !== false) {
		define('ACTIVEPAGE', 'gallery');
	}

	if (strpos($actual_link, '/videos') !== false) {
		define('ACTIVEPAGE', 'videos');
	}

	if (strpos($actual_link, '/feedback') !== false) {
		define('ACTIVEPAGE', 'feedback');
	}

	if(defined('ACTIVEPAGE')){
		switch(ACTIVEPAGE){
			case 'home':
				define('ACTIVE_HOME', 'class="active"');
				break;
			case 'about':
				define('ACTIVE_ABOUT', 'class="active"');
				break;
			case 'gallery':
				define('ACTIVE_GALLERY', 'class="active"');
				break;
			case 'videos':
				define('ACTIVE_VIDEOS', 'class="active"');
				break;
			case 'feedback':
				define('ACTIVE_FEEDBACK', 'class="active"');
				break;
		}
	}

	/* default */ 
	if(!(defined('ACTIVEPAGE') && ACTIVEPAGE)){ define('ACTIVEPAGE', 'home');define('ACTIVE_HOME', 'class="active"');} 
	if(!(defined('ACTIVE_HOME') && ACTIVE_HOME)){ define('ACTIVE_HOME',''); }
	if(!(defined('ACTIVE_ABOUT') && ACTIVE_ABOUT)){ define('ACTIVE_ABOUT',''); }
	if(!(defined('ACTIVE_GALLERY') && ACTIVE_GALLERY)){ define('ACTIVE_GALLERY',''); }
	if(!(defined('ACTIVE_VIDEOS') && ACTIVE_VIDEOS)){ define('ACTIVE_VIDEOS',''); }
	if(!(defined('ACTIVE_FEEDBACK') && ACTIVE_FEEDBACK)){ define('ACTIVE_FEEDBACK',''); }
?>