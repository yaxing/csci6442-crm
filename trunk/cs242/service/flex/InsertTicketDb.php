<?php
	
	// *** CONNECT TO DATABASE ** 

	$description=$_POST['description']; 
	$date=$_POST['date']; 
	$applicant=$_POST['customerID']; 
	$summary='..';
	$username = 'root';
	$pass='root';
	$database='18902_CRM_Prod';

	$link=mysql_connect('localhost', $username, $pass) or 
      	die("Error connecting to the database server:".mysql_error().'<br>\n');

	mysql_select_db($database) or
  	die('Error selecting the database:'.mysql_error().'<br>\n');

	
	// *** INSERT QUERY EXAMPLE FOR TICKET *** 	

	
	$parent='0';
	$location='Bucharest';
	$priority='top';

	$sql = 'INSERT INTO '.$database.'.Ticket VALUES ("", "'.$description.'", "'.$summary.'", "'.$date.'", "'.$parent.'", "'.$applicant.'", "'.$location.'", "'.$priority.'");';
	
	$result=mysql_query($sql);
	
	print "Insert Complete";
	
?>