<?php
	
	/**
	 * Get a set of permissions
	 * 
	 * @team Services
	 * @date 04/02/2011
	 */
	
	
	#region include
	include_once 'header.php';
	#endregion include
	$available_to=$_POST['available_to'];
	

	//execute statement
	$sql = "SELECT * FROM permission WHERE available_to=$available_to;";
	
	$db->select($sql);
	$result = $db->fetchAssoc();
	
	foreach ($result as $index => $row) {
		echo "<permission>\n";
		foreach ($row as $column => $value)
		echo "<$column>$value</$column>\n";
		echo "</permission>\n\n";
	}
	
	?>