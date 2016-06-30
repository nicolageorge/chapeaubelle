<?php

class Core_Controller{

	protected $view;

	function __construct(){
		$this->view = new Core_View();
	}
}
