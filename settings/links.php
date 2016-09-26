<?php
	
	define('DOMAIN_NAME', "http://localhost");

	$rootPath = DOMAIN_NAME."/WebProjects/artist/";

	define('ROOT_PATH', $rootPath, true);
	define('ROOT_PATH', $rootPath);

	define('CSS_DIR',BASE_PATH."/assets/css/");
	define('IMG_DIR',BASE_PATH."/assets/images/");
	define('JS_DIR',BASE_PATH."/assets/js/");
	define('LIB_DIR',BASE_PATH."/assets/lib/");
	define('LANG_DIR',"settings/lang/");

	// CONFIG
	define('CONFIG', "settings/config.php");

	// COMPONENTS
	define('VIEWS_DIR',"app/views/");
	define('HEADER',VIEWS_DIR."commons/header.php");
	define('FOOTER',VIEWS_DIR."commons/footer.php");
	define('FEED_HEADER',VIEWS_DIR."commons/feed-header.php");
	define('IMG_SLIDER', VIEWS_DIR."commons/img-slider.php");
	define('HEADING', VIEWS_DIR.'commons/heading.php');
	define('ACTIVE_PAGE_CHECKER', VIEWS_DIR.'commons/active-page-checker.php');

	// UTILITY
	define('SETLANG', LANG_DIR."setlang.php?lang=");

	//LIB
	define('THUMB',LIB_DIR."thumb/thumb.php?src=");
	define('RECAPTCHA', "assets/lib/recaptcha-php-1.11/recaptchalib.php");

	// PAGES
	define('HOMEPAGE',VIEWS_DIR.'home.php');
	define('ABOUTPAGE', VIEWS_DIR.'about.php');
	define('GALLERY', VIEWS_DIR.'gallery.php');
	define('VIDEOS', VIEWS_DIR.'videos.php');
	define('FEEDBACK', VIEWS_DIR.'feedback.php');
	define('ADMIN', ROOT_PATH.'admin/');

	// DB CONFIG MAP
	define('DB_CONFIG', "admin/settings/db-config.php");

	// MODEL MAP
	define('MODEL_PATH', "admin/models/");
	define('MODEL_HOME', MODEL_PATH."home.php");
	define('MODEL_ABOUT', MODEL_PATH."about.php");
	define('MODEL_VIDEOS', MODEL_PATH."videos.php");

	// CONTROLLER
	define('CONTROLLER_PATH', 'app/controllers/');
	define('CONTROLLER_FEEDBACK', CONTROLLER_PATH."feedback.php");
?>