<?php

/**
 * Add a new permission to the db
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
$description=$_POST['description'];
$available_to=$_POST['available_to'];
//$permission_name="TestPermission";

     if(Permission::add("$permission_name")) {  
       $affectedRows=1; 
     }
     else{
	$affectedRows=0; 
     }   

   echo '<affectedRows>'.$affectedRows."</affectedRows>\n";
?>