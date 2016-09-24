<?php
	header("Content-Type: text/html");
	//error_reporting(0);
	require 'assets/lib/AltoRouter.php';

	session_start();

	$router = new AltoRouter();
	$router->setBasePath('/WebProjects/artist');

	define('BASE_PATH', $router->basePath);

	if( !isset($_SESSION["lang"]) ){
		$_SESSION["lang"] = "en";
	}

	require("settings/lang/getlang.php");
	$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$_SESSION['lang'] = getCurrentLang(BASE_PATH, $actual_link);

	require("settings/links.php");

	function main($router){

		$router->map( 'GET', '/admin', function() {
			header('Location: '.ADMIN);
		});

		// map homepage
		$router->map( 'GET', '/', function() {
			require(LANG_DIR."strings-en.php");
			require HOMEPAGE;
		});


		$router->map( 'GET', '/about', function() {
			require(LANG_DIR."strings-en.php");
			require ABOUTPAGE;
		});

		// gallery router
		$router->map( 'GET', '/gallery', function() {
			require(LANG_DIR."strings-en.php");
			require GALLERY;
		});

		$router->map( 'GET', '/gallery[*]', function() {
			require(LANG_DIR."strings-en.php");
			require GALLERY;
		});

		$router->map( 'GET', '/gallery[*]/', function() {
			require(LANG_DIR."strings-en.php");
			require GALLERY;
		});

		$router->map( 'GET', '/[a:lang]/gallery', function($lang) {
			if($lang == "ne"){
				$_SESSION['lang'] = 'ne';
				require(LANG_DIR."strings-np.php");
				require GALLERY;
			}else{
				require(LANG_DIR."strings-en.php");
				require GALLERY;
			}
		});

		$router->map( 'GET', '/[a:lang]/gallery[*]', function($lang) {
			if($lang == "ne"){
				$_SESSION['lang'] = 'ne';
				require(LANG_DIR."strings-np.php");
				require GALLERY;
			}else{
				require(LANG_DIR."strings-en.php");
				require GALLERY;
			}
		});

		// videos router
		$router->map( 'GET', '/videos', function() {
			require(LANG_DIR."strings-en.php");
			require VIDEOS;
		});

		$router->map( 'GET', '/videos[*]', function() {
			require(LANG_DIR."strings-en.php");
			require VIDEOS;
		});

		$router->map( 'GET', '/videos[*]/', function() {
			require(LANG_DIR."strings-en.php");
			require VIDEOS;
		});

		$router->map( 'GET', '/[a:lang]/videos', function($lang) {
			if($lang == "ne"){
				$_SESSION['lang'] = 'ne';
				require(LANG_DIR."strings-np.php");
				require VIDEOS;
			}else{
				require(LANG_DIR."strings-en.php");
				require VIDEOS;
			}
		});

		$router->map( 'GET', '/[a:lang]/videos[*]', function($lang) {
			if($lang == "ne"){
				$_SESSION['lang'] = 'ne';
				require(LANG_DIR."strings-np.php");
				require VIDEOS;
			}else{
				require(LANG_DIR."strings-en.php");
				require VIDEOS;
			}
		});

		// feedback router
		$router->map( 'GET', '/feedback', function() {
			require(LANG_DIR."strings-en.php");
			require FEEDBACK;
		});

		$router->map( 'GET', '/feedback[*]', function() {
			require(LANG_DIR."strings-en.php");
			require FEEDBACK;
		});

		$router->map( 'GET', '/feedback[*]/', function() {
			require(LANG_DIR."strings-en.php");
			require FEEDBACK;
		});

		$router->map( 'GET', '/[a:lang]/feedback', function($lang) {
			if($lang == "ne"){
				$_SESSION['lang'] = 'ne';
				require(LANG_DIR."strings-np.php");
				require FEEDBACK;
			}else{
				require(LANG_DIR."strings-en.php");
				require FEEDBACK;
			}
		});

		$router->map( 'GET', '/[a:lang]/feedback[*]', function($lang) {
			if($lang == "ne"){
				$_SESSION['lang'] = 'ne';
				require(LANG_DIR."strings-np.php");
				require FEEDBACK;
			}else{
				require(LANG_DIR."strings-en.php");
				require FEEDBACK;
			}
		});


		$router->map( 'GET', '/about[*]', function() {
			require(LANG_DIR."strings-en.php");
			require ABOUTPAGE;
		});

		$router->map( 'GET', '/[a:lang]', function($lang) {
			if($lang == "ne"){
				$_SESSION['lang'] = 'ne';
				require(LANG_DIR."strings-np.php");
				require HOMEPAGE;
			}else{
				require(LANG_DIR."strings-en.php");
				require HOMEPAGE;
			}
		});

		$router->map( 'GET', '/[a:lang]/', function($lang) {
			if($lang == "ne"){
				$_SESSION['lang'] = 'ne';
				require(LANG_DIR."strings-np.php");
				require HOMEPAGE;
			}else{
				require(LANG_DIR."strings-en.php");
				require HOMEPAGE;
			}
		});

		$router->map( 'GET', '/[a:lang]/home', function($lang) {
			if($lang == "ne"){
				$_SESSION['lang'] = 'ne';
				require(LANG_DIR."strings-np.php");
				require HOMEPAGE;
			}else{
				require(LANG_DIR."strings-en.php");
				require HOMEPAGE;
			}
		});

		$router->map( 'GET', '/[a:lang]/home[*]', function($lang) {
			if($lang == "ne"){
				$_SESSION['lang'] = 'ne';
				require(LANG_DIR."strings-np.php");
				require HOMEPAGE;
			}else{
				require(LANG_DIR."strings-en.php");
				require HOMEPAGE;
			}
		});

		$router->map( 'GET', '/[a:lang]/about', function($lang) {
			if($lang == "ne"){
				$_SESSION['lang'] = 'ne';
				require(LANG_DIR."strings-np.php");
				require ABOUTPAGE;
			}else{
				require(LANG_DIR."strings-en.php");
				require ABOUTPAGE;
			}
		});

		$router->map( 'GET', '/[a:lang]/about[*]', function($lang) {
			if($lang == "ne"){
				$_SESSION['lang'] = 'ne';
				require(LANG_DIR."strings-np.php");
				require ABOUTPAGE;
			}else{
				require(LANG_DIR."strings-en.php");
				require ABOUTPAGE;
			}
		});

		$router->map( 'POST', '/delete', function() {
			$filename = $_POST['filename'];
			unlink("assets/images/gallery/".$filename);
			unlink("assets/images/gallery/thumbnail/".$filename);
		});

		// match current request url
		$match = $router->match();

		// call closure or throw 404 status
		if( $match && is_callable( $match['target'] ) ) {
			call_user_func_array( $match['target'], $match['params'] ); 
		} else {
			// no route was matched
			header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
		}
	}

	main($router);
?>