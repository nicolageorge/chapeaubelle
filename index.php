<?php
require_once( "classes/database.php" );
require_once( "classes/view.php" );
//require_once( "classes/routes.php" );

define( '__ROOT__', dirname(__FILE__) );

function call( $controller, $action ){
	if( file_exists( __ROOT__ . "/controllers/" . $controller . "_controller.php" ) )
		require_once( __ROOT__ . "/controllers/" . $controller . "_controller.php" );
	else{
		echo __ROOT__ . "/controllers/" . $controller . "_controller.php does not exist";
		//die();
	}

	$controller = $controller . "Controller";
	$controller = new $controller;

	$action = $action. "Action";
	$controller->{ $action }();
}

$url = parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH );
$pathComponents = explode( "/", trim( $url, "/" ) );

$controller = ( isset( $pathComponents[0] ) ) ? $pathComponents[0] : "home";
$action 	= ( isset( $pathComponents[1] ) ) ? $pathComponents[1] : "index";
call( $controller, $action );

?>
