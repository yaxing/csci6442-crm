<?php
 $to = "anothem@gmail.com";
 $subject = "Hi!";
 $body = "Hi,\n\nHow are you?";
 $headers = "From: cs242@consultyicity.com\r\n" .
     "X-Mailer: php";
 if (mail($to, $subject, $body, $headers)) {
   echo("<p>Message sent!</p>");
  } else {
   echo("<p>Message delivery failed...</p>");
  }
 ?>