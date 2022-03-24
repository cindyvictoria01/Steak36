<?php
include 'connection.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include librari phpmailer
include('phpmailer/Exception.php');
include('phpmailer/PHPMailer.php');
include('phpmailer/SMTP.php');

$emaill = 'steak36.id@gmail.com';

$email = $_POST['email'];

$nama = $_POST['nama'];

$isi = $_POST['isi'];

$rate = $_POST['rating'];

// $email_pengirim = $email; // Isikan dengan email pengirim

$nama_pengirim = 'Customer'; // Isikan dengan nama pengirim

$subjek = "Feedback from $nama"; // Ambil subjek dari inputan form

$pesan = "We received some feedback from your customer.\nHeres the detail: \nEmail: $email\nName: $nama\nFeedback: $isi\nRating: $rate stars";

$sqls = mysqli_query($koneksi,"SELECT fldEmail as email_pengirimm FROM tbl_reservation WHERE fldName = '$nama'");

$rows = mysqli_fetch_array($sqls);

$email_pengirim = $rows['email_pengirimm'];

$mail = new PHPMailer;

$mail->Host = "smtp.gmail.com";
$mail->Port = 587;
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

$sql = mysqli_query($koneksi,"SELECT id as last_id FROM tbl_reservation WHERE fldName = '$nama'");

if(mysqli_num_rows($sql) > 0){
	$row = mysqli_fetch_array($sql);
	$id = $row['last_id'];
	mysqli_query($koneksi,"INSERT INTO `feedback`(`isi_feedback`, `point`, `id_user`) VALUES ('$isi','$rate','$id')");
}
else{
	echo "Tamu tidak terdaftar! ";
}

?>