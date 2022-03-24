<?php
include '../../connection.php';


$judul = $_POST['judul'];

$deskripsi = $_POST['deskripsi'];

$harga = $_POST['harga'];

$kategori = $_POST['kategori'];

$addition = $_POST['addition'];

$namaFile = $_FILES['gambar']['name'];

$namaSementara = $_FILES['gambar']['tmp_name'];

$dirUpload = "../../template_admin/img/";


$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);


mysqli_query($koneksi,"INSERT INTO `menu`(`nama_menu`, `deskripsi`, `harga`, `kategori`,`addition`) VALUES('$judul','$deskripsi','$harga','$kategori','$addition')");

if ($terupload) {
	$sql = "select max(id_menu) as last_id from menu limit 1";
	
    $hasil = mysqli_query($koneksi, $sql);
	
    $row = mysqli_fetch_array($hasil);
	
    $lastId = $row['last_id'];

	mysqli_query($koneksi, "UPDATE `menu` SET `gambar`='$namaFile' WHERE id_menu='$lastId'");
}
echo "Upload berhasil!<br/>";

echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";

header("location:index.php");

?>