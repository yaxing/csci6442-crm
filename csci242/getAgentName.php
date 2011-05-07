<?php

/**
 * Customer rates worker that completed an action for him
 * 
 * @author Yaxing Chen
 * @team SET
 * @date 05/01/2011
 */
 
  
#region include
include_once 'header.php';
#endregion include
 

	// variables in form 
	$agent_id=$_POST['agent_id'];
	
	//execute statement
	$sql = "select * from `agent` where `agent_id` = $agent_id";

	$db->select($sql);
	
	$result = $db->fetchAssoc();
	
	echo "<name>".$result[0]['first_name']." ".$result[0]['last_name'].".</name>";
?>