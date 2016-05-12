<?php
require_once( "basic_controller.php" );

class PagesController extends BasicController{

	function __construct(){
		parent::__construct();
	}

	public function indexAction(){


		$data = array( "par1"=>"asdf", "par2"=>"zsccdd" );

		$this->view->render( '/views/pages/home.php', $data );
	}

	public function error(){
		//require_once( __ROOT__. '/views/pages/error.php' );
	}
}
