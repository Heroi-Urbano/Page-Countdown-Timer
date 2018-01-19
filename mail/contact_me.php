<?php
// Check for empty fields
	
$email_address = $_POST['email'];
	
	// Create the email and send the message
	$to = "contato@heroiurbano.com"; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
	$email_subject = "Heroi Urbano - Cadastro de e-mail";
	$email_body = "Temos mais um e-mail cadastrado na nossa newsletters.\n\n"."Email: $email_address\n\n";
	$headers = "From: contato@heroiurbano.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
	mail($to,$email_subject,$email_body,$headers);

return true;			
?>