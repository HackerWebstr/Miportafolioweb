<?php
$nombre = $_POST['w3lName'];
$mail = $_POST['w3lSender'];
$asunto = $_POST['w3lSubect'];
$mensaje = $_POST['w3lMessage'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Asunto: " . $_POST['w3lSubect'] . " \r\n";
$mensaje .= "Mensaje: " . $_POST['w3lMessage'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'contacto@itecnopor.com';
$asunto = 'Mensaje de mi sitio web';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");

?>