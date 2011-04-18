<?php
/**
 * 
 * assign skill to worker
 * @author Yaxing Chen
 * @date 04/18/2011
 */
include_once "../../config.php";
$skill = $_POST["skill"];
$workerId = $_POST["workerId"];

$db = new Database();
$sql = "insert into `worker_skill` set `skill` = '".$skill."', `worker_id` = ".$workerId;

$result = $db->insert($sql);

echo '<affectedRows>'.$result."</affectedRows>\n";

?>