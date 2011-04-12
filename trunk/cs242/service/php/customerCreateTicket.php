<?php

/**
 * Customer creates a ticket for himself
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
	$created_date='NOW()'; // will automatically insert the current date in the SQL table 
	$applicant=$userId; 
	
 	// *** TODO 
	// *** Locations for customer should be available in UI for choosing
	// *** 

	//fetch the location and parent_id (Alex note: normalization fail)
	$sql = "select account_location_id,parent_account from account_person,account_person_location where account_person.account_person_id = account_person_location.account_person_id and account_person.account_person_id=$applicant"; 
	$db->select($sql);
	$result = $db->fetchArray();
	$applicant_location=$result[0][0];
	$parent_account_of_Applicant=$result[0][1];
	
	//empty or default variables
	$ticket_summary='';
	$customer_priority='low';
	$created_by_worker='NULL';
	
	//execute statement
	$sql = "INSERT INTO ticket VALUES (NULL, $parent_account_of_Applicant, $applicant, $applicant_location, '$customer_priority', '$description', '$ticket_summary', $created_date, $created_by_worker);";
	$affectedRows = $db->update($sql);
	//affected rows should be exactly 1, otherwise report problem
	echo '<affectedRows>'.$affectedRows."<affectedRows>\n"; 
	//print "<msg>Ticket has been added</msg>"; 
 ?>