<?php

/**
 * check whether ticket has been approved before rating an action
 * 
 * 
 * @author Yaxing Chen
 * @date 04/29/2011 
 * @team SET
 */

#region include
include_once 'header.php';
#endregion include

//$contatct_id = $_POST["contact_id"];

	$rating=$_POST['rating'];
	$action_id=$_POST['action_id'];
	
	//$rating=1;
	//$action_id=1;
	
	//execute statement


	$sql = "select * from `ticket`, `action` where `action_id` = $action_id and `ticket_id` = `parent_ticket`";
	$db->select($sql);
	$result = $db->fetchObject();
	if($result[0]->ticket_status != "Approved"){
		$affectedRows = -2;
		echo '<affectedRows>'.$affectedRows."<affectedRows>\n";
		return;
	}

	$sql = "UPDATE action SET agent_rating=$rating WHERE action_id=$action_id;";

	$affectedRows = $db->update($sql);
	//affected rows should be exactly 1, otherwise report problem
        echo '<affectedRows>'.$affectedRows."<affectedRows>\n";

?>