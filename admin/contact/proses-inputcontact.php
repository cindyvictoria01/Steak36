<?php
include '../../connection.php';

$contact = $_POST['contact'];

mysqli_query($koneksi,"INSERT INTO `contact`(`contact`) VALUES ('$contact')");

echo "Upload berhasil!<br/>";

header("location:index.php");

?>