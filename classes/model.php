<?php
require( __ROOT__ . '/classes/database.php' );

class TreeModel{
	protected $db;

	function __construct(){
		$this->db = new DB();
	}
}
