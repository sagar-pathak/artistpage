<?php
	define('DOMAIN_NAME', "http://localhost");

	define('ROOT_PATH', DOMAIN_NAME."/WebProjects/artist/");
	define('ADMIN_CSS_DIR',BASE_PATH."/assets/css/");
	define('ADMIN_IMG_DIR',BASE_PATH."/assets/img/");
	define('ADMIN_JS_DIR',BASE_PATH."/assets/js/");
	define('ADMIN_LIB_DIR',BASE_PATH."/assets/lib/");

	// CONFIG
	define('DB_CONFIG', "settings/db-config.php");

	// libraries
	define('UPLOAD_SCRIPT', "assets/lib/jQuery-File-Upload-9.12.5/upload.php");
	define('DELETE_URL', ROOT_PATH.'delete');

	define('ADMIN_VIEWS_DIR',"views/");
	define('ADMIN_CONTROLLERS_DIR', "controllers/");
	define('ADMIN_MODEL_DIR', "models/");

	// commons
	define('ADMIN_HEADER', ADMIN_VIEWS_DIR."commons/header.php");
	define('ADMIN_SIDEBAR', ADMIN_VIEWS_DIR."commons/sidebar.php");
	define('ADMIN_FOOTER', ADMIN_VIEWS_DIR."commons/footer.php");
	define('ADMIN_PANEL_TOP', ADMIN_VIEWS_DIR."commons/panel-top.php");

	// pages
	define('ADMIN_LOGIN', ADMIN_VIEWS_DIR.'login.php');
	define('ADMIN_HOME', ADMIN_VIEWS_DIR.'home.php');
	define('ADMIN_ABOUT', ADMIN_VIEWS_DIR.'about.php');
	define('ADMIN_GALLERY', ADMIN_VIEWS_DIR.'gallery.php');
	define('ADMIN_VIDEOS', ADMIN_VIEWS_DIR.'videos.php');
	define('ADMIN_FEEDBACK', ADMIN_VIEWS_DIR.'feedback.php');
	define('ADMIN_SETTING', ADMIN_VIEWS_DIR.'setting.php');

	// models
	define('MODEL_LOGIN', ADMIN_MODEL_DIR.'login.php');
	define('MODEL_HOME', ADMIN_MODEL_DIR.'home.php');
	define('MODEL_ABOUT', ADMIN_MODEL_DIR.'about.php');
	define('MODEL_GALLERY', ADMIN_MODEL_DIR.'gallery.php');
	define('MODEL_VIDEOS', ADMIN_MODEL_DIR.'videos.php');
	define('MODEL_FEEDBACK', ADMIN_MODEL_DIR.'feedback.php');

	// controllers
	define('CONTROLLER_LOGIN', ADMIN_CONTROLLERS_DIR.'login.php');
	define('CONTROLLER_HOME', ADMIN_CONTROLLERS_DIR.'home.php');
	define('CONTROLLER_ABOUT', ADMIN_CONTROLLERS_DIR.'about.php');
	define('CONTROLLER_GALLERY', ADMIN_CONTROLLERS_DIR.'gallery.php');
	define('CONTROLLER_VIDEOS', ADMIN_CONTROLLERS_DIR.'videos.php');
	define('CONTROLLER_FEEDBACK', ADMIN_CONTROLLERS_DIR.'feedback.php');

?>