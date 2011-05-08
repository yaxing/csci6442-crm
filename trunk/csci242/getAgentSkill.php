<?php

/**
 * get agent skills
 * 
 * @author Yaxing Chen
 * @team SET
 * @date 05/01/2011
 */
 
  
#region include
include_once 'header.php';
#endregion include	

	//$userId = 1;
	//execute statement
	$sql = "select skill from `agent_skill` where `agent_id` = $userId";
	
	$db->select($sql);
	
	$result = $db->fetchAssoc();
	
	foreach ($result as $index => $row) {
		echo "<agent_skill>";
		foreach ($row as $column => $value)
		echo "<$column>$value</$column>";
		echo "</agent_skill>";
	}
?>