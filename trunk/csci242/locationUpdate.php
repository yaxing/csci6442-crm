<?php
/**
 * Update Location
 * 
 * @author Varun Maliwal
 * @team SALES
 * @date 04/25/2011
 */


#region include
//include_once '..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'config.php'; 
include_once 'Database.class.php';
//include_once '../../config.php';
#endregion include
$db = new Database();
$db_name = "175192_CRM_Test";

$zipcode = $_POST["zipcode"];//"40012";//
$address1 = $_POST["address1"];//"Budlong AVE";//
$address2 = $_POST["address2"];//"APT123";//
$city = $_POST["city"];//"Los Angeles";//
$state = $_POST["state"];//"CA";//
$location_type= $_POST["type"];//"Home";//
$customer_location_id = $_POST["customer_location_id"];//"7";//


// prepare the sql statements
// update location information	
$sql = "UPDATE location_info SET zipcode='$zipcode',address1='$address1',address2='$address2',city='$city',state='$state',location_type='$location_type' WHERE customer_location_id='$customer_location_id';";
echo $sql;
$affectedRows = $db->update($sql);
echo $affectedRows;

?>