<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load PHPMailer
require '../../vendor/autoload.php'; // or include manually if not using Composer

$spam = htmlspecialchars($_POST['spam']);
if ($spam == 4) {
    $nombre   = htmlspecialchars($_POST['name']);
    $email    = htmlspecialchars($_POST['email']);
    $empresa  = htmlspecialchars($_POST['empresa']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $mensaje  = htmlspecialchars($_POST['message']);

    session_start();
    $_SESSION["nombre"]   = $nombre;
    $_SESSION["email"]    = $email;
    $_SESSION["empresa"]  = $empresa;
    $_SESSION["telefono"] = $telefono;
    $_SESSION["mensaje"]  = $mensaje;

    // Create instance of PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.ethereal.email';               // SMTP server (Gmail in this case)
        $mail->SMTPAuth   = true;
        $mail->Username   = 'norene.stanton46@ethereal.email';         // Your SMTP email
        $mail->Password   = 'VAq4rtUw96bScw1gVg';            // App-specific password (not your Gmail password)
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;    // Use TLS or SMTPS
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom('norene.stanton46@ethereal.email', 'Ethereal Test');
        // $mail->setFrom('no-reply@solistopografia.com', 'Solis Topografía');
        $mail->addAddress('contacto@solistopografia.com');  // Change to your recipient
        $mail->addReplyTo($email, $nombre);

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'MENSAJE solistopografia.com: ' . $nombre;
        $mail->Body    = "
            <strong>Nombre:</strong> $nombre<br>
            <strong>E-Mail:</strong> $email<br>
            <strong>Empresa:</strong> $empresa<br>
            <strong>Telefono:</strong> $telefono<br>
            <strong>Mensaje:</strong><br>$mensaje
        ";

        $mail->send();
        // ✅ Ensure session data is saved
        session_write_close();
        // Redirect to success page
        header("Location: static.php");
        exit;
    } catch (Exception $e) {
        echo "<h3>Error: Message could not be sent.</h3>";
        echo "<p>Mailer Error: " . $mail->ErrorInfo . "</p>";
    }

} else {
    header("Location: ../../index.php");
}
