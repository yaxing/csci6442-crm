<?php
/**
 * 
 * new role
 * @author Yaxing Chen
 * @date 04/18/2011
 */

include_once "../../config.php";
$role = $_POST["role_type"];
$parent = $_POST["parent_role"];

$db = new Database();
$sql = "insert into `role_type` set `role_type` = '".$role."', `parent_role_type` = '".$parent."'";

$result = $db->insert($sql);

echo '<affectedRows>'.$result."</affectedRows>\n";

?>