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
 

	// ** CURRENTLY only shows all actions that are connected with a ticket ** 
	
	// variables you get from system
	$applicant=$userId; 
	
	//execute statement
	$sql = "SELECT * FROM action,ticket WHERE action.parent_ticket=ticket.ticket_id AND ticket.applicant = $applicant";
	
	$db->select($sql);
	$result = $db->fetchIndexArray();
 ?>