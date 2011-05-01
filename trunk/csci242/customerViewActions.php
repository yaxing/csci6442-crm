<?php

/**
 * Customer views all actions involved with a ticket assigned to him
 * 
 * @author Alex Florescu
 * @team Services
 * @date 04/02/2011
 */
 
  
#region include
include_once 'header.php';
#endregion include
 
	// ** CURRENTLY only shows all actions that are connected with a ticket ** 
	
	// variables you get from system
	$applicant=$userId; 
	//$applicant=1;

	//execute statement
	$sql = "SELECT action.* FROM action,ticket WHERE action.parent_ticket=ticket.ticket_id AND ticket.contact_id = $applicant";
	
	$db->select($sql);
	$result = $db->fetchAssoc();
	
	foreach ($result as $index => $row) {
		echo "<action>\n";
		foreach ($row as $column => $value)
			echo "<$column>$value</$column>\n";
		echo "</action>\n\n";
	}		 		

 ?>