<?php

/**
 * action assign
 * @author Yaxing Chen
 * @date 04/29/2011 
 * @team SET
 */

#region include
include_once 'header.php';
#endregion include

$action_id = $_POST["action_id"];
$type = $_POST["type"];
$assigned_to = $_POST["assigned_to"];

if($type == 'agent'){
	$sql = "update `action` set `assigned_to_agent` = ".$assigned_to." where `action_id` = ".$action_id;
}
else if($type == 'skill'){
	$sql = "update `action` set `assigned_to_skill` = ".$assigned_to." where `action_id` = ".$action_id;
}

$affectedRows = $db->update($sql);
//affected rows should be exactly 1, otherwise report problem
echo '<affectedRows>'.$affectedRows."</affectedRows>\n";  

?>