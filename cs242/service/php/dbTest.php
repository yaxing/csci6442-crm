<?php
/**
 * Database test & sample code
 * 
 * @author Yaxing Chen
 * @team SET
 * @date 03/26/2010
 */

#region include
include_once '..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'config.php';     
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
}

?>