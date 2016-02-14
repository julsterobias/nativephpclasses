<?php
// Pear Mail Library
require_once "inc/Mail-1.2.0/Mail.php";

$to = 'to@mail.com';

$headers2 = array(
    'From' => 'from@mail.com',
    'To' => 'to@mail.com',
    'Subject' => 'This is the subject'
);

$message = "Sample Message";


$smtp = Mail::factory('smtp', array(
        'host' => 'mail.host.com',
        'port' => '25',
        'auth' => true,
        'username' => 'username@host.com',
        'password' => 'password123!'
));


$mail = $smtp->send($to, $headers, $body);


if (PEAR::isError($mail)) {
    echo('<div class="villerror">' . $mail->getMessage() . '</div>');
} else {
    header('location:success.php?ref='.$lastid);
}

?>