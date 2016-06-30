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
		$data = array();
		$Client = new App_Models_Client();

		if( !empty( $_POST['client'] ) ){
			$Client = new App_Models_Client( $_POST['client'] );

			$Client->validate();
		}

		//var_dump( $Client );

		$this->view->render( "views/clients/add.php", $data );
	}



}
