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
$domain_name = ""; //'consultcity.com';
$path = '/'; // TBD 
$user_id;
$user_role;

$db = new Database();
session_start();
//new login 
//if (isset($_POST['username']) && isset($_POST['password']) ) {
if(true) {
	$user_name = $_POST['username'];//"admin";//
	$user_pwd = $_POST['password'];//"dkd";//
	//$user_name = "Sharvani";
	//$user_pwd = "Tota";
	/*$sql = "insert into contact_type values('".$user_name."')";
	$affectedRow = $db->update($sql);
	die();*/
	$sql_cust = "SELECT contact_id FROM contact WHERE user_name='".$user_name."' AND user_pwd='".($user_pwd)."';";
	$sql_worker = "SELECT worker_id FROM worker WHERE user_name='".$user_name."' AND user_pwd='".($user_pwd)."';";
	$db->select($sql_cust);
	$result_cust = $db->fetchIndexArray();
	//var_dump($result_cust);
	if (empty($result_cust)){
		$db->select($sql_worker);
		$result_worker = $db->fetchIndexArray();
		if (empty($result_worker)){
			echo 'Sorry, the combination of username and password you provided is incorrect.';
			die();
		}
		else{
			$user_id = $result_worker[0][0]; // found a worker_id in worker!
			$sql_role = "SELECT role_type FROM role WHERE worker_id=".$user_id.";"; // role of the worker
			$db->select($sql_role);
			$result_role = $db->fetchIndexArray();
			if (empty($result_role)){
				echo "The worker does not have any role";
			}
				$user_role = $result_role[0][0];
			for ($i = 1; $i < count($result_role); $i++){
				$user_role .= "::".$result_role[$i][0];
			}
			echo "<br/> worker_id: ".$user_id." <br/> role:".$user_role;
		}
	}	
	else{
		$user_id = $result_cust[0][0]; // found a user_id in account_person!
		$user_role = "account_person"; // role for account_person!
		echo "<br/> contact_id: ".$user_id." <br/> person_role:".$user_role;
	}
     
        if (isset($_POST['remember_me'])/*true*/) {
            /* Set cookie to last 1 year */
			echo "<br/>HERE remembered";
			setcookie('basic[user_id]', $user_id, time()+60*60*24*365, $path, $domain_name);
			echo "<br/>".$_COOKIE["basic"]['user_id'];
			setcookie('basic[user_role]', $user_role, time()+60*60*24*365, $path, $domain_name);
            setcookie('private[user_name]', $user_name, time()+60*60*24*365, $path, $domain_name);
			if (isset($_POST['remember_my_password'])/*true*/){
				echo "<br/>HERE remembered";
				setcookie('private[user_pwd]', $user_pwd, time()+60*60*24*365, $path, $domain_name);
			}        
        } else {
            /* Cookie last 24 hours */
			setcookie('basic[user_id]', $user_id, time()+60*60*24, $path, $domain_name);
			setcookie('basic[user_role]', $user_role, time()+60*60*24, $path, $domain_name);
            
        }  
        
		
} 
else {
    echo 'You must supply a username and password.';
}
?>