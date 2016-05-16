<?php
require_once( __ROOT__ . "/classes/controller.php" );
require_once( __ROOT__ . "/models/client_model.php" );

class ClientsController extends TreeController{

	private $model;

	function __construct(){
		$this->model = new ClientModel();
		parent::__construct();
	}

	public function indexAction(){
		$data = array();

		$this->view->render( "/views/clients/list.php", $data );
	}

	public function addAction(){
		$data = array();

		$this->view->render( "/views/clients/add.php", $data );
	}



}
