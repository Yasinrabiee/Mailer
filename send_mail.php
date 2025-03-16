<?php 
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'].': '.$name;
	$message = $_POST['message'];

	// Email recipient
	$to = "???";

	$headers = "From:" . $email;

	mail($to, $subject, $message, $headers);
?>
