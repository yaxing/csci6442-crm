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
	$assigned_to_worker=$userId; 
	
	//execute statement
	$sql = "SELECT * FROM action WHERE assigned_to_worker=$assigned_to_worker;";

	$db->select($sql);
	$result = $db->fetchIndexArray();
 
 ?>