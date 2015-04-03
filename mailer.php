<?php
	require 'vendor/autoload.php';
  
	$sendgrid = new SendGrid('app35497125@heroku.com', '62osfefm');

	$message = new SendGrid\Email();

	$name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

	$message->addTo('rtoddmiller3@gmail.com')->
          setFrom('rtoddmiller3@gmail.com')->
          setSubject('Contact Form Submission - Nashville K-9')->
          setText('Name: $name\n  Email: $email\n  Subject: $subject\n  $message')->
          setHtml('<strong>Name: $name\n</br>  Email: $email\n</br>  Subject: $subject\n</br>  $message</strong>');
	$response = $sendgrid->send($message);
?>

