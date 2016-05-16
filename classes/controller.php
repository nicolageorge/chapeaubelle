<?php
require_once( __ROOT__ . "/classes/view.php" );

class TreeController{

	protected $view;

	function __construct(){
		$this->view = new TreeView();
	}
}
