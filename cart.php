<?php
session_start();
include "koneksi.php";

// Menambahkan item ke cart
if(isset($_POST['menu_id'])){
    $id = $_POST['menu_id'];
    $result = mysqli_query($conn, "SELECT * FROM menu WHERE id = $id");
    $item = mysqli_fetch_assoc($result);

    if(isset($_SESSION['cart'][$id])){
        $_SESSION['cart'][$id]['quantity'] += 1;
    } else {
        $_SESSION['cart'][$id] = [
            "nama" => $item['nama'],
            "harga" => $item['harga'],
            "quantity" => 1
        ];
    }
}

// Hapus item dari cart
if(isset($_GET['remove'])){
    $id = $_GET['remove'];
    unset($_SESSION['cart'][$id]);
}

// Update jumlah item
if(isset($_POST['update'])){
    foreach($_POST['quantities'] as $id => $qty){
        if($qty <= 0){
            unset($_SESSION['cart'][$id]);
        } else {
            $_SESSION['cart'][$id]['quantity'] = $qty;
        }
    }
}

// Checkout
$success = '';
$checkoutSummary = [];
if(isset($_POST['checkout'])){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $catatan = $_POST['catatan'];
    $metode = $_POST['metode'];
    $total = 0;

    if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])){
        foreach($_SESSION['cart'] as $id => $item){
            $total += $item['harga'] * $item['quantity'];
        }

        // Simpan ke tabel pesanan
        $stmt = $conn->prepare("INSERT INTO pesanan (user_id, metode, total_harga, status) VALUES (?, ?, ?, ?)");
        $user_id = 1; // contoh, ganti sesuai session user
        $status = 'Pending';
        $stmt->bind_param("isds", $user_id, $metode, $total, $status);
        $stmt->execute();

        // Simpan ringkasan pesanan untuk ditampilkan
        $checkoutSummary = $_SESSION['cart'];

        // Kosongkan cart
        $_SESSION['cart'] = [];

        $success = "Pemesanan berhasil! Silakan tunggu pesanan Anda.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Keranjang - BeanScape Coffee</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body { background-color: #f4f1ea; font-family: Arial, sans-serif; }
.container { margin-top: 50px; }
h2 { color: #4e342e; margin-bottom: 30px; }
.table th, .table td { vertical-align: middle; }
.btn-coffee { background-color: #6f4e37; color: #fff; }
.btn-coffee:hover { background-color: #563b2a; }
.card-checkout { background: #fff; border-radius: 12px; padding: 20px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); }
.alert-success { font-weight: bold; }
</style>
</head>
<body>
<div class="container">

<h2>Keranjang Belanja</h2>

<?php if($success): ?>
    <div class="alert alert-success"><?= $success ?></div>
    <?php if(!empty($checkoutSummary)): ?>
        <h4>Ringkasan Pesanan:</h4>
        <ul class="list-group mb-3">
            <?php foreach($checkoutSummary as $item): ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?= $item['nama'] ?> (x<?= $item['quantity'] ?>)
                    <span>Rp <?= number_format($item['harga']*$item['quantity'],0,',','.') ?></span>
                </li>
            <?php endforeach; ?>
            <li class="list-group-item d-flex justify-content-between align-items-center fw-bold">
                Total
                <span>Rp <?= number_format($total,0,',','.') ?></span>
            </li>
        </ul>
        <a href="menu.php" class="btn btn-coffee w-100">Kembali ke Menu</a>
    <?php endif; ?>
<?php elseif(!empty($_SESSION['cart'])): ?>
<form method="POST" action="">
<table class="table table-bordered bg-white rounded shadow-sm">
    <thead class="table-light">
        <tr>
            <th>Menu</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Subtotal</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $total = 0;
        foreach($_SESSION['cart'] as $id => $item):
            $subtotal = $item['harga'] * $item['quantity'];
            $total += $subtotal;
        ?>
        <tr>
            <td><?= $item['nama'] ?></td>
            <td>Rp <?= number_format($item['harga'],0,',','.') ?></td>
            <td>
                <input type="number" name="quantities[<?= $id ?>]" value="<?= $item['quantity'] ?>" class="form-control" style="width:80px;">
            </td>
            <td>Rp <?= number_format($subtotal,0,',','.') ?></td>
            <td><a href="?remove=<?= $id ?>" class="btn btn-danger btn-sm">Hapus</a></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<div class="mb-3 text-end">
    <h4>Total: Rp <?= number_format($total,0,',','.') ?></h4>
</div>

<div class="mb-3">
    <button type="submit" name="update" class="btn btn-coffee">Update Jumlah</button>
</div>
</form>

<hr>

<div class="card-checkout">
    <h3>Form Pemesanan</h3>
    <form method="POST" action="">
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Alamat / Meja</label>
            <input type="text" name="alamat" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Catatan Tambahan</label>
            <textarea name="catatan" class="form-control" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label>Metode Pesan</label>
            <select name="metode" class="form-control" required>
                <option value="dine-in">Dine-in</option>
                <option value="take-away">Take Away</option>
                <option value="delivery">Delivery</option>
            </select>
        </div>
        <button type="submit" name="checkout" class="btn btn-coffee w-100">Checkout</button>
    </form>
</div>

<?php else: ?>
    <p class="alert alert-info">Keranjang belanja kosong.</p>
    <a href="menu.php" class="btn btn-coffee">Kembali ke Menu</a>
<?php endif; ?>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
