<?php

/**
 * Add a new skill
 * 
 * @author Alex Florescu
 * @team Services
 * @date 04/02/2011
 */
 
  
#region include
include_once 'header.php';
#endregion include
 
$skill = $_POST['skill'];
//$skill="test2";
	//execute statement
	$sql = "INSERT INTO skill VALUES ('$skill')";
	//echo $sql; 
	$affectedRows = $db->update($sql);
	//affected rows should be exactly 1, otherwise report problem
	echo '<affectedRows>'.$affectedRows."</affectedRows>\n";  
?>