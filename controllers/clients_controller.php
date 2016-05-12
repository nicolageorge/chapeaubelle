<?php
require_once( "basic_controller.php" );

class ClientsController extends BasicController{


	function __construct(){
		parent::__construct();
	}

	public function indexAction(){
		$this->view->render( "/views/pages/home.php", [ "var1" => "var1 val" ] );
	}


}
