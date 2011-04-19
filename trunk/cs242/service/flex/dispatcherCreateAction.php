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
	$action_priority=$_POST['action_priority'];
	
	//TODO: figure out a way to determine whether the skill was used or the worker id
	$assigned_to_worker=$_POST['assigned_to_worker'];
	$assigned_to_skill=$_POST['assigned_to_skill'];
	
	// variables you get from system
	$action_created_by= 1; //$userId;
	
	//empty or default variables
	$action_status="New"; // ??? 
	$percent_completed=0; 
	$worker_rating='NULL';
	$actual_completion_date='NULL';
	
	
	/*
	$parent_ticket=1;
	 $action_prob_description='TestAlexDispatcher';
	 $action_solution_description='Serious testing ensues';
	 $requested_completion_date='NOW()';
	 $assigned_to_worker=1;
	 $assigned_to_skill='IT';
	 $action_created_by=1;		
	 $action_priority='low';
	 */
	
	//execute statement
	$sql = "INSERT INTO action VALUES (NULL, $parent_ticket, $assigned_to_worker, '$assigned_to_skill', '$action_status', $action_created_by, '$action_prob_description', '$action_solution_description', $percent_completed, $worker_rating,	'$requested_completion_date', $actual_completion_date,'$action_priority');";
	//echo $sql; 
	$affectedRows = $db->update($sql);
	
	//affected rows should be exactly 1, otherwise report problem
	echo '<affectedRows>'.$affectedRows."</affectedRows>\n"; 
	
	?>