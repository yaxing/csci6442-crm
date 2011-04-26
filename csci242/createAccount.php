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
// Account type - Lead OR Customer
$account_type = $_POST["Account_Type"];
// Customer type
$customer_type = $_POST["Customer_Type"];
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
$address1 = trim($_POST["Address1"]);
// Address2
$address2 = $_POST["Address2"];
// City
$city = $_POST["City"];
// State
$state = $_POST["State"];
// Location_Type //default
$location_type = "Headquarter";//$_POST["Location_Type"];
// Email 
$email = trim($_POST["Email"]);
// Phone
$phone = trim($_POST["Phone"]);
/*$sql = "insert into contact_type values('".$address1."_".(strlen($address1)>0)."_')";
	//$sql = "insert into contact_type values('".md5('qwcherry')."')";
	$affectedRow = $db->update($sql);
	die();
*/
$user_name = $first_name."_".$last_name;
$user_pwd = md5($first_name.$last_name);
// prepare the sql statements
// Account 
if ($account_type == "Lead")
	$sql_account = "INSERT INTO ".$db_name.".customer VALUES (null, '".$account_name."', '".$website."', '".$datetime."', null,'".$customer_type."');"; 
else
	$sql_account = "INSERT INTO ".$db_name.".customer VALUES (null, '".$account_name."', '".$website."', null, '".$datetime."','".$customer_type."');"; 
$account_id = $db->insert($sql_account);
echo $sql_account."\n<br>";

// Account Person
$sql_account_person = "INSERT INTO ".$db_name.".contact VALUES (null, ".$account_id.", '".$title."', '".$first_name."', '".$last_name."', '".$user_name."', '".$user_pwd."', null);";
$account_person_id = $db->insert($sql_account_person);
echo $sql_account_person."\n<br>";

// Account Location
if (strlen($address1)>0){
	$sql_account_location = "INSERT INTO ".$db_name.".location_info VALUES (null, '".$zipcode."', '".$address1."', '".$address2."', '".$city."', '".$state."', '".$location_type."');";
	$account_location_id = $db->insert($sql_account_location);
	$sql_account_person_location = "INSERT INTO ".$db_name.".contact_location VALUES (".$account_person_id.", ".$account_location_id.");";
	$account_person_location_id = $db->insert($sql_account_person_location);
	$sql_account_location = "INSERT INTO ".$db_name.".customer_location VALUES (".$account_id.", ".$account_location_id.");";
	$account_location_id = $db->insert($sql_account_location);
	echo $sql_account_location."\n<br>";
	echo $sql_account_person_location."\n<br>";
}
// Contact
$worker_id = $_COOKIE["basic"]['user_id'];
$person_id = $account_person_id;
if ($customer_type == "Company"){
	$person_id = 'null';
}
if (!empty($email)){
	//Email
	$sql_email = "INSERT INTO ".$db_name.".contact_communication VALUES (null, ".$account_id.", ".$person_id.", ".$worker_id.", 'Email', '".$email."');";
	$email_id = $db->insert($sql_email);
}
if (!empty($phone)){
	//Phone
	$sql_phone = "INSERT INTO ".$db_name.".contact_communication VALUES (null, ".$account_id.", ".$person_id.", ".$worker_id.", 'Phone', '".$phone."');";
	$phone_id = $db->insert($sql_phone);
}

echo "OK";
?>