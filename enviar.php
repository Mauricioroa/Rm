<?php
    $destinatario="juanestebans991@gmail.com";
    $nombre=$_POST["nombre"];
    $email=$_POST["email"];
    $telefono=$_POST["telefono"];
    $mensaje=$_POST["nombre"];
    
    $header="Enviado desde la pagina de R music Escuela de musica";
    $mensajeCompleto= $mensaje . "\nAtentamente: " . $nombre;
    $telefonoCompleto= $telefono . "\nTelefono: " . $telefono; 

    mail($destinatario, $asunto, $mensajeCompleto, $header);
    echo "<script>alert('correo enviado exitosamente)</script>" ;
    echo "<script> setTimeout(\"location.href=index.html'\",1000)</script>";

?> 