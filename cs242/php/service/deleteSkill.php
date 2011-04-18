<?php
/**
 * 
 * delete skill
 * @author Yaxing Chen
 * @date 04/18/2011
 */

include_once "../../config.php";
$skill = $_POST["skill"];

$db = new Database();
$sql = "delete from `skill` where `skill` = '".$skill."'";

$result = $db->delete($sql);

echo '<affectedRows>'.$result."</affectedRows>\n";

?>