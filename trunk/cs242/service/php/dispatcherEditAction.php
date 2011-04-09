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
	$action_id=$_POST['action_id'];
	
	$action_prob_description=$_POST['action_prob_description']; 
	$action_solution_description=$_POST['action_solution_description'];
	$action_status=$_POST['action_status'];
	$percent_completed=$_POST['percent_completed']; 
	$action_priority=$_POST['action_priority'];
	
	//TODO: same problem as with creating it
	$assigned_to_worker=$_POST['assigned_to_worker'];
	$assigned_to_skill=$_POST['assigned_to_skill'];
	
	
	//execute statement
	$sql = "UPDATE action SET (action_status='$action_status', action_prob_description='$action_prob_description', action_solution_description='$action_solution_description', 
	percent_completed=$percent_completed, action_priority='$action_priority', assigned_to_worker='$assigned_to_worker', assigned_to_skill='$assigned_to_skill') WHERE action_id=$action_id;";

	$affectedRows = $db->update($sql);
	//TODO: affected rows should be exactly 1, otherwise report problem

 ?>