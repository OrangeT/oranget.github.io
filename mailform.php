<?php
  $email = $_POST['email'];
  $name = $_POST['name'];
  $phonenumber = $_POST['phonenumber'];
  $message = $_POST['message'];
  $robot = $_POST['url'];

  if (strtolower($robot) == 'no')
  {
    $body = "Email: " . $email . "\n"
            . "Name: " . $name . "\n"
            . "Phone Number: " . $phonenumber . "\n"
            . "Message: \n" . $message;

    mail( "hello@orangetentacle.co.uk", "Website Contact",
            $body, "From: hello@orangetentacle.co.uk" );

    header( "Location: http://www.orangetentacle.co.uk/thanks.html" );
  } else {
    header( "Location: http://www.orangetentacle.co.uk/robot.html" );
  }
?>
