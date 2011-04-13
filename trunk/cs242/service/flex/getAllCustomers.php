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
	
	//get all customers
	$sql = "SELECT account_person_id,first_name,last_name FROM account_person;";
	
	$db->select($sql);
	$result = $db->fetchAssoc();
	
	foreach ($result as $index => $row) {
		echo "<employee>\n";
		echo "<role>Customer</role>\n";
		foreach ($row as $column => $value)
		echo "<$column>$value</$column>\n";
			echo "</employee>\n\n";
	}
		
	
	?>