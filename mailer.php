<?php
// Pear Mail Library
require_once "inc/Mail-1.2.0/Mail.php";

$to = "to@mail.com";

$headers = array(
    'From' => 'from@mail.com',
    'To' => 'to@mail.com',
    'Subject' => 'This is the sample subject'
);

$message = "Your message goes here";

$smtp = Mail::factory('smtp', array(
        'host' => 'host.domain.com',
        'port' => '25',
        'auth' => true,
        'username' => 'username@mail.com',
        'password' => 'passwordhere'
));

$mail = $smtp->send($to, $headers, $message);

if (PEAR::isError($mail)) {
    echo('<div class="villerror">' . $mail->getMessage() . '</div>');
    die();
} 

?>