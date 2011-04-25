<?php

/**
 * Worker creation
 * @author Yaxing Chen
 * @date 04/18/2011
 */

include_once "../../config.php";

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$birthDate = $_POST["birthDate"];
$userName = $_POST["userName"];
$pwd = $_POST["pwd"];

$db = new Database();
$sql = "insert into `worker` set `first_name` = '".$firstName."', `last_name` = '".$lastName."', 
		`birthday_date` = '".$birthDate."', `user_name` = '".$userName."', `user_pwd` = '".$pwd."'";

$result = $db->insert($sql);

echo '<affectedRows>'.$result."</affectedRows>\n";



?>