<?php
/**
 * Add Contact Location details
 * 
 * @author Varun Maliwal
 * @team SALES
 * @date 04/09/2011
 */
#region include
//include_once '..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'config.php'; 
include_once 'Database.class.php';
//include_once '../../config.php';
#endregion include

$db = new Database();
$db_name = "175192_CRM_Test";

//SET UP VARIABLES
//$account_person_id = $_POST["person_id"];
//$account_person_id = $_SESSION["current_person_id"];
$account_person_id = $_COOKIE["account_person"]["person_id"];
$account_id = 1;//TO CHANGE!!!!!!!!!!!!!!!!!!!!!!!
$location_type = $_POST["location_type"]; // type of location
$city = $_POST["city"]; //city
$state = $_POST["state"]; //state
$zipcode = $_POST["zipcode"]; //zipcode
$address1 = $_POST["address1"]; //address 1
$address2 = $_POST["address2"]; //address 2

// insert location details into account_location table
$sql_location = " INSERT INTO ".$db_name.".contact_location VALUES (null, '".$zipcode."', '".$address1."', '".$address2."', '".$city."', '".$state."', '".$location_type."');";
$location_id = $db->insert($sql_location);

// insert location_id and account_person_id into account_person_location table
$sql_account_person_location = "INSERT INTO ".$db_name.".contact_location VALUES (".$account_person_id.", ".$location_id.");";
$account_person_location_id= $db->insert($sql_account_person_location);
// insert location_id and account_person_id into account_location table
$sql_account_location = "INSERT INTO ".$db_name.".customer_location VALUES (".$account_id.", ".$location_id.");";
$account_location_id= $db->insert($sql_account_location);

echo $sql_account_location."\n<br>";
echo $sql_account_person_location."\n<br>";
?>