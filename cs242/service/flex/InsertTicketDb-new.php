<?php
	include_once '../../config.php';
	// *** CONNECT TO DATABASE ** 

	$description=$_POST['description']; 
	$date=$_POST['date']; 
	$applicant=$_POST['customerID']; 
	$summary='..';

	// *** INSERT QUERY EXAMPLE FOR TICKET *** 	

	
	$parent='0';
	$location='Bucharest';
	$priority='top';

	$sql = 'INSERT INTO '.$database.'.Ticket VALUES (null, "'.$description.'", "'.$summary.'", "'.$date.'", "'.$parent.'", "'.$applicant.'", "'.$location.'", "'.$priority.'");';
	
	$db = new Database();
	$result = $db->insert($sql);
	
	print "New Ticket Created \n"; 
	echo $result;
	
?>