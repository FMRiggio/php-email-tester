<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';


$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$mail = new PHPMailer(true);


try {
	$mail->SMTPDebug = SMTP::DEBUG_SERVER;
	$mail->isSMTP();
	$mail->Host       = $_ENV['EMAIL_HOST'];
	$mail->SMTPAuth   = TRUE;
	$mail->Username   = $_ENV['EMAIL_USERNAME'];
	$mail->Password   = $_ENV['EMAIL_PASSWORD'];
	$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
	$mail->Port       = $_ENV['EMAIL_PORT'];

	//Recipients
	$mail->setFrom( $_ENV['EMAIL_FROM_ADDRESS'], $_ENV['EMAIL_FROM_NAME'] );
	$mail->addAddress( $_ENV['EMAIL_TO_ADDRESS'], $_ENV['EMAIL_TO_NAME'] );

	//Content
	$mail->isHTML(true);
	$mail->Subject = 'Email Test';
	$mail->Body    = file_get_contents(__DIR__ . '/email.html');
	$mail->send();

	echo 'Message has been sent';

} catch (Exception $e) {

	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

}

