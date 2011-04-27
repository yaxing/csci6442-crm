<?php

/**
 * Admin view Roles
 * 
 * @author Alex Florescu
 * @team Services
 * @date 04/02/2011
 */
 
  
#region include
include_once 'header.php';
#endregion include
 
$agent_id = $_POST["agent_id"];

	//execute statement
	$sql = "SELECT role_type FROM role where agent_id ='".$agent_id."' ;";

	$db->select($sql);
	$result = $db->fetchAssoc();
	
	foreach ($result as $index => $row) {
		echo "<role_type>\n";
		foreach ($row as $column => $value)
			echo "<$column>$value</$column>\n";
		echo "</role_type>\n\n";
	}		 		
?>