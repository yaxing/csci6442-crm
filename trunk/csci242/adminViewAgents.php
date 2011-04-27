<?php

/**
 * Dispatcher views all tickets
 * 
 * @author Alex Florescu
 * @team Services
 * @date 04/02/2011
 */
 
  
#region include
include_once 'header.php';
#endregion include
 
	// get the number of agents	
	/*$sql = "SELECT count(*) FROM agent";
	$db->select($sql);
	$result = $db->fetchArray();
	echo '<numAgents>'.$result[0][0].'</numAgents>';
*/
	//execute statement
	$sql = "SELECT * FROM agent;";

	$db->select($sql);
	$result = $db->fetchAssoc();
	echo $result;
	foreach ($result as $index => $row) {
		echo "<agent>\n";
		foreach ($row as $column => $value)
			echo "<$column>$value</$column>\n";
		echo "</agent>\n\n";
	}		 		
?>