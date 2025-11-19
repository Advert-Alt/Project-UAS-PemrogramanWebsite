<?php
include "koneksi.php";


$query = "SELECT p.id AS pesanan_id, p.metode, p.total_harga, p.status, p.dibuat_pada,
                 d.nama AS menu_nama, d.harga, d.jumlah, d.subtotal
          FROM pesanan p
          JOIN pesanan_detail d ON p.id = d.pesanan_id
          ORDER BY p.dibuat_pada DESC";
$result = mysqli_query($conn, $query);


$pesanan_list = [];
while($row = mysqli_fetch_assoc($result)){
    $pesanan_id = $row['pesanan_id'];
    if(!isset($pesanan_list[$pesanan_id])){
        $pesanan_list[$pesanan_id] = [
            'metode' => $row['metode'],
            'total_harga' => $row['total_harga'],
            'status' => $row['status'],
            'dibuat_pada' => $row['dibuat_pada'],
            'items' => []
        ];
    }
    $pesanan_list[$pesanan_id]['items'][] = [
        'nama' => $row['menu_nama'],
        'harga' => $row['harga'],
        'jumlah' => $row['jumlah'],
        'subtotal' => $row['subtotal']
    ];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Daftar Pesanan - BeanScape Coffee</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body { background-color: #f4f1ea; font-family: Arial, sans-serif; }
h2 { color: #4e342e; margin-bottom: 20px; }
.table th, .table td { vertical-align: middle; }
.btn-coffee { background-color: #6f4e37; color: #fff; }
.btn-coffee:hover { background-color: #563b2a; }
</style>
</head>
<body>
<div class="container mt-5">
<h2>Daftar Pesanan</h2>

<?php foreach($pesanan_list as $id => $pesanan): ?>
<div class="card mb-4">
    <div class="card-header bg-light d-flex justify-content-between align-items-center">
        <div>
            <strong>Pesanan #<?= $id ?></strong> | Metode: <?= $pesanan['metode'] ?> | Status: <?= $pesanan['status'] ?> | Total: Rp <?= number_format($pesanan['total_harga'],0,',','.') ?>
        </div>
        <div>
            <a href="struk_print.php?id=<?= $id ?>" target="_blank" class="btn btn-sm btn-coffee">Cetak Struk</a>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Menu</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($pesanan['items'] as $item): ?>
                <tr>
                    <td><?= $item['nama'] ?></td>
                    <td>Rp <?= number_format($item['harga'],0,',','.') ?></td>
                    <td><?= $item['jumlah'] ?></td>
                    <td>Rp <?= number_format($item['subtotal'],0,',','.') ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?php endforeach; ?>

</div>
</body>
</html>
