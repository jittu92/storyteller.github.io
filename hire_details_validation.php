<?php
// Check for empty fields
if(empty($_POST['hire_name'])||empty($_POST['hire_phone'])||empty($_POST['hire_email'])||empty($_POST['hire_address'])||empty($_POST['hire_date']))
   {
	echo "No arguments Provided!";
	return false;
   }
	
else
{
	$client_name = $_POST['hire_name'];
	$client_phone = $_POST['hire_phone'];
	$client_email = $_POST['hire_email'];
	$client_address = $_POST['hire_address'];
	$client_date = $_POST['hire_date'];
	$client_budget= $_POST['hire_price'];
	$client_message = $_POST['hire_message'];

	if(isset($_POST['hire_occasion']))
	{
		$client_occasion= $_POST['hire_occasion'];
	}
	if(isset($_POST['hire_party']))
	{
		$client_party= $_POST['hire_party'];
	}
	if(isset($_POST['hire_package']))
	{
		$client_package= $_POST['hire_package'];
	}
	// Create the email and send the message
	$to = 'admin@thestoryteller.co.in'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
	$email_subject = "Email Received From: $client_name";
	if($client_budget==NULL)
	{
		$email_body = "\nName: $client_name\nPhone: $client_phone\nEmail id: $client_email\nAddress: $client_address\nEvent Date: $client_date\nOccasion: $client_occasion\nClient Side: $client_party\nPackage: $client_package\nMessage: $client_message";    		
	}
	else
	{
		$email_body = "\nName: $client_name\nPhone: $client_phone\nEmail id: $client_email\nAddress: $client_address\nEvent Date: $client_date\nOccasion: $client_occasion\nClient Side: $client_party\nBudget: $client_budget\nMessage: $client_message";	
	}
	$headers = "From: $client_email\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
	$headers .= "Reply-To: $client_email";	
	mail($to,$email_subject,$email_body,$headers);
	header('Location: http://www.thestoryteller.co.in');
	return true;		
}	
?>