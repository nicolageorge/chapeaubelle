<?php
require_once( __ROOT__ . '/classes/model.php' );

class ClientModel extends TreeModel{
	private $id;
	private $name;
	private $cui;
	private $address;
	private $contact_person;
	private $phone;
	private $mail;

	function __construct( $data = null ){
		if( $data != null ){
			$this->name 		  = ( $data["name"] ) ? $data["name"] : NULL;
			$this->cui 			  = ( $data["cui"] ) ? $data["cui"] : NULL;
			$this->address 		  = ( $data["address"] ) ? $data["address"] : NULL;
			$this->contact_person = ( $data["contact_person"] ) ? $data["contact_person"] : NULL;
			$this->phone 	      = ( $data["phone"] ) ? $data["phone"] : NULL;
			$this->mail 		  = ( $data["mail"] ) ? $data["mail"] : NULL;
		}

		parent::__construct();
	}

	public function __get( $property ){
		var_dump( __METHOD__ );
		if( property_exists( $this, $property ) ){
			return $this->$property;
		}
	}

	public function __set( $property, $value ){
		var_dump( __METHOD__ );
		if( property_exists( $this, $property ) )
			$this->$property = $value;
	}



}
