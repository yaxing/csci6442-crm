<?php
/**
 * Create Contract
 * 
 * @author Anbing Xue
 * @team SALES
 * @date 04/10/2010
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
$account_id = $_POST["Account_ID"];
// Source_Communication
$source_communication = trim($_POST["Source_Communication"]);
// Location_ID
$location_id = $_POST["Location_ID"];
// Level_Of_Service
$level_of_service = $_POST["Level_Of_Service"];

$datetime = date("Y-m-d H:i:s",mktime());
if (empty($source_communication)) {
	$source_communication = "null";
}
// prepare the sql statements
//insert contract
$sql_contract = "INSERT INTO ".$db_name.".contract VALUES (".$account_id.", ".$source_communication.", '".$datetime."');"; 
$insert_contract_id = $db->insert($sql_contract);
//insert service_level
$sql_service_level = "INSERT INTO ".$db_name.".service_level VALUES (".$account_id.", ".$location_id.", '".$level_of_service."');"; 
$insert_srv_level_id = $db->insert($sql_service_level);

echo $sql_contract."\n<br>";
echo $sql_service_level."\n<br>";
echo "OK";
?>