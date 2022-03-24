<?php
$name = $_POST['txtName'];
$datetime = $_POST['dtDateTime'];
$emaill = $_POST['txtEmail'];
$guest = $_POST['txtGuest'];
$phone = $_POST['txtPhone'];
$newDate = date("Y-m-d H:i:s", strtotime($datetime));

$to_email = "$emaill";
$subject = "Reservation Steak36";
$body = "Hello, $name \nThank you for booking your table with us! Your reservation for $guest people on $newDate is confirmed. For any changes please call 061- 83906327. \nYour Reservation: \n Name: $name\nPhone Number: $phone\nEmail: $emaill\nTotal Guest: $guest\nBooking Date and Time: $newDate\nWe look forward to serving you, please don’t hesitate to contact us for any questions or concerns.\nAll the best,\nReservation Team";
$headers = "From: steak\'s 36";
 
if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email";
    include 'connection.php';
    mysqli_query($koneksi,"INSERT INTO `tbl_reservation`(`fldName`, `fldDateTime`, `fldEmail`, `fldGuest`, `fldPhone`) VALUES('$name','$newDate','$emaill','$guest','$phone')");
} else {
    echo "Email sending failed...";
}
