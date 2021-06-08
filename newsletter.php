<?php
$mail = $_POST['email'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $mail . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'viajarengrupoweb@gmail.com';
$asunto = 'Me suscribi a tu newsletter, quiero info';

mail($para, $asunto, utf8_decode($mail), $header);

header("Location:index.html");
?>