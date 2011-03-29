<?php
	
	// *** CONNECT TO DATABASE ** 

	$description=$_POST['description']; 
	$date=$_POST['date']; 
	$applicant=$_POST['customerID']; 
	//$description="lalala";
	//$date="curdate()";
	//$applicant='1';
	$summary='..';
	$username = '18902_crmtest';
	$pass='crmtestcsci242';
	$database='18902_CRM_Test';

	$link=mysql_connect('209.237.150.136', $username, $pass) or 
      	die("Error connecting to the database server:".mysql_error().'<br>\n');

	mysql_select_db($database) or
  	die('Error selecting the database:'.mysql_error().'<br>\n');

	
	// *** INSERT QUERY EXAMPLE FOR TICKET *** 	

	
	$parent='0';
	$location='Bucharest';
	$priority='top';

	$sql = 'INSERT INTO '.$database.'.Ticket VALUES (null, "'.$description.'", "'.$summary.'", "'.$date.'", "'.$parent.'", "'.$applicant.'", "'.$location.'", "'.$priority.'");';
	
	$result=mysql_query($sql);
	
	print "New Ticket Created \n"; 
	echo $result;
	
?>