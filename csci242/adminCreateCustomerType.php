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
// Customer_Type
$customer_type = $_POST["customer_type"];
//$customer_type = "New";

// prepare the sql statements
//Customer_Type
//$sql_service = "INSERT INTO ".$db_name.".service VALUES ('".$service_name."',".$price_per_hour.", '".$description."');";
$sql_customer = "INSERT INTO ".$db_name.".customer_type VALUES ('".$customer_type."');";
$db->insert($sql_customer);
//echo $sql_account ."\n<br>";
echo $sql_customer;

?>