<?php
	
	/**
	 * Get all accounts
	 * 
	 * @author Alex Florescu
	 * @team Services
	 * @date 04/02/2011
	 */
	
	
	#region include
	include_once 'header.php';
	#endregion include
	
	//get all agents
	$sql = "SELECT agent.agent_id, first_name, last_name FROM agent";

	$db->select($sql);
	$result = $db->fetchAssoc();
	
	foreach ($result as $index => $row) {
		echo "<agent>\n";
		foreach ($row as $column => $value)
			echo "<$column>$value</$column>\n";
		echo "</agent>\n\n";
	}
		
	
?>