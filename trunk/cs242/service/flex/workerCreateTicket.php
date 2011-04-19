<?php

/**
  * Worker creates a ticket on behalf of a customer
 * 
 * @author Alex Florescu
 * @team Services
 * @date 04/02/2011
 */
 
  
#region include
include_once 'header.php';
#endregion include
 

	// variables in form 
	$description=$_POST['description']; 
	$applicant=$_POST['applicant'];
	// Locations for customer should be available in UI for choosing
	$customer_location_id=$_POST['location'];
	$customer_priority = $_POST['priority'];
	$requested_completion=$_POST['completion_date'];// 'NOW()'; // ToDO: change later
	
	// variables you get from system
	$created_date='NOW()'; // will automatically insert the current date in the SQL table 	

	/*//test variables
	$description="test";
	$applicant=1;
	$customer_location_id=1;	
	*/

	//empty or default variables
	$ticket_summary='';
	//$customer_priority='low';
	$created_by_worker=1;
	$ticket_type='service';	
	$requested_completion='NOW()'; // ToDO: change later
	$assigned_to=1; // change later?
		
	//execute statement
	$sql = "INSERT INTO ticket VALUES (NULL, '$customer_priority', '$description', '$ticket_summary', $created_date, $created_by_worker, '$ticket_type', $requested_completion, $assigned_to, $applicant, $customer_location_id);";

	$affectedRows = $db->update($sql);
	//affected rows should be exactly 1, otherwise report problem
	echo '<affectedRows>'.$affectedRows."</affectedRows>\n"; 
	
//	print "<msg>Ticket has been added</msg>"; 
	
	?>