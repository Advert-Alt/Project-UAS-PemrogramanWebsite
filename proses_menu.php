<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$harga = $_POST['harga'];
$kategori = $_POST['kategori'];

$namaFile = $_FILES['gambar']['name'];
$lokasiTemp = $_FILES['gambar']['tmp_name'];

$folderTujuan = "uploads/" . $namaFile;


move_uploaded_file($lokasiTemp, $folderTujuan);


$query = "INSERT INTO menu (nama, harga, kategori, gambar)
          VALUES ('$nama', '$harga', '$kategori', '$namaFile')";

mysqli_query($koneksi, $query);

header("Location: menu.php");
?>
