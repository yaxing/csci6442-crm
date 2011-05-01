<?php

/**
 * Email function
 * 
 * @author Alex Florescu
 * @team Services
 * @date 04/29/2011
 */
 
function email($to, $subject, $body) { 
 	  $headers = "From: cs242-do-not-reply@consultcity.com\r\n"."X-Mailer: php";	 
	  //returns 1 for success, -1 for failure	 
 	  if (mail($to, $subject, $body, $headers)) {
   	     echo '<emailed>1</emailed>';
  	  } else {
   	    echo '<emailed>-1</emailed>';
  	  }
}
 
?>