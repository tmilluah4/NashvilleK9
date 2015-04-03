<?php
require 'vendor/autoload.php';
 

 require 'vendor/autoload.php';
$sendgrid = new SendGrid('app35497125@heroku.com', '62osfefm');

$message = new SendGrid\Email();
$message->addTo('rtoddmiller3@gmail.com')->
          setFrom('rtoddmiller3@gmail.com')->
          setSubject('Subject goes here')->
          setText('Hello World!')->
          setHtml('<strong>Hello World!</strong>');
$response = $sendgrid->send($message);
?>

 