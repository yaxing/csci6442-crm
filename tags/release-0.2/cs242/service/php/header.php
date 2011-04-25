<?php 
/**
 * Script header for all DB functionality for the services team
 * 
 * @author Alex Florescu
 * @team Services
 * @date 04/09/2011
 */

 
#region include
//include_once '../../config.php';
include_once 'Database.class.php';
#endregion include
		

	// prepare database variable
	$db = new Database();

	// Grab data from cookie
	$userId= $_COOKIE["basic"]["user_id"];
	$userRole= $_COOKIE["basic"]["user_role"];
	
	//$userId=4; // fake user id until integration
?>