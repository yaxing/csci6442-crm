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
//$service_name = 'PCDA';
// Description
$description = $_POST["description"];
//$description = 'ABCDEF';
//Selected_Service_Name
$selected_service_name = $_POST["selected_service_name"];
//selected_service_name = 'ABC';
// prepare the sql statements
//Service
	$sql = "UPDATE service SET service_name='$service_name',description='$description' 
	WHERE service_name='$selected_service_name';";
	echo $sql;
    $affectedRows = $db->update($sql);
	echo $affectedRows;

//echo $sql_account ."\n<br>";


?>