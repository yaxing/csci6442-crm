<?php
/**
 * Database test & sample code
 * 
 * @author Yaxing Chen
 * @team SET
 * @date 03/26/2011
 */

#region include
//include_once '..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'config.php'; 
include_once 'Database.class.php';   
#endregion include

dbTest();

/*
 * database sample function
 */
function dbTest(){
	
	//connect using default username & password in Dbconfig.php
	$db = new Database();
	
	//connect using designated username & password
	//$db = new Database('18902_crmprod','crmprodcsci242');
	
	//create sql statement
	//updates
	$sql = "insert into contact_type values('fax')";
	$affectedRow = $db->update($sql);
	echo $affectedRow."</br>";
	$sql = "insert into contact_type values('email')";
	$affectedRow = $db->update($sql);
	//print the number of affected rows
	echo $affectedRow."</br>";
	
	//select
	$sql = "select * from contact_type";
	$sql = "SELECT account_name FROM account;";
	
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
	//echo "</br>".$result[0][1];
	
	//delete
	$sql = "delete from contact_type where contact_type='fax'";
	$affectedRow = $db->delete($sql);
	echo $affectedRow."</br>";
	$sql = "delete from contact_type where contact_type='email'";
	$affectedRow = $db->delete($sql);
	echo "</br>".$affectedRow;
	echo "</br> TEST: </br>";
	$db_name = '175192_CRM_Test';//
	
	$sql_all_parent_account = "SELECT account_name FROM ".$db_name.".account;";
	$sql_all_account_person = "SELECT CONCAT(first_name, ' ', last_name) FROM ".$db_name.".account_person;";
	
	$db->select($sql_all_parent_account);
	$account_name_array = $db->fetchIndexArray();
	$result = "<cust>";
	$result .= "<parent_accounts>";
	
	for ( $i = 0; $i < count($account_name_array); $i++) {
		$result .= "<account_name>".$account_name_array[$i][0]."</account_name>";
	}
	$result .= "</parent_accounts>";
	
	$db->select($sql_all_account_person);
	$person_name_array = $db->fetchIndexArray();
	$result .= "<account_persons>";
	
	for ( $j = 0; $j < count($person_name_array); $j++) {
		$result .= "<person_name>".$person_name_array[$j][0]."</person_name>";
	}
	$result .= "</account_persons>";
	$res =$account_name_array;
	echo $res;
}

?>