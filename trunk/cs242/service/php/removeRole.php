<?php

/**
 * Removes a role from an agent
 * 
 * @author Alex Florescu
 * @team Services
 * @date 04/24/2011
 */
 
  
#region include
include_once 'header.php';
#endregion include
 
$role = $_POST['role'];
$agent = $_POST['agent'];
//$role="testRole";
//$agent=1;
	//execute statement
	$sql = "DELETE FROM role WHERE role_type='$role' AND worker_id=$agent";
	$affectedRows = $db->update($sql);
	//affected rows should be exactly 1, otherwise report problem
	echo '<affectedRows>'.$affectedRows."</affectedRows>\n";  
?>