<?php

$name = $_POST["name"];
$lastname = $_POST["lastname"];
$tel = $_POST["tel"];
$email = $_POST["email"];
$direction = $_POST["direction"];
$namehome = $_POST["namehome"];
$city = $_POST["city"];
$cp = $_POST["cp"];
$country = $_POST["country"];
$gender = $_POST["gender"];
$day = $_POST["day"];
$month = $_POST["month"];
$year = $_POST["year"];
$dresssize = $_POST["dresssize"];
$height = $_POST["height"];
$weight = $_POST["weight"];
$eyes = $_POST["eyes"];
$hair = $_POST["hair"];
$shoesize = $_POST["shoesize"];
$instagram = $_POST["instagram"];
$facebook = $_POST["facebook"];
$twitter = $_POST["twitter"];
$youtube = $_POST["youtube"];
$website = $_POST["website"];
$spotlight = $_POST["spotlight"];
$image_1 = $_POST["image_1"];
$image_2 = $_POST["image_2"];
$image_3 = $_POST["image_3"];
$image_4 = $_POST["image_4"];
$message = $_POST["message"];

$body = "";
$body .= "Nombre: ";
$body .= $name.'-'.$lastname;
$body .= "<br>";
$body .= "Teléfono: ";
$body .= $tel;
$body .= "<br>";
$body .= "E-mail: ";
$body .= $email;
$body .= "<br>";
$body .= "Dirección: ";
$body .= $direction;
$body .= "<br>";
$body .= "Nombre y número de la casa: ";
$body .= $namehome;
$body .= "<br>";
$body .= "Ciudad: ";
$body .= $city;
$body .= "<br>";
$body .= "Código Postal: ";
$body .= $cp;
$body .= "<br>";
$body .= "País: ";
$body .= $country;
$body .= "<br>";
$body .= "Género: ";
$body .= $gender;
$body .= "<br>";
$body .= "Fecha de nacimiento: ";
$body .= $day.'/'.$month.'/'.$year;
$body .= "<br>";
$body .= "Tamaño del vestido / Tamaño del traje: ";
$body .= $dresssize;
$body .= "<br>";
$body .= "Altura: ";
$body .= $height;
$body .= "<br>";
$body .= "Peso: ";
$body .= $weight;
$body .= "<br>";
$body .= "Color de ojos: ";
$body .= $eyes;
$body .= "<br>";
$body .= "Color de cabello: ";
$body .= $hair;
$body .= "<br>";
$body .= "Tamaño del calzado: ";
$body .= $shoesize;
$body .= "<br>";
$body .= "Instagram: ";
$body .= $instagram;
$body .= "<br>";
$body .= "Facebook: ";
$body .= $facebook;
$body .= "<br>";
$body .= "Twitter: ";
$body .= $twitter;
$body .= "<br>";
$body .= "YouTube: ";
$body .= $youtube;
$body .= "<br>";
$body .= "Sitio web: ";
$body .= $website;
$body .= "<br>";
$body .= "¿Miembro de Casting Networks: ";
$body .= $spotlight;
$body .= "<br>";
$body .= "Imagen 1: ";
$body .= $image_1;
$body .= "<br>";
$body .= "Imagen 2: ";
$body .= $image_2;
$body .= "<br>";
$body .= "Imagen 3: ";
$body .= $image_3;
$body .= "<br>";
$body .= "Imagen 4: ";
$body .= $image_4;
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
    $mail->Host       = 'smtp.hostinger.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'hola@luisweb.me';                     // SMTP username
    $mail->Password   = 'Zorro-619619';                               // SMTP password
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('hola@luisweb.me', $name);
    $mail->addAddress('hola@luisweb.me');     // Para mí again :v

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Mens Academy & Agency - Únete';
    $mail->Body    = $body;
    $mail->CharSet = 'UTF-8';
    $mail->send();
    echo 'success'  ;
} catch (Exception $e) {
    echo "El mensaje no se pudo enviar. Mailer Error: {$mail->ErrorInfo}";
}