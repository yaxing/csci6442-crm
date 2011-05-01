<?php

/**
 * Assigns a skill to an agent
 * 
 * @author Alex Florescu
 * @edited Nupur Kapoor
 * @team Services
 * @date 04/25/2011
 */
 
  
#region include
include_once 'header.php';
#endregion include
 
$skill = $_POST['skill'];
$agent_id = $_POST['agent_id'];

//$skill="testSkill";
//$agent_id=1;

        //execute statement
        $sql = "INSERT INTO agent_skill VALUES ('$skill', $agent_id)";
        //echo $sql; 
        $affectedRows = $db->update($sql);
        //affected rows should be exactly 1, otherwise report problem
        echo '<affectedRows>'.$affectedRows."</affectedRows>\n";  
?>