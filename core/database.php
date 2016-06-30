<?php

$ex = new \Exception;
var_dump( $ex->getTraceAsString() );

class TreeDB{
	private $dbhost = DB_HOST;
	private $dbuser = DB_USER;
	private $dbpass = DB_PASS;
	private $database=DB_NAME;
	private $query = "";
	private $connection;

	function __construct(){
		$this->connection = mysqli_connect( $this->dbhost, $this->dbuser, $this->dbpass );

		if ( !$this->connection ){
			die( 'Not connected : ' . mysqli_error( $this->connection ) );
		}

		$db_selected = mysqli_select_db( $this->connection, $this->database );
		if ( !$db_selected )
			die ( 'Can\'t use '.$this->database.' : ' . mysqli_error( $this->connection ) );
		mysqli_set_charset($this->connection, 'utf8' );
	}

	function __destruct(){
		$this->connection = NULL;
	}

	public function setQuery( $stmt ){
		$this->query = $stmt;
	}

	public function executeQuery( $q = "" ){
		if( !( empty( $q ) ) )
			$this->query = $q;

		if( !empty($this->query) )
			return mysqli_query($this->connection, $this->query);
		else
			throw new Exception("query is empty");
	}

	public function getRows($q = ""){
		// Formulate Query
		// This is the best way to perform an SQL query
		// For more examples, see mysqli_real_escape_string()
		if(!(empty($q)))
			$this->query = sprintf($q);

		// Perform Query
		$result = mysqli_query($this->connection, $this->query);

		// Check result
		// This shows the actual query sent to MySQL, and the error. Useful for debugging.
		if (!$result) {
			$message  = 'Invalid query: ' . mysqli_error( $this->connection ) . "\n";
			$message .= 'Whole query: ' . $this->query;
			die($message);
		}

		// Use result
		// Attempting to print $result won't allow access to information in the resource
		// One of the mysql result functions must be used
		// See also mysqli_result(), mysqli_fetch_array(), mysqli_fetch_row(), etc.
		$resultArray = array();
		while(($resultArray[] = mysqli_fetch_assoc($result)) || array_pop($resultArray));

		// Free the resources associated with the result set
		// This is done automatically at the end of the script
		mysqli_free_result($result);
		$result = NULL;
		return $resultArray;

	}


	public function getRow($q = ""){
		if(!(empty($q)))
			$this->query = sprintf($q);

		$result = mysqli_query($this->connection, $this->query);

		if (!$result) {
			$message  = 'Invalid query: ' . mysqli_error( $this->connection ) . "\n";
			$message .= 'Whole query: ' . $this->query;
			die($message);
		}

		$resultArray = array();
		while(($resultArray[] = mysqli_fetch_assoc($result)) || array_pop($resultArray));

		mysqli_free_result($result);
		$result = NULL;

		if( !empty ( $resultArray[0] ) )
			return $resultArray[0];
		else
			return null;

	}

	public function insert($tableName, $toInsert){
		if(!empty( $toInsert[0] ) && is_array($toInsert[0])){
			$rezArray = array();
			foreach($toInsert as $k=>$v){
				$insertQuery = sprintf("INSERT INTO %s(%s) VALUES('%s')",$tableName, implode(',', array_keys($v)), implode("','", array_values($v)));
				mysqli_query($this->connection, $insertQuery);
				$rezArray[] = mysqli_insert_id( $this->connection );
			}
			return $rezArray;
		}else{
			$insertQuery = sprintf("INSERT INTO %s(%s) VALUES('%s')",$tableName, implode(",", array_keys($toInsert)), implode("','", array_values($toInsert)));
			mysqli_query($this->connection, $insertQuery);
			return mysqli_insert_id( $this->connection );
		}
	}



}
?>
