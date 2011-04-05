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

personInfo();

function personInfo(){
	$db = new Database();
	$db_name = '175192_CRM_Test';//
	//$sql = "insert into contact_type values('fax');";
	//$db->update($sql);
	if(!isset($_POST['Parent_Account'])){
		echo "error: did not GET!";
		$account_name = "GWU";
	}
	else 
		$account_name = $_POST['Parent_Account'];
	$sql_the_parent_account = "SELECT account_id FROM account WHERE account_name='".$account_name."';";
	$db->select($sql_the_parent_account);
	$parent_account_array = $db->fetchIndexArray();
	$parent_account_id = $parent_account_array[0][0];
	
	$sql_the_account_persons = "SELECT CONCAT(first_name, ' ', last_name) FROM ".$db_name.".account_person WHERE parent_account=".$parent_account_id.";";	
	$db->select($sql_the_account_persons);
	$person_name_array = $db->fetchIndexArray();
	$result = "<account_persons>";
	for ( $j = 0; $j < count($person_name_array); $j++) {
		$result .="<person_name>".$person_name_array[$j][0]."</person_name>";
	}
	$result .= "</account_persons>";	
	echo $result;
	}
?>