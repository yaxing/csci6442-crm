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
 

	// variables in form 
	$rating=$_POST['rating'];
	$action_id=$_POST['action_id'];
	
	//execute statement
	$sql = "UPDATE action SET worker_rating=$rating WHERE action_id=$action_id;";

	$affectedRows = $db->update($sql);
	//TODO: affected rows should be exactly 1, otherwise report problem
 ?>