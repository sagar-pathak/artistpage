<?php
	header("Content-Type: text/html");
	//error_reporting(0);
	$pathShift = "../"; //adjusting directory location based on UI 
	require $pathShift.'assets/lib/AltoRouter.php';

	session_start();

	$router = new AltoRouter();
	$router->setBasePath('/WebProjects/artist/admin');
	define('BASE_PATH', $router->basePath);
	require("setting/links.php");
	require("setting/lang/strings-en.php");

	function main($router){

		$router->map( 'GET', '/', function() {
			require(ADMIN_HOME);
		});

		$router->map( 'GET', '/login', function() {
			require(ADMIN_LOGIN);
		});

		$router->map( 'GET', '/home', function() {
			require(ADMIN_HOME);
		});

		$router->map( 'GET', '/about', function() {
			require(ADMIN_ABOUT);
		});

		$router->map( 'GET', '/gallery', function() {
			require(ADMIN_GALLERY);
		});

		$router->map( 'GET', '/videos', function() {
			require(ADMIN_VIDEOS);
		});

		$router->map( 'GET', '/feedback', function() {
			require(ADMIN_FEEDBACK);
		});
		
		$router->map( 'GET', '/password', function() {
			require(ADMIN_SETTING);
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