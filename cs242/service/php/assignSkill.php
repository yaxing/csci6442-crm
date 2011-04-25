<?php

/**
 * Assigns a skill to an agent
 * 
 * @author Alex Florescu
 * @team Services
 * @date 04/02/2011
 */
 
  
#region include
include_once 'header.php';
#endregion include
 
$skill = $_POST['skill'];
$agent = $_POST['agent'];
//$skill="testSkill";
//$agent=1;
	//execute statement
	$sql = "INSERT INTO woker_skill VALUES ('$skill', $agent)";
	//echo $sql; 
	$affectedRows = $db->update($sql);
	//affected rows should be exactly 1, otherwise report problem
	echo '<affectedRows>'.$affectedRows."</affectedRows>\n";  
?>