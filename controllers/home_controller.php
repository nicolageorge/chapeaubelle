<?php
require_once( "basic_controller.php" );
class HomeController extends BasicController{
	public function indexAction(){
		$this->view->render( "/views/pages/home.php", [ "var1" => "var1 val" ] );
	}
}
