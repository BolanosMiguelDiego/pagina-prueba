<?php

    $destinatario = 'diegoiki20@gmail.com';

    $nombre = $_POST['nombre'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];
    $email = $_POST['email'];

    $header = "Enviado desde la pagina de diego prueba";
    $mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

    mail($destinatario, $asunto, $mensajeCompleto, $header);
    echo "<script>alert('congreso enviado existosamente')</script>";
    echo "<script> setTimeout(\"location.href='index.php'\"),1000</script>";

?>