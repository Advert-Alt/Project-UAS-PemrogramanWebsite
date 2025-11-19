<?php

$file = "data_pesan.txt";


if (!file_exists($file)) {
    $pesan = "Belum ada data pesan.";
} else {
    $pesan = file_get_contents($file);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Panel - BeanScape</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background: #f2f2f2;
        padding: 40px;
    }
    h1 {
        text-align: center;
        margin-bottom: 20px;
    }
    .container {
        background: white;
        padding: 20px;
        border-radius: 10px;
        max-width: 700px;
        margin: auto;
        box-shadow: 0px 0px 15px rgba(0,0,0,0.1);
    }
    pre {
        background: #333;
        color: #fff;
        padding: 20px;
        border-radius: 10px;
        white-space: pre-wrap;
    }
    .btn {
        display: inline-block;
        padding: 10px 15px;
        background: red;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        margin-top: 15px;
    }
</style>
</head>
<body>

<h1>ADMIN PANEL - BeanScape</h1>

<div class="container">
    <h3>Semua Pesan Masuk:</h3>
    <pre><?php echo $pesan; ?></pre>

    <a href="hapus_pesan.php" class="btn">Hapus Semua Pesan</a>
</div>

</body>
</html>
