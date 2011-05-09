<?php
/**
 * insert new agent 
 * 
 * @author Yaxing Chen
 * @team SET
 * @date 05/05/2011
 */
include 'config.php';

$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];

$dob = $_POST["dob"];
$add1 = $_POST["add1"];
$add2 = $_POST["add2"];
$city = $_POST["city"];
$state = $_POST["state"];
$zipcode = $_POST["zipcode"];
$phone = $_POST["phone"];
$email = $_POST["email"];

//$first_name = "TestF";
//$last_name = "TestL";
//
//$dob = "1988-01-01";
//$add1 = "S Joyce St.";
//$add2 = "SSS";
//$city = "Arlington";
//$state = "VA";
//$zipcode = "22202";
//$phone = "222-222-2222";
//$email = "2@2";

$user_name = $first_name."_".$last_name;
$user_pwd = md5($first_name.$last_name);

$db = new Database();

$sql = "insert into `agent` set `first_name` = '$first_name', `last_name` = '$last_name', `birthday_date` = '$dob', `user_name` = '$user_name', `user_pwd` = '$user_pwd'";
$agent_id = $db->insert($sql);
$phone_id = 1;
$email_id = 1;

$sql = "insert into `agent_address` set `agent_id` = $agent_id, `address1` = '$add1', `address2` = '$add2', `city` = '$city', `state` = '$state', `zipcode` = '$zipcode'";
$db->insert($sql);

if(!empty($phone) && strlen($phone) > 0){
	$sql = "insert into `contact_communication` set `agent_id` = $agent_id, `type_of_communication` = 'Phone', `value` = '$phone'";
	$phone_id = $db->insert($sql);
}

if(!empty($email) && strlen($email) > 0){
	$sql = "insert into `contact_communication` set `agent_id` = $agent_id, `type_of_communication` = 'Email', `value` = '$email'";
	$email_id = $db->insert($sql);
}

if($agent_id <= 0){
	echo $agent_id;
}
if($phone_id <= 0){
	echo $agent_id;
}
if($email_id <= 0){
	echo $agent_id;
}
else{
	echo 1;
}

?>