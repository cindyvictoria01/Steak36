<?php 
include '../../connection.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM contact WHERE id_contact='$id'");
header("location:index.php");
?>