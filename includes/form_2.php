<?php	
	if(empty($_POST['name2']) && strlen($_POST['name2']) == 0 || empty($_POST['email2']) && strlen($_POST['email2']) == 0)
	{
		return false;
	}
	
	$name2 = $_POST['name2'];
	$email2 = $_POST['email2'];
	$note2 = $_POST['note2'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from lode.";
	$email_body = "You have received a new message. \n\n".
				  "Name2: $name2 \nEmail2: $email2 \nNote2: $note2 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: DoNotReply@yoursite.com";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>