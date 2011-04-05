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

	$db = new Database();
	$db_name = '175192_CRM_Test';//
	$parent_account = $_POST['Parent_Account']; //"GWU-CS"; // dropdownlist
	$communication_with = $_POST['Account_Person']; //"Anbing Xue";// dropdownlist
	if (!isset($_COOKIE["basic"]['user_role'])){
		header('Location: login.html');//REDIRECTION PROBLEM
	}
	if ($_COOKIE["basic"]['user_role'] == "account_person" ){
		header('Location: login.html');//REDIRECTION PROBLEM
	}
	$communication_by = $_COOKIE["basic"]['user_id']; //fetch from cookie
	$communication_title = $_POST['Subject'];//"subject";
	$communication_description = $_POST['Description'];//"description";
	$date_time = date("Y-m-d H:i:s",mktime());
	
	/*$sql = "insert into contact_type values('".$parent_account."')";
	$affectedRow = $db->update($sql);
	
	var_dump($parent_account);
	die();*/
	
	$sql_parent_account = "SELECT account_id FROM ".$db_name.".account WHERE account_name='".$parent_account."';";
	$db->select($sql_parent_account);
	$account_id_array = $db->fetchIndexArray();
	if (empty($account_id_array)){
		echo "NO SUCH ACCOUNT!";
		return;
	}
	$parent_account_id = $account_id_array[0][0];//the 1st element of the result array
	echo "</br>".$parent_account_id;
	$name_array = explode(" ", $communication_with);
	$first_name = $name_array[0];
	$last_name = $name_array[1];
	echo "</br>".$first_name."@";
	echo "</br>".$last_name."@";
	$sql_account_person = "SELECT account_person_id FROM ".$db_name.".account_person WHERE parent_account=".$parent_account_id." AND first_name='".$first_name."' AND last_name='".$last_name."';";

	$db->select($sql_account_person);
	$account_person_id_array = $db->fetchIndexArray();
	if (empty($account_person_id_array)){
		echo "<br/>NO SUCH ACCOUNT PERSON";
		return;
	}
	$communication_with_id = $account_person_id_array[0][0];// the 1st element of the result array
	
	/*$sql_worker = "SELECT worker_id FROM ".$db_name.".worker WHERE user_name='".$communication_by."';";
	//echo $sql_worker;
	$db->select($sql_worker);
	$worker_id_array = $db->fetchIndexArray();
	if (empty($worker_id_array)){
		echo "NO SUCH WORKER";
		return;
	}*/
	$communication_by_id = $communication_by;//$worker_id_array[0][0];// the 1st element of the result array
	
	$sql_communication = "INSERT INTO ".$db_name.".communication VALUES ( null, ".$parent_account_id.", ".$communication_with_id.", ".		$communication_by_id.", '".$communication_title."', '".$communication_description."', '".$date_time."');";
	$communication_id = $db->insert($sql_communication);
	echo $communication_id; // Get the communication_id of the communication just inserted.
 

 
?>
