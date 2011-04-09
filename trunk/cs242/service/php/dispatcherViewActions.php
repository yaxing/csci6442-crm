<?php

/**
 * Back-end customer ticket creation
 * 
 * @author Alex Florescu
 * @team Services
 * @date 04/02/2011
 */
 
  
#region include
include_once 'header.php';
#endregion include
 
	//execute statement
	$sql = "SELECT * FROM action;";

	$db->select($sql);
	$result = $db->fetchIndexArray();
 
 ?>