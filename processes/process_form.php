<?php
if( $_POST["submit"] ) 
{					
		
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$message = $_POST['message'];
		
	$valid = true;
	if( !ereg('^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$', $email ) )
	$valid = false;

	//if invalid send back to contact form with error flag
	if( $valid == false ) 
	{
		header( "Location:../oops.html" );
		die( "invalid" );
	}
	else
	{
	mail( "liam@special-risks.co.uk", "Trek4Care Contact Form Received", "From: $name\nEmail Address: $email\nPhone Number: $number\nMessage: $message", "FROM:webmaster@trek4care.co.uk" );
		
	mail( "vikburton@live.co.uk", "Trek4Care Contact Form Received", "From: $name\nEmail Address: $email\nPhone Number: $number\nMessage: $message", "FROM:webmaster@trek4care.co.uk" );
	
	mail( "$email", "Trek4Care Contact Form", "Hi $name, \n Thank you for getting in touch, we will get back to you just as soon as we are able to.", "FROM:webmaster@trek4care.co.uk" );

	header( "Location:../thankyou_form.html" );
	}
}	
?>