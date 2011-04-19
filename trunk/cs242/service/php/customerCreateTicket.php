<?php

/**
 * Customer creates a ticket for himself
 * 
 * @author Alex Florescu
 * @author Yaxing Chen
 * @team Services
 * @date 04/02/2011
 */
	
	#region include
	include_once 'header.php';
	#endregion include
	
	// variables in form 
	$priority = $_POST['priority'];
	$description=$_POST['description']; 
	$requested_completion = $_POST['completion_date'];
	
	if(strlen($priority) <= 0){
		$priority = "normal";
	}
	
//$priority = "high";
//$description = "test2";
//$requested_completion = "2011-05-02";
	
	
	// variables you get from system
	$created_date='NOW()'; // will automatically insert the current date in the SQL table 
	$applicant=$userId;
	//$applicant = 1; 
	
 	// *** TODO 
	// *** Locations for customer should be available in UI for choosing
	// *** 

	//fetch the location and parent_id (Alex note: normalization fail)
	$sql = "select contact_location_id,customer from contact,contact_location where contact.contact_id = contact_location.contact_id and contact.contact_id=$applicant"; 
	$db->select($sql);
	$result = $db->fetchArray();
	$applicant_location=$result[0][0];
	$parent_account_of_Applicant=$result[0][1];
	
	//empty or default variables
	$ticket_summary='';
	//$customer_priority='low';
	//$created_by_worker='NULL';
	$ticket_type = "service";
	
	//execute statement
	//$sql = "INSERT INTO ticket VALUES (NULL, '$priority', '$description', '$ticket_summary', $created_date, $created_by_worker, $ticket_type, $requested_completion, $parent_account_of_Applicant, $applicant, $applicant_location, '$customer_priority',    );";
	$sql = "insert into `ticket` set `customer_priority` = '$priority', `ticket_description` = '$description', `ticket_summary` = '$ticket_summary', `created_date` = $created_date, `ticket_type` = '$ticket_type', `requested_completion` = '$requested_completion', `contact_id` = $applicant, `customer_location_id` = $applicant_location";
	$affectedRows = $db->insert($sql);
	//affected rows should be exactly 1, otherwise report problem
	echo '<affectedRows>'.$affectedRows."</affectedRows>\n"; 
	//print "<msg>Ticket has been added</msg>"; 
 ?>