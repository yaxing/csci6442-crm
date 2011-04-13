<?php
/**
 * Create Account Person
 * 
 * @author Anbing Xue
 * @team SALES
 * @date 04/09/2010
 */

#region include
//include_once '..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'config.php'; 
include_once 'Database.class.php';
//include_once '../../config.php';
#endregion include

$db = new Database();
$db_name = "175192_CRM_Test";

//SET UP VARIABLES
// Account_Name
$account_id = $_POST["Account_id"];
// Account_Person_Title
$title = $_POST["Account_Person_Title"];
// First_Name
$first_name = $_POST["First_Name"];
// Last_Name
$last_name = $_POST["Last_Name"];

$user_name = $first_name."_".$last_name;
$user_pwd = md5($first_name.$last_name);
//$user_name = $first_name."_".$last_name;
//$user_pwd = "123456";
// prepare the sql statements
$sql_account_person = "INSERT INTO ".$db_name.".account_person VALUES (NULL, '".$account_id."', '".$title."', '".$first_name."', '".$last_name."','".$user_name."','".$user_pwd."');"; 
$account_person_id = $db->insert($sql_account_person);
//$_SESSION["current_person_id"] = $account_person_id;
setcookie('account_person[person_id]', $account_person_id, time()+60*60*24, "/", "");
echo $sql_account_person."\n<br>";
echo "OK";
?>