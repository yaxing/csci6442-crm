<?php

/**
  * Show all tickets that have at least one action assigned to the current worker
 * 
 * @author Alex Florescu
 * @team Services
 * @date 04/02/2011
 */
 
  
#region include
include_once 'header.php';
#endregion include
 

	// variables you get from system
	$assigned_to_worker=$userId; 
	
	//$assigned_to_worker=1;

	//execute statement
	$sql = "SELECT * FROM ticket WHERE ticket_id = ANY (SELECT parent_ticket FROM action WHERE assigned_to_worker = $assigned_to_worker);";

	$db->select($sql);
	$result = $db->fetchAssoc();
	
	foreach ($result as $index => $row) {
		echo "<ticket>\n";
		foreach ($row as $column => $value)
			echo "<$column>$value</$column>\n";
		echo "</ticket>\n\n";
	}		 		


 ?>