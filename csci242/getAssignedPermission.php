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
	//$worker_role_type="admin";	

	//execute statement
	$sql = "SELECT * FROM assigned_permission WHERE agent_role_type='$worker_role_type';";
	
	$db->select($sql);
	$result = $db->fetchAssoc();
	
	foreach ($result as $index => $row) {
		echo "<permission>\n";
		foreach ($row as $column => $value)
		echo "<$column>$value</$column>\n";
		echo "</permission>\n\n";
	}
	
	?>