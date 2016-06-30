<?php
//require_once( __ROOT__ . "/classes/controller.php" );
//require_once( __ROOT__ . "/models/client_model.php" );

class App_Controllers_Clients extends Core_Controller{

	function __construct(){
		//$this->model = new ClientModel();
		parent::__construct();
	}

	public function indexAction(){
		$data = array();

		$this->view->render( "app/views/clients/list.php", $data );
	}

	public function addAction(){
		$Client = new ClientModel();

		if( !empty( $_POST['client'] ) ){
			$Client = new ClientModel( $_POST['client'] );

			$Client->validate();
		}

		var_dump( $Client );

		$this->view->render( "app/views/clients/add.php", $data );
	}



}
