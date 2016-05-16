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
		$this->view->render( "/views/pages/home.php", [ "var1" => "var1 val" ] );
	}



}
