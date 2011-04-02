<?php
include_once '../../config.php';

/*
 * assign permission
 */
if(Permission::assign("dispatcher", "delete ticket")){
	echo "Assign 'delete ticket' to 'dispatcher'</br>";
}
else{
	echo "assign failed!</br>";
}

/*
 * check permission
 */
echo "Checking permission: 'dispatcher'-'delete ticket'</br>";
if(Permission::check("dispatcher", "delete ticket")){
	echo "true</br>";
}
else{
	echo "false</br>";
}

/*
 * delete permission
 */
if(Permission::delete("dispatcher", "delete ticket")){
	echo "delete permission: 'dispathcer'-'delete ticket'</br>";
}

echo "Checking permission: 'dispatcher'-'delete ticket'</br>";
if(Permission::check("dispatcher", "delete ticket")){
	echo "true";
}
else{
	echo "false";
}

?>