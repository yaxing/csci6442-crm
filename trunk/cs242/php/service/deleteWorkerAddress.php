<?php
/**
 * 
 * delete worker address
 * @author Yaxing Chen
 * @date 04/18/2011
 */

include_once "../../config.php";
$adderssId = $_POST["addressId"];

$db = new Database();
$sql = "delete from `worker_address` where `address_id` = ".$adderssId;

$result = $db->delete($sql);

echo '<affectedRows>'.$result."</affectedRows>\n";

?>