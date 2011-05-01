<?php

/**
 * Customer rates worker that completed an action for him
 * 
 * @author Alex Florescu
 * @team Services
 * @date 04/02/2011
 */
 
  
#region include
include_once 'header.php';
#endregion include
 

	// variables in form 
	$rating=$_POST['rating'];
	$action_id=$_POST['action_id'];
	
	//$rating=1;
	//$action_id=1;
	
	//execute statement
	$sql = "UPDATE action SET agent_rating=$rating WHERE action_id=$action_id;";

	$affectedRows = $db->update($sql);
	//affected rows should be exactly 1, otherwise report problem
        echo '<affectedRows>'.$affectedRows."<affectedRows>\n";

?>