<?php
// Ambil data dari form
$nama = htmlspecialchars($_POST['nama']);
$email = htmlspecialchars($_POST['email']);
$pesan = htmlspecialchars($_POST['pesan']);

// File penyimpanan pesan
$file = "data_pesan.txt";

// Format pesan yang akan disimpan
$waktu = date("d-m-Y H:i:s");
$isi_pesan = "==============================\n";
$isi_pesan .= "Waktu   : $waktu\n";
$isi_pesan .= "Nama    : $nama\n";
$isi_pesan .= "Email   : $email\n";
$isi_pesan .= "Pesan   : $pesan\n\n";

// Simpan ke file (tambahkan pesan baru di akhir)
file_put_contents($file, $isi_pesan, FILE_APPEND);

// Redirect kembali ke halaman beanscape.php dengan notifikasi sukses
header("Location: beanscape.php?success=1");
exit;
?>
