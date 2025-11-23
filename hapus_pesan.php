<?php
$file = "data_pesan.txt";

if (file_exists($file)) {
    file_put_contents($file, ""); 
}

header("Location: admin.php"); 
exit;
?>
