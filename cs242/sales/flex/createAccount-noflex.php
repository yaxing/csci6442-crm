<?php
/**
 * Create Account
 * 
 * @author Tianyou Li
 * @team SALES
 * @date 03/28/2010
 */

#region include
//include_once '../../config.php';
//include_once '..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'config.php'; 
include_once 'Database.class.php';     
#endregion include
/*
 * database sample function
 */
//function createAccount(){
	
	//connect using default username & password in Dbconfig.php
$db = new Database();	
$db_name = "175192_CRM_Test";
	//connect using designated username & password
	//$db = new Database('18902_crmprod','crmprodcsci242');
// Account_ID
//if (is_null($_POST["Account_ID"])){
	$account_id = "1111111";
//}else $account_id = $_POST["Account_ID"];


// Parent_Account (Account_Name)
//if (is_null($_POST["Parent_Account"])){
	$account_name = "parent_account";
	$parent_account = "parent_account";
//}else {
	//$account_name = $_POST["Parent_Account"];
	//$parent_account = $_POST["Parent_Account"];
//}

// Website
//if (is_null($_POST["Website"])){
	$website = "www.gwu.edu";
//}else $website = $_POST["Website"];

// Customer_Type (dropdownlist)
//if (is_null($_POST["Customer_Type"])){
	$customer_type ="Company";
//}else //$customer_type ="type";
	//$customer_type =$_POST["Customer_Type"];

// Date_As Lead or Customer (DATETIME)
//if (is_null($_POST["Date_As"])){
	$datetime = date("Y-m-d H:i:s",mktime());
//}else {
//	$datetime = date("Y-m-d H:i:s",mktime());//$datetime =$_POST["Date_As"];
//}

// Account_Person_Title
//if (is_null($_POST["Account_Person_Title"])){
	$title = "MR.";
//}else $title = $_POST["Account_Person_Title"];

// First_Name
//if (is_null($_POST["First_Name"])){
	$first_name = "first_name";
//}else $first_name = $_POST["First_Name"];

// Last_Name
//if (is_null($_POST["Last_Name"])){
	$last_name = "last_name";
//}else $last_name = $_POST["Last_Name"];

// Zip_Code
//if (is_null($_POST["Zip_Code"])){
	$zipcode = "20006";
//}else $zipcode = $_POST["Zip_Code"];


// Address1
//if (is_null($_POST["Address1"])){
	$address1 = "2000 F ST";
//}else $address1 = $_POST["Address1"];

// Address2
//if (is_null($_POST["Address2"])){
	$address2 = "APT XXX";
//}else $address2 = $_POST["Address2"];

// City
//if (is_null($_POST["City"])){
	$city = "Washington";
//}else $city = $_POST["City"];

// State
//if (is_null($_POST["State"])){
	$state = "DC";
//}else $state = $_POST["State"];

// Location_Type (dropdowanlist)
//if (is_null($_POST["Location_Type"])){
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
echo $account_id."\n<br>";
echo $account_person_id."\n<br>";
echo $account_location_id."\n<br>";
echo "OK";
?>