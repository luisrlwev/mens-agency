<?php

$name = $_POST["name"];
$tel = $_POST["tel"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$body = "";
$body .= "Nombre: ";
$body .= $name;
$body .= "<br>";
$body .= "Teléfono: ";
$body .= $tel;
$body .= "<br>";
$body .= "E-mail: ";
$body .= $email;
$body .= "<br>";
$body .= "Asunto: ";
$body .= $subject;
$body .= "<br>";
$body .= "Mensaje: ";
$body .= $message;
$body .= "<br>";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.ipower.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'info@mensagency.com';                     // SMTP username
    $mail->Password   = 'Mensagency-2021.';                               // SMTP password
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('info@mensagency.com', $name);
    $mail->addAddress('info@mensagency.com');     // Para Jensen
    $mail->addCC('info@cfgpr.com');     // Para mi Carlos
    $mail->addBCC('hola@luisweb.me');     // Para mi correo

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Mens Academy & Agency - Contacto';
    $mail->Body    = $body;
    $mail->CharSet = 'UTF-8';
    $mail->send();
    echo 'success'  ;
} catch (Exception $e) {
    echo "El mensaje no se pudo enviar. Mailer Error: {$mail->ErrorInfo}";
}