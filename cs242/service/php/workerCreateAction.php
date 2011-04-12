<?php

/**
  * Worker creates an additional action for himself
 * 
 * @author Alex Florescu
 * @team Services
 * @date 04/02/2011
 */
 
  
#region include
include_once 'header.php';
#endregion include
 
	// variables in form 
	$parent_ticket=$_POST['parent_ticket'];	
	$action_prob_description=$_POST['action_prob_description']; 
	$action_solution_description=$_POST['action_solution_description'];
	$requested_completion_date=$_POST['requested_completion_date'];
	$source_of_action=$_POST['source_of_action']; // this links to communication stuff.. no? 
	
	
	// variables you get from system
	$assigned_to_worker=$userId;
	$action_created_by=$userId;
		
	//empty or default variables
	$assigned_to_skill='NULL';
	$action_status="New"; // ??? 
	$percent_completed=0; 
	$worker_rating='NULL';
	$actual_completion_date='NULL';
	$action_priority='low';
	
	//execute statement
	$sql = "INSERT INTO action VALUES (NULL, $parent_ticket, $assigned_to_worker, $assigned_to_skill, '$action_status', $action_created_by, '$action_prob_description', '$action_solution_description', 
	$percent_completed, $worker_rating,	'$requested_completion_date', $actual_completion_date, $source_of_action, '$action_priority');";
	
	$affectedRows = $db->update($sql);
	//affected rows should be exactly 1, otherwise report problem
	echo '<affectedRows>'.$affectedRows."<affectedRows>\n";  
 ?>