<?php
/**
 * 
 * delete role
 * @author Yaxing Chen
 * @date 04/18/2011
 */

include_once "../../config.php";
$role = $_POST["role_type"];

$db = new Database();
$sql = "delete from `role_type` where `role_type` = '".$role;

$result = $db->delete($sql);

echo '<affectedRows>'.$result."</affectedRows>\n";

?>