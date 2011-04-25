<?php
/**
 * unassign role of worker
 * @author Yaxing Chen
 * @date 04/18/2011
 */
include_once "../../config.php";

$role = $_POST["role"];
$workerId = $_POST["workerId"];

$sql = "delete from `role` where `role_type` = '".$role."', `worker_id` = '".$workerId."'";

$db = new Database();
$result = $db->delete($sql);

echo '<affectedRows>'.$result."</affectedRows>\n"; 
?>