<?php

/**
 * change ticket status
 * 
 * when the ticket is approved, send notification to all emails of the certain contact
 * @author Yaxing Chen
 * @date 04/29/2011 
 * @team SET
 */

#region include
include_once 'header.php';
include_once 'emailFunction.php';
#endregion include

$contatct_id = $_POST["contact_id"];
$ticket_id = $_POST["ticket_id"];
$status = $_POST["ticket_status"];

//$contact_id = 1;
//$ticket_id = 1;
//$status = "Approved";


if($status == "Approved"){
	$sql = "select * from ticket where ticket_id = ".$ticket_id;
	$db->select($sql);
	$result = $db->fetchAssoc();
	$ticketSummary = $result[0]["ticket_summary"];
	$body = "Your ticket about '".$ticketSummary."' has been officially closed.";
	$subject = "Ticket closed";
	
	$sql = "select value from contact_communication where contact_id = ".$contact_id." and type_of_communication = 'Email'";
	$db->select($sql);
	$result = $db->fetchAssoc();
	
	for($i = 0; $i < count($result); $i ++){
		$email = $result[$i]["value"];
		email($email, $subject, $body);
	}	
}

$sql = "update `ticket` set `ticket_status` = '".$status."' where `ticket_id` = ".$ticket_id;

$affectedRows = $db->update($sql);
//affected rows should be exactly 1, otherwise report problem
echo '<affectedRows>'.$affectedRows."</affectedRows>\n";  

?>