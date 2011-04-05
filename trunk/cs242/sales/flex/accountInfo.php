<?php
/**
 * Create Communication
 * 
 * @author Tianyou Li
 * @team SALES
 * @date 04/03/2010
 */

//include_once '..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'config.php'; 
include_once 'Database.class.php';

accountInfo();

function accountInfo(){
	$db = new Database();
	$db_name = '175192_CRM_Test';//
	//$sql = "insert into contact_type values('fax');";
	//$db->update($sql);
	
	$sql_all_parent_account = "SELECT account_name FROM ".$db_name.".account;";	
	$db->select($sql_all_parent_account);
	$account_name_array = $db->fetchIndexArray();
	$result = "<parent_accounts>";
	for ( $i = 0; $i < count($account_name_array); $i++) {
		$result .= "<account_name>".$account_name_array[$i][0]."</account_name>";
		//$result .="<account_name name='".$account_name_array[$i][0]."'/>";
	}
	$result .= "</parent_accounts>";
	
	echo $result;
	}
?>