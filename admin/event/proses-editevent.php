<?php
include '../../connection.php';

$id=$_POST['id_event'];

$judul = $_POST['judul'];

$deskripsi = $_POST['deskripsi'];

$date_from = $_POST['date_from'];

$date_until = $_POST['date_until'];

$namaFile = $_FILES['gambar']['name'];

$namaSementara = $_FILES['gambar']['tmp_name'];

$dirUpload = "../../template_admin/img/";


$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);


mysqli_query($koneksi, "UPDATE `event` SET `nama_event`='$judul', `deskripsi`='$deskripsi',`date_from`='$date_from', `date_until`='$date_until' WHERE id_event='$id'");

if ($terupload) {
	mysqli_query($koneksi, "UPDATE `event` SET `gambar`='$namaFile' WHERE id_event='$id'");
}

echo "Upload berhasil!<br/>";

echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";

header("location:index.php");

?>