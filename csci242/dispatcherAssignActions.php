<?php

/**
  * Dispatcher edits an action (only changing assignment)
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

	//TODO: same problem as with creating it
	$assigned_to_worker=$_POST['assigned_to_worker'];
	$assigned_to_skill=$_POST['assigned_to_skill'];
	
	//execute statement
	$sql = "UPDATE action SET (assigned_to_agent='$assigned_to_worker', assigned_to_skill='$assigned_to_skill') WHERE action_id=$action_id;";

	$affectedRows = $db->update($sql);
	//affected rows should be exactly 1, otherwise report problem
	echo '<affectedRows>'.$affectedRows."<affectedRows>\n"; 
 ?>