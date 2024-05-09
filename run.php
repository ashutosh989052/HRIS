<?php
	$to_email= "ashutoshkalyankar06@gmail.com";
	$subject= "Simple Email Test Using PHP";
	$body = "Hi, I am  ADNAN  I send this email to you for testing the email functionality using PHP";
	$headers = "From: sayyadarman113@gmail.com";
	if(mail($to_email, $subject, $body, $headers)){
		echo "Email successfully send to the $to_email";
	}
	else
	{
		echo "Email sending fail due to the some issue occured";
	}
?>
