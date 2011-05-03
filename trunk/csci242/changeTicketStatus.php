<?php

/**
 * change ticket status
 * @author Yaxing Chen
 * @date 04/29/2011 
 * @team SET
 */

#region include
include_once 'header.php';
#endregion include

$ticket_id = $_POST["ticket_id"];
$status = $_POST["ticket_status"];

$sql = "update `ticket` set `ticket_status` = '".$status."' where `ticket_id` = ".$ticket_id;

$affectedRows = $db->update($sql);
//affected rows should be exactly 1, otherwise report problem
echo '<affectedRows>'.$affectedRows."</affectedRows>\n";  

?>