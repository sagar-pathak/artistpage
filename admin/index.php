<?php
	header("Content-Type: text/html");
	//error_reporting(0);
	$pathShift = "../"; //adjusting directory location based on UI 
	require $pathShift.'assets/lib/AltoRouter.php';

	session_start();

	$router = new AltoRouter();
	$router->setBasePath('/WebProjects/artist/admin/');

	define('BASE_PATH', $router->basePath);

	function main($router){

		$router->map( 'GET', '/admin/', function() {
			header('Location: '.ADMIN.'index.php');
		});

		// map homepage
		$router->map( 'GET', '/', function() {
			require(LANG_DIR."strings-en.php");
			require HOMEPAGE;
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