<?php

/**
  * Will select all actions for a given ticket 
 * 
 * @author Alex Florescu
 * @team Services
 * @date 04/02/2011
 */
 
  
#region include
include_once 'header.php';
#endregion include
 
	// variables in form 
	$ticket_id=$_POST['ticket_id']; 
	
	//$ticket_id=1;

	//execute statement
	$sql = "SELECT * FROM action WHERE parent_ticket=$ticket_id";

	$db->select($sql);

	$result = $db->fetchAssoc();
	foreach ($result as $index => $row) {
		echo "<action>\n";
		foreach ($row as $column => $value)
			echo "<$column>$value</$column>\n";
		echo "</action>\n\n";
	}		 		
	
 
 ?>