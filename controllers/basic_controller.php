<?php
require_once( __ROOT__ . "/classes/view.php" );
class BasicController{

	protected $view;

	function __construct(){
		$this->view = new View();
	}
}
