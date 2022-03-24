<?php 
include '../../connection.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM event WHERE id_event='$id'");
header("location:index.php");
?>