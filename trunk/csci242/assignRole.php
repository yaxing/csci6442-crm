<?php

/**
 * Assigns a role to an agent
 * 
 * @author Alex Florescu
 * @edited Nupur Kapoor
 * @team Services
 * @date 04/02/2011
 */
 
  
#region include
include_once 'header.php';
#endregion include
 
$role = $_POST['role'];
$agent_id = $_POST['agent_id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
//$role="testRole";
//$agent=1;
        //execute statement
        $sql = "INSERT INTO role VALUES ('$role', $agent_id, $first_name, $last_name)";
        //echo $sql; 
        $affectedRows = $db->update($sql);
        //affected rows should be exactly 1, otherwise report problem
        echo '<affectedRows>'.$affectedRows."</affectedRows>\n";  
?>