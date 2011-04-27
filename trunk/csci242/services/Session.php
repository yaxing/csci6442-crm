<?php

class Session {

	var $username = "175192_crmtest";
	var $password = "crmtestcsci242";
	var $server = "mysql2.myregisteredsite.com";
	var $port = "3306";
	var $databasename = "175192_CRM_Test";
	var $tablename = "account_person";
	var $pid = 15;
	var $connection;
	
	
	/**
	 * The constructor initializes the connection to database. Everytime a request is 
	 * received by Zend AMF, an instance of the service class is created and then the
	 * requested method is invoked.
	 */
	public function __construct() {
	  	$this->connection = mysqli_connect(
	  							$this->server,  
	  							$this->username,  
	  							$this->password, 
	  							$this->databasename,
	  							$this->port
	  						);

		$this->throwExceptionOnError($this->connection);
	}
	
	public function getCurrentPerson() {
		if(isset($_COOKIE["account_person"]["person_id"]))
			$this->pid = $_COOKIE["account_person"]["person_id"];
		//$this->throwExceptionOnError();
		//return $this->pid;
		$stmt = mysqli_prepare($this->connection, "SELECT * FROM $this->tablename where account_person_id=?");
		$this->throwExceptionOnError();
		
		mysqli_stmt_bind_param($stmt, 'i', $this->pid);		
		$this->throwExceptionOnError();
		
		mysqli_stmt_execute($stmt);
		$this->throwExceptionOnError();
		
		mysqli_stmt_bind_result($stmt, $row->account_person_id, $row->parent_account, $row->account_person_title, $row->first_name, $row->last_name, $row->user_name, $row->user_pwd);
		
		if(mysqli_stmt_fetch($stmt)) {
	      return $row;
		} else {
	      return null;
		}
	}
	/**
	 * Utility function to throw an exception if an error occurs 
	 * while running a mysql command.
	 */
	private function throwExceptionOnError($link = null) {
		if($link == null) {
			$link = $this->connection;
		}
		if(mysqli_error($link)) {
			$msg = mysqli_errno($link) . ": " . mysqli_error($link);
			throw new Exception('MySQL Error - '. $msg);
		}		
	}
}

?>
