<?php
// Check for empty fields
if(empty($_POST['user_name'])||empty($_POST['user_phone'])||empty($_POST['user_email'])||empty($_POST['user_message']))
   {
	echo "No arguments Provided!";
	return false;
   }
	
else
{
	$user_name = $_POST['user_name'];
	$user_phone = $_POST['user_phone'];
	$user_email = $_POST['user_email'];
	$user_message = $_POST['user_message'];
	
	// Create the email and send the message
	$to = 'admin@thestoryteller.co.in'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
	$email_subject = "Email Received From:  $user_name";
	$email_body = "\nName: $user_name\nPhone: $user_phone\nEmail id: $user_email\nMessage: $user_message";
	$headers = "From: $user_email\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
	$headers .= "Reply-To: $user_email";	
	mail($to,$email_subject,$email_body,$headers);
	header('Location: http://www.thestoryteller.co.in/contact.html');
	return true;		
}	
?>