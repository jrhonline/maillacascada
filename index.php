<?php
// Dirección de correo electrónico del destinatario
$to = 'xjosuerafaelx@gmail.com';

// Asunto del mensaje
$subject = 'Correo de prueba';

// Cuerpo del mensaje
$message = 'Hola, este es un mensaje de prueba.';

// Cabeceras adicionales
$headers = 'From: josue.hernandez@lacascada.com.sv' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

// Enviar el correo electrónico
mail($to, $subject, $message, $headers, $parameters);
?>
