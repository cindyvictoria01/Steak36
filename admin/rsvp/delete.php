<?php
include '../../connection.php';

mysqli_query($koneksi, "DELETE FROM tbl_reservation WHERE id='$id'");

echo "Delete berhasil!<br/>";

header("location:index.php");

?>