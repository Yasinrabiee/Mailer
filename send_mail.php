<?php 
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'].': '.$name;
	$message = $_POST['message'];
	$to = "hlww6303@gmail.com";

	$headers = "From:" . $email;

	mail($to, $subject, $message, $headers);
?>