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
	$assigned_to_skill=$_POST['assigned_to_skill'];

	// variables you get from system
	$assigned_to_worker= 1; //$userId;
	$action_created_by=1; //$userId;
		
	//empty or default variables	
	$action_status="New"; // ??? 
	$percent_completed=0; 
	$worker_rating=0;
	$actual_completion_date='NULL';

	$action_priority='Low';

	 /*$parent_ticket=1;
	  $action_prob_description='TestAlex';
	  $action_solution_description='Serious testing';
	  $requested_completion_date='NOW()';
	  $assigned_to_worker=1;
	  $action_created_by=1;	
	*/

	//execute statement
	$sql = "INSERT INTO action VALUES (NULL, $parent_ticket, $assigned_to_worker, $assigned_to_skill, '$action_status', $action_created_by, '$action_prob_description', '$action_solution_description', $percent_completed, $worker_rating,	'$requested_completion_date', $actual_completion_date,'$action_priority');";
	//echo $sql; 
	$affectedRows = $db->update($sql);
	//affected rows should be exactly 1, otherwise report problem
	echo '<affectedRows>'.$affectedRows."</affectedRows>\n";  
 ?>