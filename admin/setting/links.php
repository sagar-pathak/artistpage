<?php

	define('ADMIN_CSS_DIR',BASE_PATH."/assets/css/");
	define('ADMIN_IMG_DIR',BASE_PATH."/assets/img/");
	define('ADMIN_JS_DIR',BASE_PATH."/assets/js/");
	define('ADMIN_LIB_DIR',BASE_PATH."/assets/lib/");

	define('ADMIN_VIEWS_DIR',"views/");

	// commons
	define('ADMIN_HEADER', ADMIN_VIEWS_DIR."commons/header.php");
	define('ADMIN_SIDEBAR', ADMIN_VIEWS_DIR."commons/sidebar.php");
	define('ADMIN_FOOTER', ADMIN_VIEWS_DIR."commons/footer.php");
	define('ADMIN_PANEL_TOP', ADMIN_VIEWS_DIR."commons/panel-top.php");

	// pages
	define('ADMIN_HOME', ADMIN_VIEWS_DIR.'home.php');
	define('ADMIN_ABOUT', ADMIN_VIEWS_DIR.'about.php');
	define('ADMIN_GALLERY', ADMIN_VIEWS_DIR.'gallery.php');
	define('ADMIN_VIDEOS', ADMIN_VIEWS_DIR.'videos.php');
	define('ADMIN_FEEDBACK', ADMIN_VIEWS_DIR.'feedback.php');
	define('ADMIN_SETTING', ADMIN_VIEWS_DIR.'setting.php');

?>