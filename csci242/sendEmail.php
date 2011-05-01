<?php

/**
 * Sending email with info from form
 * 
 * @author Alex Florescu
 * @team Services
 * @date 04/02/2011
 */
 
  
#region include
include_once 'header.php';
#endregion include
 
 $to = $_POST['to'];
 $subject = $_POST['subject'];
 $body = $_POST['body'];
 $headers = "From: cs242@consultyicity.com\r\n" .
     "X-Mailer: php";

	 /*
	 $to="anothem@gmail.com";
	 $subject="testEmail";
	 $body="email is being tested\n";
	 */
	 
	 
//returns 1 for success, -1 for failure	 
 if (mail($to, $subject, $body, $headers)) {
   echo '<emailed>1</emailed>';
  } else {
   echo '<emailed>-1</emailed>';
  }
 ?>