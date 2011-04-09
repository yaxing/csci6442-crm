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
	$description=$_POST['description']; 
	
	// variables you get from system
	$created_date='CURDATE()'; // will automatically insert the current date in the SQL table 
	$applicant=$userId; 
	$applicant_location=1; // ???
	$parent_account_of_Applicant=1; // ???
	
	//empty or default variables
	$ticket_summary='';
	$customer_priority='normal';
	$created_by_worker='NULL';

	//execute statement
	$sql = "INSERT INTO ticket VALUES (NULL, $parent_account_of_Applicant, $applicant, $applicant_location, '$customer_priority', '$ticket_description', '$ticket_summary', $created_date, $created_by_worker);";
	$affectedRows = $db->insert($sql);
	//TODO: affected rows should be exactly 1, otherwise report problem
	echo "Number of affected rows is $affectedRows"; 
 
 ?>