<?php
/**
 * Create Account
 * 
 * @author Tianyou Li
 * @team SALES
 * @date 03/28/2010
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
$account_name = $_POST["Account_Name"];
// Website
$website = $_POST["Website"];
$customer_type =$_POST["Customer_Type"];
// Date_As Lead or Customer (DATETIME)
$datetime = date("Y-m-d H:i:s",mktime());
// Account_Person_Title
$title = $_POST["Account_Person_Title"];
// First_Name
$first_name = $_POST["First_Name"];
// Last_Name
$last_name = $_POST["Last_Name"];
// Zip_Code
$zipcode = $_POST["Zip_Code"];
// Address1
$address1 = $_POST["Address1"];
// Address2
$address2 = $_POST["Address2"];
// City
$city = $_POST["City"];
// State
$state = $_POST["State"];
// Location_Type (dropdownlist)
$location_type = "Work";//$_POST["Location_Type"];
$user_name = $first_name."_".$last_name;
$user_pwd = md5($first_name.$last_name);
// prepare the sql statements
$sql_account = "INSERT INTO ".$db_name.".account VALUES (null, '".$account_name."', '".$website."', '".$datetime."', '".$datetime."','".$customer_type."');"; 
$account_id = $db->insert($sql_account);

$sql_account_person = "INSERT INTO ".$db_name.".account_person VALUES (null, ".$account_id.", '".$title."', '".$first_name."', '".$last_name."', '".$user_name."', '".$user_pwd."');";
$sql_account_location = "INSERT INTO ".$db_name.".account_location VALUES (null, '".$zipcode."', '".$address1."', '".$address2."', '".$city."', '".$state."', '".$location_type."');";
$account_person_id = $db->insert($sql_account_person);
//TODO: insert contact information: Email, Phone

//TODO: transactions 	
//TODO: $sql_contact = "INSERT INTO contact VALUES (null, ".$account_id.", ".$account_person_id.", )";

$account_location_id = $db->insert($sql_account_location);
$sql_account_person_location = "INSERT INTO ".$db_name.".account_person_location VALUES (".$account_person_id.", ".$account_location_id.");";
$account_person_location_id= $db->insert($sql_account_person_location);

echo $sql_account."\n<br>";
echo $sql_account_person."\n<br>";
echo $sql_account_location."\n<br>";
echo $sql_account_person_location."\n<br>";
echo "OK";
?>