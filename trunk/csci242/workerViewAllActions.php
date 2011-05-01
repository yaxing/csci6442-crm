<?php

/**
  * Show all actions assigned to the curent worker
 * 
 * @author Alex Florescu
 * @team Services
 * @date 04/02/2011
 */
 
  
#region include
include_once 'header.php';
#endregion include
 
	// variables you get from system
	$assigned_to_worker=1; //$userId; 
	
	//execute statement
	$sql = "SELECT * FROM action WHERE assigned_to_agent=$assigned_to_worker;";

	$db->select($sql);
	$result = $db->fetchAssoc();
	
	foreach ($result as $index => $row) {
		echo "<action>\n";
		foreach ($row as $column => $value)
			echo "<$column>$value</$column>\n";
		echo "</action>\n\n";
	}		 		
  
 ?>