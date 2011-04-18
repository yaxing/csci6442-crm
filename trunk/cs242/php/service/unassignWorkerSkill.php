<?php
/**
 * 
 * delete skill of worker
 * @author Yaxing Chen
 * @date 04/18/2011
 */

include_once "../../config.php";
$skill = $_POST["skill"];
$workerId = $_POST["workerId"];

$db = new Database();
$sql = "delete from `worker_skill` where `skill` = '".$skill."', `worker_id` = ".$workerId;

$result = $db->delete($sql);

echo '<affectedRows>'.$result."</affectedRows>\n";

?>