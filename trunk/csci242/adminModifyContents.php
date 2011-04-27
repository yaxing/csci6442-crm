<?php
/**
 * Create Service
 *
 * @author Diptanu Das
 * @team SALES
 * @date 04/18/2011
 */

#region include
//include_once '..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'config.php'; 
include_once 'Database.class.php';
//include_once '../../config.php';
#endregion include

$db = new Database();
$db_name = "175192_CRM_Test";
//SET UP VARIABLES
// contents
$type_of_content = $_POST["type_of_content"];
echo $location_type;
$selected_contents = $_POST["selected_contents"]; 
echo $selected_contents;


// prepare the sql statements
//contents
	$sql = "UPDATE contents SET contents='$type_of_content' WHERE contents='$selected_contents';"; 
		
	echo $sql;
    $affectedRows = $db->update($sql);
	echo $affectedRows;

//echo $sql_account ."\n<br>";


?>