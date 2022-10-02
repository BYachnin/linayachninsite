<?php	
	if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message']))
	{
		return false;
	}
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	
	$to = 'linayachnin@gmail.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from lina_site.";
	$email_body = "You have received a new message. \n\n".
				  "Name: $name \nEmail: $email \nMessage: $message \n";
	$headers = "From: lina@linayachnin.com\n";
	$headers .= "Reply-To: $email";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>
