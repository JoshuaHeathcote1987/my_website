<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {

    $senders_address    = $_SESSION['user']['email'];
    $senders_name       = $_SESSION['user']['name'];

    $recipients_address = 'joshuaheathcote1987@gmail.com';
    $recipients_name    = 'CoteHeath';

    $subject            = 'Website - ' . $_SESSION['user']['name'];
    $body               = $form_info;
    $altbody            = strip_tags($body);

    //Server settings
    $mail->SMTPDebug    = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host         = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth     = true;                               // Enable SMTP authentication
    $mail->Username     = 'joshuaheathcote1987@gmail.com';                 // SMTP username
    $mail->Password     = 'Teamfortress1';                           // SMTP password
    $mail->SMTPSecure   = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($senders_address, $senders_name);
    $mail->addAddress($recipients_address, $recipients_name);     // Add a recipient



    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject      = $subject;
    $mail->Body         = $_SESSION['user']['email'] . " " . $body;
    $mail->AltBody      = $altbody;

    $mail->send();
    echo '<h1>Message has been sent</h1>';
} catch (Exception $e) {
    echo '<h2>Message could not be sent. Mailer Error: </h2>', $mail->ErrorInfo;
}