<?php

/**
 * action ticket
 * @author Yaxing Chen
 * @date 04/29/2011 
 * @team SET
 */

#region include
include_once 'header.php';
#endregion include

$ticket_id = $_POST["ticket_id"];
$assigned_to = $_POST["assigned_to"];

$sql = "update `ticket` set `assigned_to` = ".$assigned_to." where `ticket_id` = ".$ticket_id;

$affectedRows = $db->update($sql);
//affected rows should be exactly 1, otherwise report problem
echo '<affectedRows>'.$affectedRows."</affectedRows>\n";  

?>