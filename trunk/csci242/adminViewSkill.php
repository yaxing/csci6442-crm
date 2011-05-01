<?php

/**
 * Admin view Skills
 * 
 * @author Alex Florescu
 * @team Services
 * @date 04/02/2011
 */
 
  
#region include
include_once 'header.php';
#endregion include
 
$agent_id = $_POST["agent_id"];
//$agent_id = "1";
	//execute statement
	$sql = "SELECT * FROM agent_skill where agent_id ='".$agent_id."' ;";

	$db->select($sql);
	$result = $db->fetchAssoc();
	//var_dump($result);
	//die();
	foreach ($result as $index => $row) {
		echo "<agent_skill>\n";
		foreach ($row as $column => $value)
			echo "<$column>$value</$column>\n";
		echo "</agent_skill>\n\n";
	}		 		
?>