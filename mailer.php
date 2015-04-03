

<?php
  
	require 'vendor/autoload.php';
  
	$sendgrid = new SendGrid('app35497125@heroku.com', '62osfefm');

	$message = new SendGrid\Email();

	$name = $_POST['name'];
	$phone = $_POST['phone'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
	$notecontent = $_POST['notecontent'];
 

$message->addTo('rtoddmiller3@gmail.com')->
          setFrom('rtoddmiller3@gmail.com')->
          setSubject('Contact Form Submission')->
          setText('Name:'   $name  '\n  Email:'  $email '\n  Subject:' $subject '\n Message:'   $notecontent )->
          setHtml('<strong> Name:'   $name  '\n  Email:'  $email '\n  Subject:' $subject '\n Message:'   $notecontent   '  </strong>');
$response = $sendgrid->send($message);
?>