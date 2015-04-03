

<?php
  
	require 'vendor/autoload.php';
  
	$sendgrid = new SendGrid('app35497125@heroku.com', '62osfefm');

	$message = new SendGrid\Email();

	$name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
 

 print_r( $name ); 
 print_r( $email ); 
 print_r( $subject ); 
 

$message->addTo('rtoddmiller3@gmail.com')->
          setFrom('rtoddmiller3@gmail.com')->
          setSubject('Contact Form Submission')->
          setText('Name: $name\n  Email: $email\n  Subject: $subject\n   ')->
          setHtml('<strong>Name: $name \n  Email: $email \n Subject: $subject \n   </strong>');
$response = $sendgrid->send($message);
?>