<?php

/**
 * change action status
 * @author Yaxing Chen
 * @date 04/29/2011 
 * @team SET
 */

#region include
include_once 'header.php';
#endregion include

$action_id = $_POST["action_id"];
$status = $_POST["action_status"];

$sql = "update `action` set `action_status` = '".$status."' where `action_id` = ".$ticket_id;

$affectedRows = $db->update($sql);
//affected rows should be exactly 1, otherwise report problem
echo '<affectedRows>'.$affectedRows."</affectedRows>\n";  

?>