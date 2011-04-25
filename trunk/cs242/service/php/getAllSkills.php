<?php

/**
 * Gets all skills
 * 
 * @author Alex Florescu
 * @team Services
 * @date 04/02/2011
 */
 
  
#region include
include_once 'header.php';
#endregion include
 
	//execute statement
	$sql = "SELECT * FROM skill;";
	//echo $sql; 
	$db->select($sql);
	$result = $db->fetchAssoc();
	
	foreach ($result as $index => $row) {
		foreach ($row as $column => $value)
			echo "<$column>$value</$column>\n";
	}

?>