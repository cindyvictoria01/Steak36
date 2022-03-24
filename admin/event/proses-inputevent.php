<?php
include '../../connection.php';

$judul = $_POST['judul'];

$deskripsi = $_POST['deskripsi'];

$date_from = $_POST['date_from'];

$date_until = $_POST['date_until'];

$namaFile = $_FILES['gambar']['name'];

$namaSementara = $_FILES['gambar']['tmp_name'];

$dirUpload = "../../template_admin/img/";


$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);


mysqli_query($koneksi,"INSERT INTO `event`(`nama_event`, `deskripsi`,`date_from`, `date_until`) VALUES ('$judul','$deskripsi','$date_from','$date_until')");

if ($terupload) {
	$sql = "select max(id_event) as last_id from event limit 1";
	
    $hasil = mysqli_query($koneksi, $sql);
	
    $row = mysqli_fetch_array($hasil);
	
    $lastId = $row['last_id'];

	mysqli_query($koneksi, "UPDATE `event` SET `gambar`='$namaFile' WHERE id_event='$lastId'");
}
echo "Upload berhasil!<br/>";

echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";

header("location:index.php");

?>