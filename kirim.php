<?php

$nama = htmlspecialchars($_POST['nama']);
$email = htmlspecialchars($_POST['email']);
$pesan = htmlspecialchars($_POST['pesan']);


$file = "data_pesan.txt";


$waktu = date("d-m-Y H:i:s");
$isi_pesan = "==============================\n";
$isi_pesan .= "Waktu   : $waktu\n";
$isi_pesan .= "Nama    : $nama\n";
$isi_pesan .= "Email   : $email\n";
$isi_pesan .= "Pesan   : $pesan\n\n";


file_put_contents($file, $isi_pesan, FILE_APPEND);


header("Location: beanscape.php?success=1");
exit;
?>
