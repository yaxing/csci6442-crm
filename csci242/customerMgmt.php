<?php
/**
 * Customer Management
 * 
 * @author Anbing Xue
 * @team SALES
 * @date 04/26/2010
 */

#region include
//include_once '..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'config.php'; 
include_once 'Database.class.php';
//include_once '../../config.php';
#endregion include

$db = new Database();
$db_name = "175192_CRM_Test";

//SET UP VARIABLES
//-->customer table
$customer_id = $_POST["Customer_Id"];
$customer_name = $_POST["Customer_Name"];
$website = $_POST["Website"];
$date_entered = $_POST["Date_Entered"];
$customer_type = $_POST["Customer_Type"];
$status = $_POST["Status"];
$date_entered = date("Y-m-d H:i:s",mktime());
$date_entered = date("Y-m-d",mktime(0,0,0,substr($date_entered,0,2),substr($date_entered,3,2),substr($date_entered,6,4)));
//UPDATE 175192_CRM_Test.customer SET customer_name="CCI", website="www.consultcity.com", date_entered="2011-04-01", customer_type="Company", status="Customer" WHERE customer_id=1
//$sql_customer_equipment = "INSERT INTO ".$db_name.".customer_equipment VALUES (null,'".$equipment_name."', '".$specification."', '".$contract_id."','".$qty."');"; 
/*
$customer_id = 1;
$website="adbad";
$customer_name= "CCI";
$customer_type="Individual";
$status="Customer";
*/
$sql_customer = "UPDATE ".$db_name.".customer SET customer_name='".$customer_name."', website='".$website."', date_entered='".$date_entered."', customer_type='".$customer_type."', status='".$status."' WHERE customer_id=".$customer_id.";"; 
$sql_customer_id = $db->update($sql_customer);

//get contract id
echo $sql_customer."\n<br>";
echo $sql_customer_id."\n<br>";

?>