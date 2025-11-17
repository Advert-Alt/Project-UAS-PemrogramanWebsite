<?php
session_start();
include "koneksi.php";

if(!isset($_SESSION['cart']) || empty($_SESSION['cart'])){
    echo "Keranjang kosong.";
    exit;
}

$nama = $_POST['nama'];
$metode = $_POST['metode'];
$catatan = $_POST['catatan'];
$total = 0;

foreach($_SESSION['cart'] as $item){
    $total += $item['harga'] * $item['jumlah'];
}

// Simpan pesanan ke tabel `pesanan`
$stmt = $conn->prepare("INSERT INTO pesanan (user_id, metode, total_harga, status) VALUES (?, ?, ?, ?)");
$user_id = 0; // kalau tidak login, bisa 0
$status = "Pending";
$stmt->bind_param("isii", $user_id, $metode, $total, $status);
$stmt->execute();

// Bisa simpan detail pesanan juga jika ada tabel detail
// ... di sini bisa buat INSERT ke tabel detail dengan id pesanan terakhir

// Hapus cart setelah checkout
unset($_SESSION['cart']);

echo "Pesanan berhasil dibuat! Total: Rp ".number_format($total,0,',','.');
