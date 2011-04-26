<?php

/**
 * Get all permissions
 * 
 * @author Alex Florescu
 * @team Services
 * @date 04/02/2011
 */
 
  
#region include
include_once 'header.php';
#endregion include
 
	//execute statement
	$sql = "SELECT * FROM permission;";

	$db->select($sql);
	$result = $db->fetchAssoc();
	
	foreach ($result as $index => $row) {
		echo "<permission>\n";
		foreach ($row as $column => $value)
			echo "<$column>$value</$column>\n";
		echo "</permission>\n\n";
	}
 
 ?>