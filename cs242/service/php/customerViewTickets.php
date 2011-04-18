<?php

/**
 * Customer views all tickets created for himself
 * 
 * @author Alex Florescu
 * @team Services
 * @date 04/02/2011
 */
 
  
#region include
include_once 'header.php';
#endregion include
 
	// variables you get from system
	$applicant=$userId; 
	
	//execute statement
	$sql = "SELECT * FROM ticket WHERE `contact_id` = $applicant";
	$db->select($sql);
	$result = $db->fetchAssoc();
	
	foreach ($result as $index => $row) {
		echo "<ticket>\n";
		foreach ($row as $column => $value)
			echo "<$column>$value</$column>\n";
		echo "</ticket>\n\n";
	}		 		
 
 ?>