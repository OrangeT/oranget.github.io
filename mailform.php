<?php
  $email = $_POST['email'];
  $name = $_POST['name'];
  $phonenumber = $_POST['phonenumber'];
  $message = $_POST['message'];

  $body = "Email: " . $email . "\n"
	  . "Name: " . $name . "\n"
	  . "Phone Number: " . $phonenumber . "\n"
	  . "Message: \n" . $message;

  mail( "hello@orangetentacle.co.uk", "Website Contact",
    $body, "From: website@orangetentacle.co.uk" );

  header( "Location: http://www.orangetentacle.co.uk/thanks.html" );
?>
