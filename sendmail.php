<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
 
require '/vendor/autoload.php';
 
$mail = new PHPMailer(true);
 
try {
    //Konfigurasi Server Email
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'steak36.id@gmail.com';
    $mail->Password   = 'FinalWeb2';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;
 
    //Penerima
    $mail->setFrom('steak36.id@gmail.com', 'steak36');
    $mail->addAddress('steak36.id@gmail.com');
 
    // Konten Email
    $mail->isHTML(true);
    $mail->Subject = 'Mengirim Email Dengan PHPMailer - Steak';
    $mail->Body    = 'Pesan berhasil terkirim. Pesan ini dikirim menggunakan library <b>PHPMailer</b>.';
 
    $mail->send();
    echo "Pesan berhasil terkirim.";
} catch (Exception $e) {
    echo "Pesan gagal terkirim. Error : " . $mail->ErrorInfo;
}