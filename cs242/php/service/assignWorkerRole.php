<?php
/**
 * assign role to worker
 * @author Yaxing Chen
 * @date 04/18/2011
 */
include_once "../../config.php";
$role = $_POST["role"];
$workerId = $_POST["workerId"];

$sql = "insert into `role` set `role_type` = '".$role."', `worker_id` = '".$workerId."'";

$db = new Database();
$result = $db->insert($sql);

echo '<affectedRows>'.$result."</affectedRows>\n"; 
?>