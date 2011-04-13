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


//$permission_name="Test512";
//$description="This is a test";
//$available_to='No_One';

   $sql = "INSERT INTO permission VALUES ('$permission_name', '$description', '$available_to')";
   $affectedRows=$db->update($sql);
   echo '<affectedRows>'.$affectedRows."</affectedRows>\n";
?>