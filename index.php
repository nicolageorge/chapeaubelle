<?php
include( "core/config.php" );

//require_once( "classes/database.php" );
//require_once( "classes/view.php" );
//require_once( "classes/routes.php" );

define( '__ROOT__', dirname(__FILE__) );

spl_autoload_register(function ($class) {

	$includePath = str_replace( '_', '/', strtolower( $class) ) . '.php';

	var_dump( $includePath );

    include $includePath;
});




function call( $controller, $action ){
	/*
	if( file_exists( __ROOT__ . "/controllers/" . $controller . "_controller.php" ) )
		require_once( __ROOT__ . "/controllers/" . $controller . "_controller.php" );
	else{
		echo __ROOT__ . "/controllers/" . $controller . "_controller.php does not exist";
		//die();
	}
	*/

	$controller = "App_Controllers_" . $controller;
	$controller = new $controller;

	$action = $action . "Action";
	$controller->{ $action }();
}

$url = parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH );
$pathComponents = explode( "/", trim( $url, "/" ) );

$controller = ( $pathComponents[0] ) ? $pathComponents[0] : "home";
$action 	= ( isset( $pathComponents[1] ) ) ? $pathComponents[1] : "index";
call( $controller, $action );

?>
