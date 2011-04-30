<?php

/**
 * Retrieve available ticket status based on user role
 * @author Yaxing Chen
 * @date 04/29/2011 
 */

include_once '../../config.php';

$ticketId = $_POST["ticketId"];
$manager = $_POST["isManager"];

$db = new Database();

$sql = "select ticket_status from ticket where ticket_id = ".$ticketId;
$db->select($sql);
$result = $db->fetchObject();

$curStatus = $result[0]->ticket_status;

if($manager){
	$sql = "select * from status where status <> '".$curStatus."' and ticket_or_action = 1";
}
else{
	$sql = $sql = "select * from status where status <> '".$curStatus."' and status <> 'Approved' and ticket_or_action = 1";
}

$db->select($sql);
$result = $db->fetchAssoc();

foreach ($result as $index=>$row){
	echo "<status>\n";
	$count = 0;
	foreach ($row as $column => $value){
		if($count > 0){
			break;
		}
		echo "<$column>$value</$column>\n";
		$count ++;
	}
	echo "</status>\n\n";
}

?>