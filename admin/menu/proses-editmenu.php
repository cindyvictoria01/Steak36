<?php
include '../../connection.php';

$id=$_POST['id_menu'];

$judul = $_POST['nama_menu'];

$deskripsi = $_POST['deskripsi'];

$harga = $_POST['harga'];

$kategori = $_POST['kategori'];

$addition = $_POST['addition'];

$namaFile = $_FILES['gambar']['name'];

$namaSementara = $_FILES['gambar']['tmp_name'];

$dirUpload = "../../template_admin/img/";


$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);


mysqli_query($koneksi, "UPDATE `menu` SET `nama_menu`='$judul',`deskripsi`='$deskripsi',`harga`='$harga',`kategori`='$kategori', `addition`='$addition' WHERE id_menu='$id'");

if ($terupload) {
	mysqli_query($koneksi, "UPDATE `menu` SET `gambar`='$namaFile' WHERE id_menu='$id'");
}

echo "Upload berhasil!<br/>";

echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";

header("location:index.php");

?>