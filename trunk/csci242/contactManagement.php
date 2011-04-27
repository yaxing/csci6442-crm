<?php
/**
 * Create Service
 * 
 * @author Sharvani Tota
 * @team SALES
 * @date 04/16/2011
 */

#region include
//include_once '..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'config.php'; 
include_once 'Database.class.php';
//include_once '../../config.php';
#endregion include

$db = new Database();
$db_name = "175192_CRM_Test";
//SET UP VARIABLES
// Service_Name
$contact_id= $_POST["contactid"];
//$contact_id = "1";

// prepare the sql statements
//Service
$sql_contact = "SELECT first_name,last_name FROM contact WHERE contact_id=".$contact_id.";";
$db->select($sql_contact);
$result_contact = $db->fetchIndexArray();
var_dump($result_contact);
$first_name = $result_contact[0][0];
$last_name = $result_contact[0][1];
echo $first_name;
echo $last_name;
echo '<firstname>'.$first_name."</firstname>\n"; 
echo '<lastname>'.$last_name."</lastname>\n";

?>