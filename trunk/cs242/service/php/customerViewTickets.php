<?php

/**
 * Back-end customer ticket creation
 * 
 * @author Alex Florescu
 * @team Services
 * @date 04/02/2011
 */
 
  
#region include
include_once 'header.php';
#endregion include
 
	// variables you get from system
	$applicant=$userId; 
	
	//execute statement
	$sql = "SELECT * FROM ticket WHERE applicant = $applicant";
	$db->select($sql);
	$result = $db->fetchIndexArray();
	print_r($result);
 
 ?>