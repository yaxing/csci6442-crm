<?php
/**
 * Create Service
 * 
 * @author Sharvani Tota
 * @team SALES
 * @date 04/16/2011
 */

#region include
//include_once '..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'config.php'; 
include_once 'Database.class.php';
//include_once '../../config.php';
#endregion include

$db = new Database();
$db_name = "175192_CRM_Test";
//SET UP VARIABLES
// Service_Name
$service_name = $_POST["service_name"];
//$service_name = "PC value";
// Description
$description = $_POST["description"];
//$description = "afjlkaj";




// prepare the sql statements
//Service
$sql_service = "INSERT INTO ".$db_name.".service VALUES ('".$service_name."',null, '".$description."');";
$db->insert($sql_service);
//echo $sql_account ."\n<br>";
echo $sql_service;

?>