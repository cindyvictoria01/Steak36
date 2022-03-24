<?php
include '../../connection.php';

$id=$_POST['id'];
$fldName = $_POST['fldName'];
$fldDateTime = $_POST['fldDateTime'];
$fldEmail = $_POST['fldEmail'];
$fldGuest = $_POST['fldGuest'];
$fldPhone = $_POST['fldPhone'];

mysqli_query($koneksi, "UPDATE `tbl_reservation` SET `fldName`='$fldName',`fldDateTime`='$fldDateTime',`fldEmail`='$fldEmail',`fldGuest`='$fldGuest',`fldPhone`='$fldPhone' WHERE id='$id'");

echo "Upload berhasil!<br/>";

header("location:index.php");

?>