<?php
	
	/**
	 * Get all permissions
	 * 
	 * @author Alex Florescu
	 * @team Services
	 * @date 04/02/2011
	 */
	
	
	#region include
	include_once 'header.php';
	#endregion include
	
	$worker_role_type=$_POST['worker_role_type'];
	$account_person_id=$_POST['account_person_id'];
	
	//execute statement
	$sql = "SELECT * FROM assigned_permission WHERE worker_role_type='$worker_role_type' AND account_person_id='$account_person_id';";
	
	$db->select($sql);
	$result = $db->fetchAssoc();
	
	foreach ($result as $index => $row) {
		echo "<permission>\n";
		foreach ($row as $column => $value)
		echo "<$column>$value</$column>\n";
		echo "</permission>\n\n";
	}
	
	?>