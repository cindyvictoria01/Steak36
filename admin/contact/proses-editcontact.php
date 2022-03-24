<?php
include '../../connection.php';

$id=$_POST['id_contact'];

$contact = $_POST['contact'];

mysqli_query($koneksi, "UPDATE `contact` SET `contact`='$contact' WHERE id_contact='$id'");

echo "Upload berhasil!<br/>";

header("location:index.php");

?>