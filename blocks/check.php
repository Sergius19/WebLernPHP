<?php
	//print_r($_POST);
	$email = $_POST['email'];
	$message = $_POST['message'];

	$error = '';
	if(trim($email) == '')
		$error = 'Input your email';
	else if(trim($message) == '')
		$error = 'Input text of message';
	else if(strlen($message) < 10)
		$error = 'Message must have only 10 symbols';

	if($error != '') {
		echo $error;
		exit;
	}
	$subject = "=?utf-8?B?".base64_encode("Text message")."?=";
	$headers = "Form: $email\r\nReply-to: $email\r\nContent-type:
	text/html; charset=utf-8\r\n";

	mail('admin@site.com', $subject, $message, $headers);

	header('Location: /about.php');

?>
