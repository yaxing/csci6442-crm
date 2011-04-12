<?php

/**
  * Dispatcher creates action for a given ticket 
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
	$action_priority=$_POST['action_priority'];
	
	//TODO: figure out a way to determine whether the skill was used or the worker id
	$assigned_to_worker=$_POST['assigned_to_worker'];
	$assigned_to_skill=$_POST['assigned_to_skill'];
	
	// variables you get from system
	$action_created_by=$userId;
		
	//empty or default variables
	$action_status="New"; // ??? 
	$percent_completed=0; 
	$worker_rating='NULL';
	$actual_completion_date='NULL';
	
	/* test variables
  		$parent_ticket=3;
		$assigned_to_worker=1;
		$assigned_to_skill='NULL';
		$source_of_action='NULL';
		$action_priority='low';
	*/

	//execute statement
	$sql = "INSERT INTO action VALUES (NULL, $parent_ticket, $assigned_to_worker, $assigned_to_skill, '$action_status', $action_created_by, '$action_prob_description', '$action_solution_description', 
	$percent_completed, $worker_rating,	'$requested_completion_date', $actual_completion_date, $source_of_action, '$action_priority');";
	
 	$affectedRows = $db->update($sql);
	//affected rows should be exactly 1, otherwise report problem
	echo '<affectedRows>'.$affectedRows."<affectedRows>\n"; 

 ?>