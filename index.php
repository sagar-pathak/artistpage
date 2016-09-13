<?php
	header("Content-Type: text/html");
	require("settings/links.php");
	require dirname(__FILE__).'/'.LIB_DIR.'AltoRouter.php';

	function main(){

		$router = new AltoRouter();
		$router->setBasePath('/WebProjects/artist');
		// map homepage
		$router->map( 'GET', '/', function() {
			require(LANG_DIR."strings-en.php");
			require HOMEPAGE;
		});

		$router->map( 'GET', '/[a:l]', function() {
			//require(LANG_DIR."strings-np.php");
			echo $l;
			//require HOMEPAGE;
		});

		// $router->map( 'GET', '[*:en]', function() {
		// 	require(LANG_DIR."strings-en.php");
		// 	require HOMEPAGE;
		// });	

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

	main();
?>