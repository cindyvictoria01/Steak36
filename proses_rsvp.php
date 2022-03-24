<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include librari phpmailer
include('phpmailer/Exception.php');
include('phpmailer/PHPMailer.php');
include('phpmailer/SMTP.php');

$name = $_POST['txtName'];
$datetime = $_POST['dtDateTime'];
$emaill = $_POST['txtEmail'];
$guest = $_POST['txtGuest'];
$phone = $_POST['txtPhone'];
$newDate = date("Y-m-d H:i:s", strtotime($datetime));

$email_pengirim = 'steak36.id@gmail.com'; // Isikan dengan email pengirim
$nama_pengirim = 'steak36'; // Isikan dengan nama pengirim
$subjek = "From: Steak's 36";; // Ambil subjek dari inputan form
$pesan = "Hello, $name \nThank you for booking your table with us! Your reservation for $guest people on $newDate is confirmed. For any changes please call 061- 83906327. \nYour Reservation: \n Name: $name\nPhone Number: $phone\nEmail: $emaill\nTotal Guest: $guest\nBooking Date and Time: $newDate\nWe look forward to serving you, please don’t hesitate to contact us for any questions or concerns.\nAll the best,\nReservation Team"; // Ambil pesan dari inputan form


$mail = new PHPMailer;
// $mail->isSMTP();

$mail->Host = "smtp.gmail.com";
$mail->Username = 'steak36.id@gmail.com';
$mail->Password = 'FinalWeb2';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->SMTPDebug = 2; // Aktifkan untuk melakukan debugging

$mail->setFrom($email_pengirim, $nama_pengirim);
$mail->addAddress($emaill, '');


$mail->Subject = $subjek;
$mail->Body = $pesan;



$send = $mail->send();

if($send){ // Jika Email berhasil dikirim
    echo "<h1>Email berhasil dikirim</h1><br /><a href='index.php'>Kembali ke Form</a>";
}else{ // Jika Email gagal dikirim
    echo "<h1>Email gagal dikirim</h1><br /><a href='index.php'>Kembali ke Form</a>";
    // echo '<h1>ERROR<br /><small>Error while sending email: '.$mail->getError().'</small></h1>'; // Aktifkan untuk mengetahui error message
}
?>
