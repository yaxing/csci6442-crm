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
	
		//get all workers
	$sql = "SELECT worker.worker_id, first_name, last_name FROM worker, role WHERE role.role_type='worker' AND role.worker_id=worker.worker_id";
	
	$db->select($sql);
	$result = $db->fetchAssoc();
	
	foreach ($result as $index => $row) {
		echo "<employee>\n";
		echo "<role>Worker</role>\n";
		foreach ($row as $column => $value)
		echo "<$column>$value</$column>\n";
		
		echo "</employee>\n\n";
	}
	
	//get all dispatchers
	$sql = "SELECT worker.worker_id, first_name,last_name FROM worker,role WHERE role_type='dispatcher' AND role.worker_id=worker.worker_id";
	
	$db->select($sql);
	$result = $db->fetchAssoc();
	
	foreach ($result as $index => $row) {
		echo "<employee>\n";
		echo "<role>Dispatcher</role>\n";
		foreach ($row as $column => $value)
		echo "<$column>$value</$column>\n";
		echo "</employee>\n\n";
	}
	
	
	?>