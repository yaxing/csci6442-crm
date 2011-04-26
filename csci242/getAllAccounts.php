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
	$sql = "SELECT customer_id,customer_name FROM customer;";

	$db->select($sql);
	$result = $db->fetchAssoc();
	
	foreach ($result as $index => $row) {
		echo "<customer>\n";
		foreach ($row as $column => $value)
			echo "<$column>$value</$column>\n";
		echo "</customer>\n\n";
	}

	//get all workers
	$sql = "SELECT worker.worker_id, first_name, last_name FROM worker, role WHERE role.role_type='worker' AND role.worker_id=worker.worker_id";

	$db->select($sql);
	$result = $db->fetchAssoc();
	
	foreach ($result as $index => $row) {
		echo "<worker>\n";
		foreach ($row as $column => $value)
			echo "<$column>$value</$column>\n";
		echo "</worker>\n\n";
	}

	//get all dispatchers
	$sql = "SELECT worker.worker_id, first_name,last_name FROM worker,role WHERE role_type='dispatcher' AND role.worker_id=worker.worker_id";

	$db->select($sql);
	$result = $db->fetchAssoc();
	
	foreach ($result as $index => $row) {
		echo "<dispatcher>\n";
		foreach ($row as $column => $value)
			echo "<$column>$value</$column>\n";
		echo "</dispatcher>\n\n";
	}

 
 ?>