<?php
/**
 * 
 * assign worker address
 * @author Yaxing Chen
 * @date 04/18/2011
 */
include_once "../../config.php";
$workerId = $_POST["workerId"];
$ad1 = $_POST["address1"];
$ad2 = $_POST["address2"];
$city = $_POST["city"];
$state = $_POST["state"];
$zipcode = $_POST["zipcode"];

$db = new Database();
$sql = "insert into `worker_address` set `worker_id` = ".$workerId.", `address1` = '".$ad1."', `address2` = '"
		.$ad2."', `city` = '".$city."', `state` = '".$state."', `zipcode` = '".$zipcode."'";

$result = $db->insert($sql);

echo '<affectedRows>'.$result."</affectedRows>\n";

?>