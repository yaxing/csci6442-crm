<?php
include_once 'config.php';

//if(Permission::check('admin', 'permission manage')){
//	echo 1;
//	die();
//}
//echo 0;
//die();

/*
 * add new permission
 */

if(Permission::add("delete_ticket", "able to delete tickets")){
	echo "Added new permission 'delete_ticket'</br>";
}

/*
 * assign permission
 */
if(Permission::assign("dispatcher", "delete_ticket")){
	echo "Assign 'delete ticket' to 'dispatcher'</br>";
}
else{
	echo "assign failed!</br>";
}

/*
 * check permission
 */
echo "Checking permission: 'dispatcher'-'delete_ticket'</br>";
if(Permission::check("dispatcher", "delete_ticket")){
	echo "true</br>";
}
else{
	echo "false</br>";
}

/*
 * unassign permission
 */
if(Permission::unassign("dispatcher", "delete_ticket")){
	echo "Unassigned permission: 'dispathcer'-'delete_ticket'</br>";
}

echo "Checking permission: 'dispatcher'-'delete_ticket'</br>";
if(Permission::check("dispatcher", "delete_ticket")){
	echo "true";
}
else{
	echo "false";
}

/*
 * delete permission
 */
echo "</br>Deleting permission 'delete_ticket'</br>";
if(Permission::delete("delete_ticket")){
	echo "Deleted permission 'delete_ticket'";
}

?>