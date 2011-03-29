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
include_once '../../config.php';
//include_once 'Database.class.php';     
#endregion include
/*
 * database sample function
 */
//function createAccount(){
	
	//connect using default username & password in Dbconfig.php
$db = new Database();	
	//connect using designated username & password
	//$db = new Database('18902_crmprod','crmprodcsci242');
// Account_ID
if (is_null($_POST["Account_ID"])){
	$account_id = "1111111";
}else $account_id = $_POST["Account_ID"];

// Created_by
if (is_null($_POST["Created_by"])){
	$created_by = "salesperson";
}else $created_by = $_POST["Created_by"];

// Parent_Account (Account_Name)
if (is_null($_POST["Parent_Account"])){
	$account_name = "parent_account";
	$parent_account = "parent_account";
}else {
	$account_name = $_POST["Parent_Account"];
	$parent_account = $_POST["Parent_Account"];
}

// Website
if (is_null($_POST["Website"])){
	$website = "www.gwu.edu";
}else $website = $_POST["Website"];

// Customer_Type (dropdownlist)
if (is_null($_POST["Customer_Type"])){
	$customer_type ="type";
}else //$customer_type ="type";
	$customer_type =$_POST["Customer_Type"];

// Date_As Lead or Customer (DATETIME)
//if (is_null($_POST["Date_As"])){
	$datetime = date("Y-m-d H:i:s",mktime());
//}else {
	$datetime = date("Y-m-d H:i:s",mktime());//$datetime =$_POST["Date_As"];
//}

// Account_Person_Title
if (is_null($_POST["Account_Person_Title"])){
	$title = "MR.";
}else $title = $_POST["Account_Person_Title"];

// First_Name
if (is_null($_POST["First_Name"])){
	$first_name = "first_name";
}else $first_name = $_POST["First_Name"];

// Last_Name
if (is_null($_POST["Last_Name"])){
	$last_name = "last_name";
}else $last_name = $_POST["Last_Name"];

// Zip_Code
if (is_null($_POST["Zip_Code"])){
	$zipcode = "20006";
}else $zipcode = $_POST["Zip_Code"];


// Address1
if (is_null($_POST["Address1"])){
	$address1 = "2000 F ST";
}else $address1 = $_POST["Address1"];

// Address2
if (is_null($_POST["Address2"])){
	$address2 = "APT XXX";
}else $address2 = $_POST["Address2"];

// City
if (is_null($_POST["City"])){
	$city = "Washington";
}else $city = $_POST["City"];

// State
if (is_null($_POST["State"])){
	$state = "DC";
}else $state = $_POST["State"];

// Location_Type (dropdownlist)
if (is_null($_POST["Location_Type"])){
	$location_type = "Work~~";
}else $location_type = $_POST["Location_Type"];
 $database = '18902_CRM_Prod';
//define account_person_id by some rule -- TBD!!!
//$account_person_id = "".$parent_account."-".$first_name."-".$last_name;
//define account_location_id by some rule -- TBD!!!
//$account_location_id = "".$parent_account."-".$address1;
// prepare the sql statements
$sql_account = "INSERT INTO ".$database.".Account VALUES (null, '".$created_by."', '".$account_name."', '".$website."', '".$datetime."', '".$datetime."','".$customer_type."')"; 
echo $sql_account."\n<br>";
$insertId_account = $db->insert($sql_account);

$sql_account_person = "INSERT INTO ".$database.".Account_person VALUES (null, ".$insertId_account.", '".$title."', '".$first_name."', '".$last_name."')";
echo $sql_account_person."\n<br>";
$sql_account_location = "INSERT INTO ".$database.".Account_Location VALUES (null, '".$zipcode."', '".$address1."', '".$address2."', '".$city."', '".$state."', '".$location_type."')";
echo $sql_account_location."\n<br>";
//$sql_contact = "INSERT INTO contact VALUES (null, ".$insertId_account.", ".$insertId_account_person.", )";

$insertId_account_person = $db->insert($sql_account_person);
$insertId_account_location = $db->insert($sql_account_location);

$sql_account_person_location = "INSERT INTO ".$database.".Account_Person_Location VALUES (".$insertId_account_person.", ".$insertId_account_location.")";
echo $sql_account_person_location."\n<br>";
echo "OK";
// insert sqls

$insertId_account_person_location = $db->insert($sql_account_person_location);


//} 
//else


	/*//updates
	$sql = "insert into Contact_type values('fax')";
	$affectedRow = $db->update($sql);
	
	//print the number of affected rows
	echo $affectedRow."</br>";
	
	//select
	$sql = "select * from Contact_type";
	$db->select($sql);
	
	//fetch result set as an indexed array 
	//(also can fetch result set into other kinds of arrays, please refer to Database.class.php)
	$result = $db->fetchIndexArray();
	
	//print all result in the format of fetched array
	var_dump($result);
	
	//get & print number of rows in result set
	echo "</br>".$db->numRows();
	
	//print the first element in the result set 
	echo "</br>".$result[0][0];
	
	//delete
	$sql = "delete from Contact_type where Contact_Type='fax'";
	$affectedRow = $db->delete($sql);
	echo "</br>".$affectedRow;
	*/
//}

?>