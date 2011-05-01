<?php

/**
 * Edit any properties of a ticket
 * 
 * @team Services
 * @date 05/01/2011
 */
 
  
#region include
include_once 'header.php';
include_once 'emailFunction.php';
#endregion include
	
	/*
	// test values
		$_POST['ticket_id']=2;	
 		$_POST['ticket_summary']='test';
		$_POST['ticket_status']='Closed';
   		$_POST['contact_id']=1;
	*/

	// variables always set
 	$ticket_id=$_POST['ticket_id'];
	$contact_id=$_POST['contact_id'];
	
	// grab the rest of the columns
	$columns = Array('customer_priority','ticket_description','ticket_summary','ticket_status');
	
	//build the query
	$sql = 'UPDATE ticket SET ';

	foreach ($columns as $i) {
	    if (isset($_POST[$i])) 
	       $sql.="$i='$_POST[$i]',";
	}	
	
	//strip last comma
	$sql = substr($sql,0,-1);	
	
	//finish query
	$sql.=" WHERE ticket_id=$ticket_id\n";
	//echo $sql;
	
	$affectedRows = $db->update($sql);
	//affected rows should be exactly 1, otherwise report problem
	echo '<affectedRows>'.$affectedRows."<affectedRows>\n"; 
		
	// send email if ticket is closed
	if ($affectedRows==1 && isset($_POST['ticket_status']) && $_POST['ticket_status']=='Closed') {
	   $sql="SELECT value from contact_communication WHERE contact_id=$contact_id AND type_of_communication='email'";
	   $db->select($sql);
	   $result = $db->fetchArray();
	   $applicant_email=$result[0][0];
	   email($applicant_email,"Ticket has been closed","Ticket $ticket_id has been closed.");
	}	
 
 ?>