<?php

/**
 * Removes a skill from an agent
 * 
 * @author Alex Florescu
 * @team Services
 * @date 04/24/2011
 */
 
  
#region include
include_once 'header.php';
#endregion include
 
$skill = $_POST['skill'];
$agent = $_POST['agent'];
//$skill="testSkill";
//$agent=1;
	//execute statement
	$sql = "DELETE FROM woker_skill WHERE skill='$skill' AND worker_id=$agent";
	$affectedRows = $db->update($sql);
	//affected rows should be exactly 1, otherwise report problem
	echo '<affectedRows>'.$affectedRows."</affectedRows>\n";  
?>