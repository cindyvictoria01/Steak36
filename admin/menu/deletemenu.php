<?php 
include '../../connection.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM menu WHERE id_menu='$id'");
header("location:index.php");
?>