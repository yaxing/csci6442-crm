<?php 
/**
 * Script header for all DB functionality for the services team
 * 
 * @author Alex Florescu
 * @team Services
 * @date 04/09/2011
 */

 
#region include
include_once '../../config.php';
#endregion include
		

	// prepare database variable
	$db = new Database();

	// *** THIS IS HOW TO USE THE COOKIE *** 	
	//$userId=$_COOKIE["basic"]["user_id"];
	$userId=4; // fake user id until integration

?>