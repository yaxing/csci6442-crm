<?php
	
	/**
	 * Will select all actions for a given ticket 
	 * 
	 * @author Alex Florescu
	 * @team Services
	 * @date 04/02/2011
	 */
	
	
	#region include
	include_once 'header.php';
	#endregion include
	
	// variables in form 
	$action_id=$_POST['action_id']; 
	
	//$ticket_id=1;
	
	//execute statement
	$sql = "SELECT * FROM action WHERE action_id=$action_id";
	
	$db->select($sql);
	
	$result = $db->fetchAssoc();
	foreach ($result as $index => $row) {
		foreach ($row as $column => $value)
		echo "<$column>$value</$column>\n";
	}		 		
	
	
	?>