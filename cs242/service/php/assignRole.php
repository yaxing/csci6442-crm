<?php

/**
 * Assigns a role to an agent
 * 
 * @author Alex Florescu
 * @team Services
 * @date 04/02/2011
 */
 
  
#region include
include_once 'header.php';
#endregion include
 
$role = $_POST['role'];
$agent = $_POST['agent'];
//$role="testRole";
//$agent=1;
	//execute statement
	$sql = "INSERT INTO role VALUES ('$role', $agent)";
	//echo $sql; 
	$affectedRows = $db->update($sql);
	//affected rows should be exactly 1, otherwise report problem
	echo '<affectedRows>'.$affectedRows."</affectedRows>\n";  
?>