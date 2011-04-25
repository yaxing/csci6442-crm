<?php

/**
 * Dispatcher views one ticket
 * 
 * @author Alex Florescu
 * @team Services
 * @date 04/02/2011
 */
 
  
#region include
include_once 'header.php';
#endregion include

	//variables you get from form   
 	$ticket_id = $_POST['ticket_id'];	

	//$ticket_id=1;

	//execute statement
	$sql = "SELECT * FROM ticket WHERE ticket_id = $ticket_id";

	$db->select($sql);
	$result = $db->fetchAssoc();
	
	foreach ($result as $index => $row) {
		echo "<ticket>\n";
		foreach ($row as $column => $value)
			echo "<$column>$value</$column>\n";
		echo "</ticket>\n\n";
	}		 		

 ?>