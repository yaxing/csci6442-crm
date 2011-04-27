<?php

/**
 *  README for sample service
 *
 *  This generated sample service contains functions that illustrate typical service operations.
 *  Use these functions as a starting point for creating your own service implementation. Modify the 
 *  function signatures, references to the database, and implementation according to your needs. 
 *  Delete the functions that you do not use.
 *
 *  Save your changes and return to Flash Builder. In Flash Builder Data/Services View, refresh 
 *  the service. Then drag service operations onto user interface components in Design View. For 
 *  example, drag the getAllItems() operation onto a DataGrid.
 *  
 *  This code is for prototyping only.
 *  
 *  Authenticate the user prior to allowing them to call these methods. You can find more 
 *  information at http://www.adobe.com/go/flex_security
 *
 */
class TicketService {

	var $username = "175192_crmtest";
	var $password = "crmtestcsci242";
	var $server = "mysql2.myregisteredsite.com";
	var $port = "3306";
	var $databasename = "175192_CRM_Test";
	var $tablename = "ticket";

	var $connection;
	
	/**
	 * Returns the rows from the table of all the closed tickets.
	 *
	 * Add authroization or any logical checks for secure access to your data 
	 *
	 * @return array
	 */
	public function getAllTicketClosed() {

		$stmt = mysqli_prepare($this->connection, "SELECT * FROM $this->tablename where ticket_status='Closed'");		
		$this->throwExceptionOnError();
		
		mysqli_stmt_execute($stmt);
		$this->throwExceptionOnError();
		
		$rows = array();
		
		mysqli_stmt_bind_result($stmt, $row->ticket_id, $row->customer_priority, $row->ticket_description, $row->ticket_summary, $row->created_date, $row->created_by_agent, $row->ticket_type, $row->requested_completion, $row->assigned_to, $row->contact_id, $row->customer_location_id, $row->ticket_status);
		
	    while (mysqli_stmt_fetch($stmt)) {
	      $row->created_date = new DateTime($row->created_date);
	      $row->requested_completion = new DateTime($row->requested_completion);
	      $rows[] = $row;
	      $row = new stdClass();
	      mysqli_stmt_bind_result($stmt, $row->ticket_id, $row->customer_priority, $row->ticket_description, $row->ticket_summary, $row->created_date, $row->created_by_agent, $row->ticket_type, $row->requested_completion, $row->assigned_to, $row->contact_id, $row->customer_location_id, $row->ticket_status);
	    }
		
		mysqli_stmt_free_result($stmt);
	    mysqli_close($this->connection);
	
	    return $rows;
	}

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

	/**
	 * Returns all the rows from the table.
	 *
	 * Add authroization or any logical checks for secure access to your data 
	 *
	 * @return array
	 */
	public function getAllTicket() {

		$stmt = mysqli_prepare($this->connection, "SELECT * FROM $this->tablename");		
		$this->throwExceptionOnError();
		
		mysqli_stmt_execute($stmt);
		$this->throwExceptionOnError();
		
		$rows = array();
		
		mysqli_stmt_bind_result($stmt, $row->ticket_id, $row->customer_priority, $row->ticket_description, $row->ticket_summary, $row->created_date, $row->created_by_agent, $row->ticket_type, $row->requested_completion, $row->assigned_to, $row->contact_id, $row->customer_location_id, $row->ticket_status);
		
	    while (mysqli_stmt_fetch($stmt)) {
	      $row->created_date = new DateTime($row->created_date);
	      $row->requested_completion = new DateTime($row->requested_completion);
	      $rows[] = $row;
	      $row = new stdClass();
	      mysqli_stmt_bind_result($stmt, $row->ticket_id, $row->customer_priority, $row->ticket_description, $row->ticket_summary, $row->created_date, $row->created_by_agent, $row->ticket_type, $row->requested_completion, $row->assigned_to, $row->contact_id, $row->customer_location_id, $row->ticket_status);
	    }
		
		mysqli_stmt_free_result($stmt);
	    mysqli_close($this->connection);
	
	    return $rows;
	}

	/**
	 * Returns the item corresponding to the value specified for the primary key.
	 *
	 * Add authorization or any logical checks for secure access to your data 
	 *
	 * 
	 * @return stdClass
	 */
	public function getTicketByID($itemID) {
		
		$stmt = mysqli_prepare($this->connection, "SELECT * FROM $this->tablename where ticket_id=?");
		$this->throwExceptionOnError();
		
		mysqli_stmt_bind_param($stmt, 'i', $itemID);		
		$this->throwExceptionOnError();
		
		mysqli_stmt_execute($stmt);
		$this->throwExceptionOnError();
		
		mysqli_stmt_bind_result($stmt, $row->ticket_id, $row->customer_priority, $row->ticket_description, $row->ticket_summary, $row->created_date, $row->created_by_agent, $row->ticket_type, $row->requested_completion, $row->assigned_to, $row->contact_id, $row->customer_location_id, $row->ticket_status);
		
		if(mysqli_stmt_fetch($stmt)) {
	      $row->created_date = new DateTime($row->created_date);
	      $row->requested_completion = new DateTime($row->requested_completion);
	      return $row;
		} else {
	      return null;
		}
	}

	/**
	 * Returns the item corresponding to the value specified for the primary key.
	 *
	 * Add authorization or any logical checks for secure access to your data 
	 *
	 * 
	 * @return stdClass
	 */
	public function createTicket($item) {

		$stmt = mysqli_prepare($this->connection, "INSERT INTO $this->tablename (customer_priority, ticket_description, ticket_summary, created_date, created_by_agent, ticket_type, requested_completion, assigned_to, contact_id, customer_location_id, ticket_status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$this->throwExceptionOnError();

		mysqli_stmt_bind_param($stmt, 'ssssissiiis', $item->customer_priority, $item->ticket_description, $item->ticket_summary, $item->created_date->toString('YYYY-MM-dd HH:mm:ss'), $item->created_by_agent, $item->ticket_type, $item->requested_completion->toString('YYYY-MM-dd HH:mm:ss'), $item->assigned_to, $item->contact_id, $item->customer_location_id, $item->ticket_status);
		$this->throwExceptionOnError();

		mysqli_stmt_execute($stmt);		
		$this->throwExceptionOnError();

		$autoid = mysqli_stmt_insert_id($stmt);

		mysqli_stmt_free_result($stmt);		
		mysqli_close($this->connection);

		return $autoid;
	}

	/**
	 * Updates the passed item in the table.
	 *
	 * Add authorization or any logical checks for secure access to your data 
	 *
	 * @param stdClass $item
	 * @return void
	 */
	public function updateTicket($item) {
	
		$stmt = mysqli_prepare($this->connection, "UPDATE $this->tablename SET customer_priority=?, ticket_description=?, ticket_summary=?, created_date=?, created_by_agent=?, ticket_type=?, requested_completion=?, assigned_to=?, contact_id=?, customer_location_id=?, ticket_status=? WHERE ticket_id=?");		
		$this->throwExceptionOnError();
		
		mysqli_stmt_bind_param($stmt, 'ssssissiiisi', $item->customer_priority, $item->ticket_description, $item->ticket_summary, $item->created_date->toString('YYYY-MM-dd HH:mm:ss'), $item->created_by_agent, $item->ticket_type, $item->requested_completion->toString('YYYY-MM-dd HH:mm:ss'), $item->assigned_to, $item->contact_id, $item->customer_location_id, $item->ticket_status, $item->ticket_id);		
		$this->throwExceptionOnError();

		mysqli_stmt_execute($stmt);		
		$this->throwExceptionOnError();
		
		mysqli_stmt_free_result($stmt);		
		mysqli_close($this->connection);
	}

	/**
	 * Deletes the item corresponding to the passed primary key value from 
	 * the table.
	 *
	 * Add authorization or any logical checks for secure access to your data 
	 *
	 * 
	 * @return void
	 */
	public function deleteTicket($itemID) {
				
		$stmt = mysqli_prepare($this->connection, "DELETE FROM $this->tablename WHERE ticket_id = ?");
		$this->throwExceptionOnError();
		
		mysqli_stmt_bind_param($stmt, 'i', $itemID);
		mysqli_stmt_execute($stmt);
		$this->throwExceptionOnError();
		
		mysqli_stmt_free_result($stmt);		
		mysqli_close($this->connection);
	}


	/**
	 * Returns the number of rows in the table.
	 *
	 * Add authorization or any logical checks for secure access to your data 
	 *
	 * 
	 */
	public function count() {
		$stmt = mysqli_prepare($this->connection, "SELECT COUNT(*) AS COUNT FROM $this->tablename");
		$this->throwExceptionOnError();

		mysqli_stmt_execute($stmt);
		$this->throwExceptionOnError();
		
		mysqli_stmt_bind_result($stmt, $rec_count);
		$this->throwExceptionOnError();
		
		mysqli_stmt_fetch($stmt);
		$this->throwExceptionOnError();
		
		mysqli_stmt_free_result($stmt);
		mysqli_close($this->connection);
		
		return $rec_count;
	}


	/**
	 * Returns $numItems rows starting from the $startIndex row from the 
	 * table.
	 *
	 * Add authorization or any logical checks for secure access to your data 
	 *
	 * 
	 * 
	 * @return array
	 */
	public function getTicket_paged($startIndex, $numItems) {
		
		$stmt = mysqli_prepare($this->connection, "SELECT * FROM $this->tablename LIMIT ?, ?");
		$this->throwExceptionOnError();
		
		mysqli_stmt_bind_param($stmt, 'ii', $startIndex, $numItems);
		mysqli_stmt_execute($stmt);
		$this->throwExceptionOnError();
		
		$rows = array();
		
		mysqli_stmt_bind_result($stmt, $row->ticket_id, $row->customer_priority, $row->ticket_description, $row->ticket_summary, $row->created_date, $row->created_by_agent, $row->ticket_type, $row->requested_completion, $row->assigned_to, $row->contact_id, $row->customer_location_id, $row->ticket_status);
		
	    while (mysqli_stmt_fetch($stmt)) {
	      $row->created_date = new DateTime($row->created_date);
	      $row->requested_completion = new DateTime($row->requested_completion);
	      $rows[] = $row;
	      $row = new stdClass();
	      mysqli_stmt_bind_result($stmt, $row->ticket_id, $row->customer_priority, $row->ticket_description, $row->ticket_summary, $row->created_date, $row->created_by_agent, $row->ticket_type, $row->requested_completion, $row->assigned_to, $row->contact_id, $row->customer_location_id, $row->ticket_status);
	    }
		
		mysqli_stmt_free_result($stmt);		
		mysqli_close($this->connection);
		
		return $rows;
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
