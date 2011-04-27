<?php
/**
 * Create Contents
 *
 * @author Diptanu Das
 * @team SALES
 * @date 04/25/2011
 */

#region include
//include_once '..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'config.php';
include_once 'Database.class.php';
//include_once '../../config.php';
#endregion include

$db = new Database();
$db_name = "175192_CRM_Test";
//SET UP VARIABLES
// Contents
$type_of_content = $_POST["type_of_content"];
//$type_of_content = "Title";

//$location_type = 'aaa';

// prepare the sql statements
//Contents
$sql_type_of_content = "INSERT INTO ".$db_name.".contents VALUES ('".$type_of_content."');";
//echo $sql_location_type;
//die();
$db->insert($sql_type_of_content);
//echo $sql_account ."\n<br>";
echo $sql_type_of_content;

?>