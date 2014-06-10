<?php
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$message = $_POST['message'];

if( !ereg('^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$', $email))
	{	
	$valid = false;
	}
	
	if( $valid == false ) 
	{
	header("Location:../contact_us.html?error=1" );
	}
	else
	{
	
	mail( "liam@special-risks.co.uk", "Trek4Care Contact Form Received", "From: $name\nEmail Address: $email\nPhone Number: $number\nMessage: $message", "FROM:webmaster@trek4care.co.uk" );
		
	mail( "vikburton@live.co.uk", "Trek4Care Contact Form Received", "From: $name\nEmail Address: $email\nPhone Number: $number\nMessage: $message", "FROM:webmaster@trek4care.co.uk" );
	
	mail( "$email", "Trek4Care Contact Form", "<p>Hi $email</p> <p>Thank you for getting in touch, we will get back to you just as soon as we are able to.</p>", "FROM:webmaster@trek4care.co.uk" );

	header( "Location:thankyou.html" );
	}
?>