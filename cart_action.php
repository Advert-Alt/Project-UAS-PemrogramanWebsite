<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['menu_id'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'] ?? 1;

    // Jika item sudah ada di cart, jumlah bertambah
    if(isset($_SESSION['cart'][$id])){
        $_SESSION['cart'][$id]['jumlah'] += $jumlah;
    } else {
        $_SESSION['cart'][$id] = [
            'id' => $id,
            'nama' => $nama,
            'harga' => $harga,
            'jumlah' => $jumlah
        ];
    }
}

// Redirect ke halaman cart
header("Location: cart.php");
exit;
