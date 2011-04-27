<?php
/**
 * Customer Location Management
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
//-->location table
$customer_location_id = $_POST["Customer_Location_Id"];
$zipcode = $_POST["Zipcode"];
$address1 = $_POST["Address1"];
$address2 = $_POST["Address2"];
$city = $_POST["City"];
$state = $_POST["State"];
$location_type = $_POST["Location_type"];

//UPDATE 175192_CRM_Test.customer SET customer_name="CCI", website="www.consultcity.com", date_entered="2011-04-01", customer_type="Company", status="Customer" WHERE customer_id=1
//$sql_customer_equipment = "INSERT INTO ".$db_name.".customer_equipment VALUES (null,'".$equipment_name."', '".$specification."', '".$contract_id."','".$qty."');"; 
/*
  `customer_location_id` INT NOT NULL AUTO_INCREMENT ,
  `zipcode` VARCHAR(5) NULL ,
  `address1` VARCHAR(100) NULL ,
  `address2` VARCHAR(100) NULL ,
  `city` VARCHAR(50) NULL ,
  `state` VARCHAR(50) NULL ,
  `location_type` VARCHAR(50) NOT NULL ,

$customer_location_id = 7;
$location_type = "Home";
$zipcode = "22320";
$address1 = "1600 S.Joyce ST";
$address2 = "ArmyNavy DR";
$city = "Arlington";
$state = "VA";
*/
$sql_location = "UPDATE ".$db_name.".location_info SET zipcode='".$zipcode."', address1='".$address1."', address2='".$address2."', city='".$city."', state='".$state."', location_type='".$location_type."' WHERE customer_location_id=".$customer_location_id.";"; 
$sql_location_id = $db->update($sql_location);

//get contract id
echo $sql_location."\n<br>";
echo $sql_location_id."\n<br>";

?>