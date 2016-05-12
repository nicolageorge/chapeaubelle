<?php

define('__ROOT__', dirname(dirname(__FILE__)));

function call( $controller, $action ){
	require_once( __ROOT__ . "/controllers/" . $controller . "_controller.php" );

	switch( $controller ){
		case 'pages':
			$controller = new PagesController();
			break;
	}

	$controller->{ $action }();
}

$controllers = array( 'pages' => [ 'home', 'error' ] );

if( array_key_exists( $controller, $controllers ) ){
	if( in_array( $action, $controllers[ $controller ] ) ){
		call( $controller, $action );
	}else{
		call( 'pages', 'error' );
	}
}else{
	call( 'pages', 'error' );
}
