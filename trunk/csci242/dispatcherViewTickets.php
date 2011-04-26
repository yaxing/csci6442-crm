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
 
	// get the number of tickets
	
	/*$sql = "SELECT count(*) FROM ticket";
	$db->select($sql);
	$result = $db->fetchArray();
	echo '<numTickets>'.$result[0][0].'</numTickets>';
*/
	//execute statement
	$sql = "SELECT * FROM ticket;";

	$db->select($sql);
	$result = $db->fetchAssoc();
	
	foreach ($result as $index => $row) {
		echo "<ticket>\n";
		foreach ($row as $column => $value)
			echo "<$column>$value</$column>\n";
		echo "</ticket>\n\n";
	}		 		
?>