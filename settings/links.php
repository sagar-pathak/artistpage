<?php
	
	define('DOMAIN_NAME', "http://localhost");

	$rootPath = DOMAIN_NAME."/WebProjects/artist/";

	$rootPathLang = $rootPath.$_SESSION['lang']."/";

	define('ROOT_PATH', $rootPath, true);
	define('ROOT_PATH', $rootPath);

	define('ROOT_PATH_LANG', $rootPathLang, true);
	define('ROOT_PATH_LANG', $rootPathLang);

	define('CSS_DIR',BASE_PATH."/assets/css/");
	define('IMG_DIR',BASE_PATH."/assets/images/");
	define('JS_DIR',BASE_PATH."/assets/js/");
	define('LIB_DIR',BASE_PATH."/assets/lib/");
	define('LANG_DIR',"settings/lang/");

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

	// PAGES
	define('HOMEPAGE',VIEWS_DIR.'home.php');
	define('ABOUTPAGE', VIEWS_DIR.'about.php');
	define('GALLERY', VIEWS_DIR.'gallery.php');
	define('VIDEOS', VIEWS_DIR.'videos.php');
	define('FEEDBACK', VIEWS_DIR.'feedback.php');

?>