<?php
/**
 * Create Contract
 * 
 * @author Anbing Xue
 * @team SALES
 * @date 04/10/2010
 *       04/16/2010 
 *			Use Customer instead of Account;
 */

#region include
//include_once '..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'config.php'; 
include_once 'Database.class.php';
//include_once '../../config.php';
#endregion include

$db = new Database();
$db_name = "175192_CRM_Test";

//SET UP VARIABLES
//-->contract table
// Account_Name
$customer_id = $_POST["Customer_ID"];
//Start_Date
$start_date = $_POST["Start_Date"];
//End_Date
$end_date = $_POST["End_Date"];
//Service_Name
$service_name = $_POST["Service_Name"];
//Service_Level
$service_level = $_POST["Service_Level"];
//Location_Id
$location_id = $_POST["Location_Id"];
//Price
$price = $_POST["Price"];
//order_id   TBD.....
$order_id = "0";

$datetime = date("Y-m-d H:i:s",mktime());
$end_date = date("Y-m-d",mktime(0,0,0,substr($end_date,0,2),substr($end_date,3,2),substr($end_date,6,4)));

//-->customer_equipment table
$equipment_name = $_POST["Equipment_Name"];
$specification = $_POST["Specification"];
//$contract_id = $_POST["Contract_Id"];
$qty=$_POST["Quantity"];

// prepare the sql statements
//insert contract
$sql_contract = "INSERT INTO ".$db_name.".contract VALUES (null, '".$datetime."', '".$end_date."', '".$service_name."', '".$service_level."', '".$customer_id."', '".$location_id."', '".$price."', '".$order_id."');"; 
//$sql_contract = "INSERT INTO ".$db_name.".contract VALUES ('".$datetime."', '2011/04/16', 'pc', 'gold', '1', '1', //'200', '00000');"; 
$contract_id = $db->insert($sql_contract);

//insert customer_equipment. to be modified because the id is auto increment id
$sql_customer_equipment = "INSERT INTO ".$db_name.".customer_equipment VALUES (null,'".$equipment_name."', '".$specification."', '".$contract_id."','".$qty."');"; 
//$sql_customer_equipment = "INSERT INTO ".$db_name.".customer_equipment VALUES (null,'pc', 'pc screen', '1','20');"; 
//echo "customer_equipment: ".$sql_customer_equipment."\n<br>";
$sql_customer_equipment_id = $db->insert($sql_customer_equipment);


//get contract id
echo "<CALCU>";
echo "<CALCUS>";
echo "<CONTRACT_ID>".$contract_id."</CONTRACT_ID>";
echo "</CALCUS>";
echo "</CALCU>";
?>