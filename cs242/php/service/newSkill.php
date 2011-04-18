<?php
/**
 * 
 * new skill
 * @author Yaxing Chen
 * @date 04/18/2011
 */
include_once "../../config.php";
$skill = $_POST["skill"];

$db = new Database();
$sql = "insert into `skill` set `skill` = '".$skill."'";

$result = $db->insert($sql);

echo '<affectedRows>'.$result."</affectedRows>\n";

?>