<?php

/**
 * Assign a permission to a role
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
$role=$_POST['role'];

//$permission_name="Test512";
//$role="dispatcher";

if(Permission::assign("$role", "$permission_name")) {
 $affectedRows=1; 
}
else{
 $affectedRows=0; 
}   
   echo '<affectedRows>'.$affectedRows."<affectedRows>\n";
 
?>