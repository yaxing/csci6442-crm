<?php

/**
 * Gets all locations assigned to a certain user
 * 
 * @author Alex Florescu
 * @team Services
 * @date 04/02/2011
 */
 
  
#region include
include_once 'header.php';
#endregion include
 
	// variables you get from system
	$customer=$userId;
	//$customer=1;

	//execute statement
	$sql = "SELECT location_info.* FROM location_info, contact_location WHERE contact_location.contact_id=$customer AND contact_location.contact_location_id=location_info.customer_location_id";
	
	$db->select($sql);
	$result = $db->fetchAssoc();
	
	foreach ($result as $index => $row) {
		echo "<location>\n";
		foreach ($row as $column => $value)
		echo "<$column>$value</$column>\n";
		echo "</location>\n\n";
	}	
	 
 ?>