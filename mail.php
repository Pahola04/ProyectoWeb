<?php
  if(!empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['email']) && !empty($_POST['telefono']) && !empty($_POST['mensaje'])){
    
    $email_to = "grupo3castano123@gmail.com";
    $email_subject = "Mensaje entrante de un usuario";
    $email_message = "Detalles del formulario de contacto:\n\n";
    $email_message .= "Nombre: " . $_POST['nombre'] . "\n";
    $email_message .= "Apellido: " . $_POST['apellido'] . "\n";
    $email_message .= "E-mail: " . $_POST['email'] . "\n";
    $email_message .= "Telefono: " . $_POST['telefono'] . "\n";
    $email_message .= "Comentarios: " . $_POST['mensaje'] . "\n\n";


 

    // Ahora se envía el e-mail usando la función mail() de PHP
     $mail = $_POST['email'];
    $header = 'From: ' . $mail . " \r\n";
    $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text/plain";

    if(mail($email_to, $email_subject, $email_message,$header)){
        echo 'Enviado Correctamente';
    }else{
        echo 'No se pudo enviar el correo';
    }

    
  }
?>











