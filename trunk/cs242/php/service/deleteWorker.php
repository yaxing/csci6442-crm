<?php

/**
 * Worker creation
 * @author Yaxing Chen
 * @date 04/18/2011
 */

include_once "../../config.php";

$workerId = $_POST["workerId"];

$db = new Database();
$sql = "delete from `worker` where `worker_id` = ".$workerId;

$resultWorker = $db->delete($sql);

$sql = "delete from `worker_address` where `worker_id` = ".$workerId;

$resultAddress = $db->delete($sql);

echo '<affectedRows>'.$resultWorker."</affectedRows>\n";



?>