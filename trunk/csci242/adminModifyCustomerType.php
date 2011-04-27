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
$customer_type = $_POST["customer_type"];
$selected_customer_type = $_POST["selected_customer_type"];

// prepare the sql statements
//Service
	$sql = "UPDATE customer_type SET customer_type='$customer_type' 
	WHERE customer_type='$selected_customer_type';";
	echo $sql;
    $affectedRows = $db->update($sql);
	echo $affectedRows;

//echo $sql_account ."\n<br>";


?>