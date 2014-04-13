<?php
  $email = $_HEADER['email'];
  $name = $_HEADER['name'];
  $phonenumber = $_HEADER['phonenumber'];
  $message = $_HEADER['message'];

  $body = "Email: " . $email . "\n"
	  . "Name: " . $name . "\n"
	  . "Phone Number: " . $phonenumber . "\n"
	  . "Message: \n" . $message;

  mail( "hello@orangetentacle.co.uk", "Website Contact",
    $body, "From: $email" );

  header( "Location: http://www.orangetentacle.co.uk/thanks.html" );
?>
