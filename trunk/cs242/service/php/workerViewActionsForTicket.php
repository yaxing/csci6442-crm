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
	$ticket_id=$_POST['ticket_id']; 
	
	// variables you get from system
	$assigned_to_worker=$userId; 
	
	//execute statement
	$sql = "SELECT * FROM action WHERE parent_ticket=$ticked_id AND assigned_to_worker=$assigned_to_worker;";

	$db->select($sql);
	$result = $db->fetchIndexArray();
 
 ?>