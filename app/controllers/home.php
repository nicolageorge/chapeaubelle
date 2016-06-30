<?php
require_once( __ROOT__ . "/core/controller.php" );

class App_Controllers_home extends Core_Controller{

	public function indexAction(){
		$this->view->render( "/views/pages/home.php", [ "var1" => "var1 val" ] );
	}
}
