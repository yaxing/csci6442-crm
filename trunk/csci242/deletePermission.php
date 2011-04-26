<?php

/**
 * Delete permission from database
 * 
 * @author Alex Florescu
 * @team Services
 * @date 04/02/2011
 */
 
  
#region include
include_once 'header.php';
#endregion include
 
// variables from post 
$permission_name=$_POST['permission_name'];

//$permission_name="Test2";

if(Permission::delete($permission_name)){
	$affectedRows=1;
} else {
  $affectedRows=0;
}
	echo '<affectedRows>'.$affectedRows."<affectedRows>\n";
 
?>