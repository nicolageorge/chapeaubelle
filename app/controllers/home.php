<?php
require_once( __ROOT__ . "/classes/controller.php" );

class HomeController extends TreeController{

	public function indexAction(){
		$this->view->render( "/views/pages/home.php", [ "var1" => "var1 val" ] );
	}
}
