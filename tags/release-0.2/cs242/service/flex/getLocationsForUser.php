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
	$customer=$_POST['customer'];	
	//$customer=$userId;
	//$customer=1;

	//execute statement
	$sql = "SELECT location_info.* FROM location_info, contact_location WHERE contact_location.contact_id=$customer AND contact_location.contact_location_id=location_info.customer_location_id";
	
	$db->select($sql);
	$result = $db->fetchAssoc();
	
	echo "<locations>\n";
	
	foreach ($result as $index => $row) {
		$locationData = "$index";
		foreach ($row as $column => $value)
		{
			if($column == "customer_location_id")
			{
				$locationData = "$value";
			}
			else
			{
				$locationString ="$locationString $value";
			}
		}
		echo "<location data='$locationData' label='$locationString'/>\n";
			
	
	}	
	echo "<location data='NULL' label='Not Listed'/>";
	echo "</locations>\n";
	
	/*
	echo "<locations>\n";
	
	echo "<location data='4' label='one'/>";
	echo "<location data='2' label='two'/>";

	echo "</locations>\n";
	 */
?>