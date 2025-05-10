<?php
$spam = htmlspecialchars($_POST['spam']);
if ($spam == 4) {
    $nombre = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $empresa = htmlspecialchars($_POST['empresa']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $mensaje = htmlspecialchars($_POST['message']);
    session_start();
    $_SESSION["nombre"] = $nombre;
    $_SESSION["email"] = $email;
    $_SESSION["empresa"] = $empresa;
    $_SESSION["telefono"] = $telefono;
    $_SESSION["mensaje"] = $mensaje;
    //$para = 'rich1004@gmail.com' . ', ' . $email;
    $para = 'contacto@solistopografia.com';
    //$para = 'antoniodiaztobaruela@gmail.com';
    $titulo = 'MENSAJE solistopografia.com: ' . $nombre;
    $msjCorreo = "<strong>Nombre:</strong> $nombre<br><strong>E-Mail:</strong> $email<br><strong>Empresa:</strong> $empresa<br><strong>Telefono:</strong> $telefono<br><strong>Mensaje:</strong><br>$mensaje";
    // Para enviar un correo HTML, debe establecerse la cabecera Content-type
    $cabeceras = 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $cabeceras .= 'From: ' . 'no-reply@solistopografia.com';
    // Cabeceras adicionales
    //$cabeceras .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
    //$cabeceras .= 'From: Recordatorio <cumples@example.com>' . "\r\n";
    //$cabeceras .= 'Cc: birthdayarchive@example.com' . "\r\n";
    //$cabeceras .= 'Bcc: birthdaycheck@example.com' . "\r\n";

	echo "<script>console.log('PHP: " . addslashes($para) . "');</script>";
	echo "<script>console.log('PHP: " . addslashes($titulo) . "');</script>";
	echo "<script>console.log('PHP: " . addslashes($msjCorreo) . "');</script>";
	echo "<script>console.log('PHP: " . addslashes($cabeceras) . "');</script>";


    if (mail($para, $titulo, $msjCorreo, $cabeceras)) {
        // header(header: "Location: static.php?name=" . $nombre . "&email=" . $email . "&empresa=" . $empresa . "&telefono=" . $telefono . "&mensaje=" . $mensaje);
        header("Location: static.php");
    } else {
        // header('Location: index.php?mail_result=Error sending message. Please try later.');
    }
} else {
    header("Location: ../../index.php");
}
?>


