<?php 
include "koneksi.php";
$menu = mysqli_query($conn, "SELECT * FROM menu WHERE tersedia = 1");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu - BeanScape Coffee</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
      body {
        background-color: #f4f1ea;
      }
      .menu-header {
        padding: 60px 0;
        text-align: center;
        color: #f0eeeeff;
        background: #5e3c05ff;
      }
      .card {
        border: none;
        border-radius: 12px;
        background: #fff;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      }
      .btn-coffee {
        background-color: #6f4e37;
        color: #fff;
      }
      .btn-coffee:hover {
        background-color: #563b2a;
        color: #fff;
      }
      .price {
        font-size: 1.2rem;
        font-weight: bold;
        color: #6f4e37;
      }
      .btn-back {
        margin-top: 15px;
        background-color: #4e342e;
        color: #fff;
      }
      .btn-back:hover {
        background-color: #3b231f;
        color: #fff;
      }
  </style>
</head>
<body>

<!-- HEADER -->
<section class="menu-header">
    <h1 class="fw-bold">Our Coffee Menu</h1>
    <p>Freshly brewed, served with passion ☕</p>
    <a href="beanscape.php" class="btn btn-back">Kembali ke Home</a>
</section>

<div class="container">
    <div class="row g-4">

        <?php while ($row = mysqli_fetch_assoc($menu)) { ?>
        <div class="col-md-4">
            <div class="card p-3">
                <!-- Ubah src menjadi langsung dari database -->
                <img src="<?= $row['gambar'] ?>" class="card-img-top rounded" height="250" style="object-fit: cover;">
                
                <div class="card-body text-center">
                    <h4 class="card-title"><?= $row['nama'] ?></h4>
                    <p class="price">Rp <?= number_format($row['harga'], 0, ',', '.') ?></p>
                    <p class="text-muted small"><?= $row['deskripsi'] ?></p>

                    <form action="cart.php" method="POST">
                        <input type="hidden" name="menu_id" value="<?= $row['id'] ?>">
                        <button type="submit" class="btn btn-coffee w-100 mt-2">Pesan</button>
                    </form>
                </div>
            </div>
        </div>
        <?php } ?>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
