<?php

/**
  * Dispatcher edits an action
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
	
	//echo 'H';
	//execute statement
	$sql = "UPDATE action SET assigned_to_agent=$assigned_to_worker, assigned_to_skill='$assigned_to_skill',  action_status='$action_status', action_prob_description='$action_prob_description', action_solution_description='$action_solution_description', percent_completed=$percent_completed, action_priority='$action_priority' WHERE action_id=$action_id;";
	//echo 'H';
	//echo $sql;
	$affectedRows = $db->update($sql);
	
	//affected rows should be exactly 1, otherwise report problem
	echo '<affectedRows>'.$affectedRows."</affectedRows>\n"; 
	
 ?>