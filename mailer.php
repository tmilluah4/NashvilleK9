<?php
require 'vendor/autoload.php';
Dotenv::load(__DIR__);
$user = 'app35497125@heroku.com'; // place SG username here
   $pass = 'Liam4444'; // place SG password here
$sendgrid_username = 'app35497125@heroku.com';
$sendgrid_password = 'Liam4444';
$to                = 'rtoddmiller3@gmail.com';

$sendgrid = new SendGrid($sendgrid_username, $sendgrid_password, array("turn_off_ssl_verification" => true));
$email    = new SendGrid\Email();
$email->addTo($to)->
       setFrom($to)->
       setSubject('Please Work')->
       setText('Owl are you doing?')->
       setHtml('Please work for the love')->
       addHeader('X-Sent-Using', 'SendGrid-API')->
       addHeader('X-Transport', 'web')->
       addAttachment('/gif.gif');

$response = $sendgrid->send($email);
var_dump($response);

 

 